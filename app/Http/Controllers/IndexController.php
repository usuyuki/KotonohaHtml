<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;
use App\Fold;
use App\Mail;
use App\Scent;
use App\Sheet;

class IndexController extends Controller
{
    public function index(){
        return view('kotonoha.index');
    }

    public function contact(){
        
        return view('kotonoha.contact');
    }
    
    public function allshow(){
        //ページネーションで少しずつ表示する。
        $mails = Mail::simplePaginate(5);
        // $url = url('/', null, true)."/show/".$uuid;
        return view('kotonoha.allshow',['mails'=>$mails]);
    }
}
