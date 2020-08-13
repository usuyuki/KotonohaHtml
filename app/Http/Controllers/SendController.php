<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SendController extends Controller
{
    public function show(){
        return view('kotonoha.send');
    }

    public function post(Request $request){
        $uuid=Str::uuid();
        return view('kotonoha.sendcreate',$uuid);

    }

}
