<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Flower;
use App\Fold;
use App\Mail;
use App\Scent;
use App\Sheet;



class SendController extends Controller
{
    public function show(){
        $fold = Fold::all();
        $scent =Scent::all();
        $flower =Flower::all();
        $sheet =Sheet::all();
        $data=[
            'folds'=>$fold,
            'scents'=>$scent,
            'flowers'=>$flower,
            'sheets'=>$sheet,
        ];

        return view('kotonoha.send',$data);
    }

    public function confirm(Request $request){
        
        return view('kotonoha.confirm',$data);
    }

 

    public function post(Request $request){

        //URL渡す
        $uuid=Str::uuid();
        $url = "http://127.0.0.1:8000/show/".$uuid;

        //データ格納
        $user_location = Mail::create($request->all() +array('uuid'=>$uuid));
       

        

        $data=[
            'url'=>$url,
        ];

        return view('kotonoha.done',$data);

    }

}
