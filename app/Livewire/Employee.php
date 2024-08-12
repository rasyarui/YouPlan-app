<?php

namespace App\Livewire;


use Carbon\Carbon;

use App\Models\Note;
use App\Models\Todo;
use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class Employee extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $activity;
    public $activityedit;

    public $activity_id;
    public $user_id;

    public $updateData = false;

    // public $activityId;

    public $defaultStatus = "PENDING";

    public function store()
    {

        // $user_id = Auth::user()->id;

        $rules = [
            'activity' => ['required', 'max:225'],
        ];
        // sleep(2);
        $customMessages = [
            'required' => 'The plan field is required.'
        ];


        $this->validate($rules, $customMessages);

        Todo::create([
            'activity' => $this->activity,  
            'status' => $this->defaultStatus,
            'user_id' => Auth::user()->id,
            'activity_id' => Auth::user()->activity_id,
        ]);

        $this->clear();

        // return redirect()->back()->with('successD', 'berhasil');
    }

    public function edit2($id)
    {
        $data = Todo::find($id);

        $this->activityedit = $data->activity;


        $this->activity_id = $id;
        $this->updateData = true;
    }

    public function delete()
    {
        // INSECURE!
        $todo = Todo::find($this->activity_id);
        $todo->delete([
            'activity' => $this->activityedit,
        ]);
        Session::flash('successD', 'Todo Deleted Successfully         
');
    }


    public function clear()
    {
        $this->activity = "";

        $this->updateData = false;
        $this->activity_id = '';
    }



    public function update()
    {


        $data = Todo::find($this->activity_id);

        if ($data) {
            $this->validate([
                'activityedit' => 'required'
            ]);

            $data->update([
                'activity' => $this->activityedit,
                'status' => $this->defaultStatus
            ]);
            return redirect('/todo')->with('successD', 'Todo Updated Successfully.');
        } else {
            dd("gagal");
        }
    }



    public function logout(Request $request)
    {
        Auth::logout();



        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function edit($id)
    {
        $data = Todo::find($id);

        $this->activityedit = $data->activity;


        $this->activity_id = $id;
        $this->updateData = true;
    }



    public function complete(Todo $todo)
    {

        $todo->update(['status' => 'DONE']);
        return redirect()->back();


        // $this->activity = $data->ativity;
    }

    public function render()
    {


        // public $activity; 
        // $user_id = Auth::user()->id;
        // $userId = Auth::id();
        // $data = Todo::where('user_id', '=', $userId);



        $datas = Todo::whereUserId(auth()->user()->id)->whereDate('created_at', Carbon::today())->get();

        // $users = $data->paginate(5);

        // Carbon::setTestNow(testNow:'2024-22-2 11:00:00');


        // $data = Todo::all()->where('user_id', '=', $userId);
        return view('livewire.employee', ['dataPlan' => $datas,  'user' => User::all()]);
    }
}
