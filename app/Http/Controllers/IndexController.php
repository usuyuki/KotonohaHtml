<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;
use App\Fold;
use App\Mail;
use App\Scent;
use App\Sheet;
use Carbon\Carbon;
use App\Lib\My_func;

class IndexController extends Controller
{
    public function index(){
        $dt = Carbon::now();
        $watuki_list =['睦月', '如月', '弥生', '卯月', '皐月', '水無月', '文月 ', '葉月', '長月', '神無月', '霜月', '師走'];
        //和暦変換
        $watuki =$watuki_list[$dt->month -1];//和月処理

        
        $wareki=My_func::kan_suuzi($dt->year -2018);//漢数字処理
        $wareki="令和".$wareki;//令和処理
        // 十二時辰追加する？
        switch($dt->hour){
            case 23:
            case 24:
            case 0:
                $zyunizisi="子の刻";
                break;
            case 1:
            case 2:
                $zyunizisi="丑の刻";
                break;

            case 3:
            case 4:
                $zyunizisi="寅の刻";
                break;

            case 5:
            case 6:
                $zyunizisi="卯の刻";
                break;
            case 7:
            case 8:
                $zyunizisi="辰の刻";
                break;
            case 9:
            case 10:
                $zyunizisi="巳の刻";
                break;
            case 11:
            case 12:
                $zyunizisi="午の刻";
                break;
            case 13:
            case 14:
                $zyunizisi="未の刻";
                break;
            case 15:
            case 16:
                $zyunizisi="申の刻";
                break;
            case 17:
            case 18:
                $zyunizisi="酉の刻";
                break;
            case 19:
            case 20:
                $zyunizisi="戌の刻";
                break;
            case 21:
            case 22:
                $zyunizisi="亥の刻";
                break;
        };
        //二十四節気追加する？

        /*
        時間帯の名前と色の処理
        */
        //日の出時刻取得→緯度経皇居の位置
        $now=$dt->micro;
        $sunrise=date_sunrise( $now, SUNFUNCS_RET_STRING, 35.685180, 139.752805);
        $sunset=date_sunset( $now, SUNFUNCS_RET_STRING, 35.685180, 139.752805);
        $zikan_name_list=['未明',];
        $zikan_color="white";
        // $zikan_name="あ";
        // if($now){
        //     //東雲と誰彼時の色
        //     $zikan_color="#91e3ff";
        // }else if(){
        //     //昼間の色
        // }else if(){
        //     //夜の色
        // };

        /*
        季節の名前と色の処理
        */
        if("3"<= $dt->month && $dt->month <="5"){
            $season_name="春";
            $season_color="#ff91b6";
        }else if("6"<= $dt->month && $dt->month <="8"){
            $season_name="夏";
            $season_color="#a0ff91";
        }else if("9"<= $dt->month && $dt->month <="11"){
            $season_name="秋";
            $season_color="#ffc691";
        }else if("12"<= $dt->month && $dt->month <="2"){
            $season_name="冬";
            $season_color="#91e3ff";
        };

        $hizuke=[

            'year'=>$wareki,
            'month'=>$watuki,
            'day'=>My_func::kan_suuzi($dt->day),
            'zikan_color'=>$zikan_color,
            // 'zikan_name'->$zikan_name,
            'season_name'=>$season_name,
            'season_color'=>$season_color,
            'zyunizisi'=>$zyunizisi


        ];
        return view('kotonoha.index',$hizuke);
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
