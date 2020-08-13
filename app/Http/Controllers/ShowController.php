<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
        $uuid =$request->id;
        $user = Mail::where('uuid', '=', $uuid)->first();
        $fold = Fold::where('id','=',$user->fold_id)->first();
        $scent =Scent::where('id','=',$user->scent)->first();
        $flower =Flower::where('id','=',$user->flower)->first();
        $sheet =Sheet::where('id','=',$user->sheet)->first();

        $data=[
            'for'=>$user->for,
            'text'=>$user->text,
            'fold'=>$fold,
            'scent'=>$scent,
            'flower'=>$flower,
            'sheet'=>$sheet
        ];

        return view('kotonoha.show',$data);
    }

}
