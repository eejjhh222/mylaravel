<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Hash;
use Illuminate\Support\Facades\Storage;

class loginCtr extends Controller
{
    //

    public function join(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $pw = $request->input('pw');
        $token = $request->input('_token');

        $users = new users;

        $users->name = $name;
        $users->email = $email;
        $users->password = Hash::make($pw);
        $users->remember_token = $token;

        $users->save();

        echo "<script>alert('회원가입 완료.');</script>";
        return redirect()->route('login');
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(Request $request){
//        dd($request);

        $email = $request->input('email');
        $pw = $request->input('pw');

        if($this->checkEmail($email) === false){
            $url = route('login');
            echo "<script>alert('Email정보가 없음.');location.href('".$url."');</script>";
            exit;
        }

        if($this->checkPw($email, $pw) === false){
            $url = route('login');
            echo "<script>alert('PW가 틀림.');location.href('".$url."');</script>";
            exit;
        }

        $request->session()->put('email', $email);
        $request->session()->put('id', $this->getId($email));

        return redirect()->route('loginOk');
    }

    private function checkEmail($email){
//        $req = users::all(); // 모든내용 select
        $req = users::select('id')
                    ->where('email',$email)
                    ->get();
        // ->take(10) // limit 10
        if(count($req) > 0)
            return true;
        else
            return false;

    }

    private function checkpw($email, $pw){
        $res_pw = users::where('email', $email)->value('password');
        return Hash::check($pw, $res_pw);
    }

    private function getId($email){
        $id = users::where('email',$email)->value('id');
        return $id;
    }
    
    public function loginOk(Request $request){
        if($request->session()->has('email') == false){
            echo "<script>alert('session 정보가 없음');</script>";
            return redirect()->route('login');
        }

        $view = view('login/loginOk');
        $view->session_email = $request->session()->get('email');
        $view->id = $request->session()->get('id');

        return $view;
    }

    public function faceup(Request $request){
//        dd($request);
//        echo "<pre>";
//        $res = $request->file('faceImg')->move('public',$request->file('faceImg')->getClientOriginalName());
        $res = Storage::put('public/'.$request->file('faceImg')->getClientOriginalName(), '' );
        if($res == true)
            echo Storage::url('public/'.$request->file('faceImg')->getClientOriginalName());
    }

    public function viewImg(){
        $files = Storage::allFiles('');
        print_r($files);

//        return $str;
    }

}
