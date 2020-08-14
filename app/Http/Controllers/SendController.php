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

    public function post(Request $request){
        $uuid=Str::uuid();
        $data=[
            'uuid'=>$uuid,
        ]
        //データ格納
        //URL渡す
        return view('kotonoha.send',$data);

    }

}
