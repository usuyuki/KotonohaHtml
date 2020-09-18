<?php

namespace App\Lib;

class My_func
{
  public static function kan_suuzi($number)
  {
     /*
    半角数字→漢数字の処理
    三桁まで。
    */
    //数字がないと値が存在しなくなってしまうのでそのための0足し。
    $number="0"."0"."0"."0".$number;
    //リストの準備
    $list1=['〇','一','二','三','四','五','六','七','八','九'];
    $list2=['','十','百','千','万'];
    //一桁目
    $hitoketa=substr($number,-1);//数字の右から一桁目を取り出す
    $hitoketa=$list1[$hitoketa];
    //二桁目
    $futaketa=substr($number,-2,-1);
    if($futaketa!="0"){
        if($futaketa=="1"){
            $futaketa="";
        }else{
            $futaketa=$list1[$futaketa];
        };
        $futaketa=$futaketa.$list2[1];

    }else{
        $futaketa="";
    };
    //三桁目
    $sanketa=substr($number,-3,-2);
    if($sanketa!="0"){
        if($sanketa=="1"){
            $sanketa="";
        }else{
            $sanketa=$list1[$sanketa];
        };
        $sanketa=$sanketa.$list2[2];

    }else{
        $sanketa="";
    };

    //四桁目
    $yonketa=substr($number,-4,-3);
    if($yonketa!="0"){
        if($yonketa=="1"){
            $yonketa="";
        }else{
            $yonketa=$list1[$yonketa];
        };
        $yonketa=$yonketa.$list2[3];

    }else{
        $yonketa="";
    };
    //五桁目
    $goketa=substr($number,-5,-4);
    if($goketa!="0"){
        $goketa=$list1[$goketa];
        $goketa=$goketa.$list2[4];

    }else{
        $goketa="";
    };
    

    $number=$goketa.$yonketa.$sanketa.$futaketa.$hitoketa;//三万二千四百二十三のように出力
    return $number;
  }
}