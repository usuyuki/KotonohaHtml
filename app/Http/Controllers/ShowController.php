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
        $scent =Scent::where('id','=',$user->scent_id)->first();
        $flower =Flower::where('id','=',$user->flower_id)->first();
        $sheet =Sheet::where('id','=',$user->sheet_id)->first();


        $data=[
            'for'=>$user->for,
            'from'=>$user->from,
            'text'=>$user->text,
            'fold'=>$fold,
            'scent'=>$scent,
            'flower'=>$flower,
            'sheet'=>$sheet
        ];

        return view('kotonoha.show',$data);
    }

}
