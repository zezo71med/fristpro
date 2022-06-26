<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Datacontroller extends Controller
{
    //
    public function getindex()
    {
        $data=[];
//        $data['age'] = 15;
//        $data['name']='ali momen';
//        $data['tall']='165 cm';
//        $obj = new \stdClass();
//        $obj->id = 215235;
//        $obj->name = 'ali hassen';
//        $obj->age = 25;
//        $obj->tall = '160 cm';
//        return view('welcome', compact('obj'));
        return view('welcome',compact('data')) ;

    }


}
