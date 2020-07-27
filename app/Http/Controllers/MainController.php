<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $data =['msg'=>'blade使いました',];   
        return view('kotonoha.index',$data);
    }

    public function post(Request $request){
        $msg = $request->msg;
        $data=['msg'=>'こんにちは'.$msg.'さん！']; 
        return view('kotonoha.create',$data);

    }

    public function show(){
        
    }
}
