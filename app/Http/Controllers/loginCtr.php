<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Hash;

class loginCtr extends Controller
{
    //

    public function join(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
        $pw = $request->input('pw');
        $token = $request->input('_token');

        $users = new users;

//        $users->id = $id;
        $users->name = $name;
        $users->email = $email;
        $users->password = Hash::make($pw);
        $users->remember_token = $token;

        $users->save();

        echo "<script>alert('회원가입 완료.');</script>";
        return view('/login/login');

    }


    public function login(Request $request){
//        dd($request);

        $email = $request->input('email');
        $pw = $request->input('pw');

        if($this->checkEmail($email) === false){
            echo "<script>alert('Email정보가 없음.');</script>";
            return view('/login/login');
        }

        if($this->checkPw($pw) === false){
            echo "<script>alert('PW가 틀림.');</script>";
            return view('/login/login');
        }

        return view('/login/loginOk');

    }

    private function checkEmail($email){
//        $req = users::all(); // 모든내용 select
        $req = users::where('email',$email)
                    ->get();

        // ->take(10) // limit 10
        echo "result</br><pre>";
        dd($req);

        /*foreach ($flights as $flight) {
            echo $flight->name;
        }*/

    }

    private function checkpw($pw){

    }
}
