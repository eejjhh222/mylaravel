<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class requestCtr extends Controller
{
    // get, post form test
    // db query test

    public function defaultparams(){
        $view = view('ftest/default');
        return $view;
    }

    public function getparams(){
        $view = view('ftest/form1');
        return $view;
    }

    public function postparams(){
        $view = view('ftest/form2');
        return $view;
    }

    public function putparams(Request $request){
        dd($request);

//        $name = $request->input('name');
//        return $name;
    }

    private function dbinsert(){

    }

    private function dbupdate(){

    }

    private function dbselect(){

    }
}
