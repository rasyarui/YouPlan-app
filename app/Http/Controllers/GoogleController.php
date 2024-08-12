<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;


class GoogleController extends Controller
{



    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try {
            $user = Socialite::driver('google')->user();

            $findUser = User::where('google_id', $user->id)->first();


            if($findUser){
                $findUser['avatar'] = $user->getAvatar() ?? null;
                $findUser->save();
                Auth::login($findUser);

                return redirect('/todo');
            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],
                [
                    'name' => $user->name,
                    'username' => $user->getName(),
                    'google_id' => $user->id,
                    'avatar' => $user->getAvatar() ?? null,
                    'password' => encrypt('1234dummy'),
                    'password_confirmation' => encrypt('1234dummy')
                ]);
                Auth::login($newUser);

                return redirect('/todo');


            }
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function genRandom($limit)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }
}
