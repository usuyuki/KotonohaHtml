<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('kotonoha.index');
    }

    public function contact(){
        return view('kotonoha.contact');
    }
}
