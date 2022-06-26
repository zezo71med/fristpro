<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Newcontroller extends Controller
{

    //
    public function __construct()
    {
//     $this->middleware('auth')->except('newcontro1');
    }

    public function Newcontro0()
    {
        return 'controller0';
    }

    public function newcontro1()
    {
        return 'controller1';
    }

    public function newcontro2()
    {
        return 'controller2';
    }

    public function newcontro3()
    {
        return 'controller3';
    }


}
