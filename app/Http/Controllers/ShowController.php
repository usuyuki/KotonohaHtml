<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;
use App\Fold;
use App\Mail;
use App\Scent;
use App\Sheet;

class ShowController extends Controller
{
    public function show(Request $request){
        $uuid =$request->id;
        $user = Mail::where('uuid', '=', $uuid)->first();
        $fold = Fold::where('id','=',$user->fold_id)->first();
        $scent =Scent::where('id','=',$user->scent)->first();
        $flower =Flower::where('id','=',$user->flower)->first();
        $sheet =Sheet::where('id','=',$user->sheet)->first();

        $data=[
            'for'=>$user->for,
            'text'=>$user->text,
            'folds'=>$fold,
            'scents'=>$scent,
            'flowers'=>$flower,
            'sheets'=>$sheet
        ];

        return view('kotonoha.show',$data);
    }

}
