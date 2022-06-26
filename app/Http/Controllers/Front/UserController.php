<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\controller;

class UserController extends Controller
{
    public function showusername()
    {

        return 'ahmed emad ';
    }

    public function booster(){
        return view('booster');
    }

    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

}
