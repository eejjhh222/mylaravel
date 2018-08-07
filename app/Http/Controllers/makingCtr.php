<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class makingCtr extends Controller
{
    //함수지정안했을때 기본실행함수
    public function __invoke()
    {
        // TODO: Implement __invoke() method.

        return "invoke.";
    }


    public function viewing($id='')
    {
//        return "id : ".$id;
        $view = view('test');
        $view->greeting = "Hey~ What's up ".$id;

        return $view;
    }
}
