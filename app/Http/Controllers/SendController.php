<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Flower;
use App\Fold;
use App\Mail;
use App\Scent;
use App\Sheet;
use Validator;
use App\Lib\My_func;



class SendController extends Controller
{
    //送信画面
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

    //確認画面
    public function confirm(Request $request){
        //セッションに保存
        $request->session()->put("otegami",$request->all());
        //画面表示のためにDBにアクセス
        $fold = Fold::where('id','=',$request->fold_id)->first();
        $scent =Scent::where('id','=',$request->scent_id)->first();
        $flower =Flower::where('id','=',$request->flower_id)->first();
        $sheet =Sheet::where('id','=',$request->sheet_id)->first();
        //文字数カウント
        $number_of_character=mb_strlen($request->text, 'UTF-8');//日本語の文字数取得
        $number_of_character=My_func::kan_suuzi($number_of_character);//漢数字処理

        $data=[
            'for'=>$request->for,
            'from'=>$request->from,
            'text'=>$request->text,
            'fold'=>$fold,
            'scent'=>$scent,
            'flower'=>$flower,
            'sheet'=>$sheet,
            'number_of_character'=>$number_of_character
        ];

        return view('kotonoha.confirm',$data);
    }

 
    //完了画面
    public function post(Request $request){

        //URL渡す
        $uuid=Str::uuid();
        $url = url('/', null, true)."/show/".$uuid;
        
        //セッションから値を取り出す
        $input = $request->session()->get("otegami");
        

        //データ格納
        $user_location = Mail::create($input +array('uuid'=>$uuid));

       //セッション消す
       $request->session()->forget("otegami");

        

        $data=[
            'url'=>$url,
        ];

        return view('kotonoha.done',$data);

    }

}
