<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\NewModel;

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

    public function selectDB()
    {
        $results = DB::select('select * from test');
        echo "<pre>";
        print_r($results);

    }

    public function useDB(){

//        $flights = NewModel::all(); // 모든내용 select
        $flights = NewModel::where('id','myid2')
                              ->get();
        // ->take(10) // limit 10
        echo "start</br><pre>";
        dd($flights);

        /*foreach ($flights as $flight) {
            echo $flight->name;
        }*/
    }
}
