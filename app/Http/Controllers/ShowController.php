<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show(){
        $id =$request->id;
        $user = Mail::where('id', '=', $id)->first();
        $for=$user->for;
        $text=$user->text;
        $fold=$user->fold;
        $scent=$user->scent;
        $flower=$user->flower;
        $sheet=$user->sheet;

        return view('kotonoha.show',$for,$from,$text,$fold,$scent,$flower,$sheet);
    }

}
