<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Todo;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class History extends Component
{
    use WithPagination;
    

    public $defaultStatus = "PENDING";

    public $activity;
    public $activityedit;

    public $activity_id;
    public $updateData = false;


    public function render()
    {
      
      
          // $user_id = Auth::user()->id;
          $userId = Auth::id();
          $dates = Todo::whereUserId(auth()->user()->id)->selectRaw('id, activity, status, DATE(created_at) as created_at')->orderBy('created_at', 'desc')->get()->groupBy('created_at');
          return view('livewire.history', compact(var_name: 'dates',
        ));
    }

    public function complete(Todo $todo)
    {

        $todo->update(['status' => 'DONE']);
        return redirect()->back();

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

    Session::flash('successD', 'Success deleted plan.');


    }





}
