<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class Socialcontroller extends Controller
{

    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }
    /**
     * Obtain the user information from Social Logged in.
     * @param $social
     * @return Response
     */
    public function callback($social)
    {
        $userSocial = Socialite::driver($social)->user();
        $user = User::where(['email' => $userSocial->getEmail()])->first();
        if($user){
            Auth::login($user);
            return redirect()->action('HomeController@index');
        }else{
            return view('auth.register',['name' => $userSocial->getName(), 'email' => $userSocial->getEmail()]);
        }
    }


}
