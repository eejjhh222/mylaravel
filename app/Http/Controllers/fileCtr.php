<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class fileCtr extends Controller
{
    //
    public function upload(Request $request){
//        echo "<pre>";

        $path = $request->file('imgFile')
            ->storeAs('imgFile', $request->file('imgFile')->getClientOriginalName());

        echo "img page<br>";
        $str = "<img src='storage/".$path."'>";
        echo $str;
        exit;


        if($request->hasFile('imgFiles'))
        {
            $files = $request->file('imgFiles');
            foreach ($files as $file) {
                $file_name = $file->store('');
            }
        }
//        $request->file('imgFile')->getClientOriginalName();
//        $path = Storage::putFile('imgFile', $request->file('imgFile'));
//        print_r($path);
//        $str = "<img src='storage/".$path."'>";
//        echo $str;
//        echo "<img src='storage/8uX9R2NFp1anmovHxLM4J94ALe54w0KaKgGyHqDy.jpeg'><br>";
//        $file = \App\Files::findOrFail('8uX9R2NFp1anmovHxLM4J94ALe54w0KaKgGyHqDy.jpeg');

//        print_r($file);
//        exit;
//echo $path;

//        $files = Storage::allFiles('');
//        print_r($files);
//        echo Storage::get('imgFile/8uX9R2NFp1anmovHxLM4J94ALe54w0KaKgGyHqDy.jpeg');
//        exit;

//        return Storage::download('8uX9R2NFp1anmovHxLM4J94ALe54w0KaKgGyHqDy.jpeg', 'aaa.jpeg');

    }


}

