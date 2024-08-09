<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GithubController extends Controller
{
    //

    public function redirectToGithub(){
        return Socialite::driver('github')->redirect();
    }

    public function handleGithubCallback(){
        try {
            $user = Socialite::driver('github')->user();

            $findUser = User::where('github_id', $user->id)->first();

            if($findUser){
                $findUser['avatar'] = $user->getAvatar() ?? null;
                $findUser->save();
                Auth::login($findUser);

                return redirect()->intended('/todo');
            }else{
                $newUserGithub = User::updateOrCreate(['email' => $user->email],
                [
                    'name' => $user->name,
                    'username' => $user->getName(),
                    'github_id' => $user->id,
                    'avatar' => $user->getAvatar() ?? null,
                    'password' => encrypt('1234dummy'),
                    'password_confirmation' => encrypt('1234dummy')
                ]);
                Auth::login($newUserGithub);

                return redirect()->intended('/todo');

            }
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }
}
