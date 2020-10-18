@extends('layouts.kotonohaapp')
@section('title','言の葉HTML')

@section('menubar')
@parent
@endsection



@section('content')
<style>
  .explain img {
    border: 2px solid black;
  }

  .btn--green,
  a.btn--green {
    color: black;
    background-color: #669966;
  }

  .btn--green:hover,
  a.btn--green:hover {
    color: white;
    background: #3d5e3d;
  }

  p.torikesi {
    text-decoration: line-through;
  }

  .border {
    border-width: 1px 0 0 0;
    border-style: solid;
    border-color: #43a047;
    margin: 0 0 0 auto;
    //参考→https://copypet.jp/2304/
  }
</style>

<h2>言の葉HTMLへようこそ</h2>
<p>言の葉HTMLでは手紙に様々な付加価値を添えて送ることができます。私なりに日本らしさを大切にした仕様になっています。</p>
@include('components.message',['msg_title'=>'お知らせ','msg_content'=>'このサービスで流出すると困る情報は送らないでください。'])
<p> </p>
@include('components.message',['msg_title'=>'新着情報','msg_content'=>'ver4.0を公開しました。変更内容：より高速なサーバーへ移行しました。'])
<div class="hizuke">
  <h4>現在</h4>
  <p>{{$year}}年 {{$month}}{{$day}}日 {{$zyunizisi}}</p>
  <h4>季節は</h4>
  <p style="color:{{$season_color}};">{{$season_name}}</p>
  <h4>本日の日の出日の入り(東京都)</h4>
  <p>日の出は{{$sunrise}}<br>日の入りは{{$sunset}}</p>
  <hr class="border" />
</div>

<div class="explain">
  <h3>使い方</h3>
  <p>壱.手紙を送るページへ遷移してください。</p>
  <a href="./send" class="btn--green" target="_blank">手紙を送る</a>
  <p>弐.宛名や差出人、本文をご記入ください。</p>
  <img src="/img/explains/send1.png" width=500px height=425px>
  <p>参.付加価値をお選びください。</p>
  <img src="/img/explains/send2.png" width=500px height=275px>
  <p>肆.終わりましたら「送信内容確認」を押下します。</p>
  <img src="/img/explains/send3.png" width=500px height=165px>
  <p>伍.問題なければ「文使いに渡す」を押下します。</p>
  <img src="/img/explains/send4.png" width=500px height=280px>
  <p>陸.完了画面と共にリンクが表示されますので、複製を押下してリンクを複製した後、SNSなどで送り先へリンクを共有してください。</p>
  <img src="/img/explains/send5.png" width=500px height=135px>
  <p>漆.リンクを開くと手紙が確認できます。</p>
  <img src="/img/explains/send6.png" width=500px height=220px>
  <p></p>
</div>

@endsection

@section('footer')
@parent
@endsection