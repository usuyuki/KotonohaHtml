@extends('layouts.kotonohaapp')
@section('title','言の葉HTML')
<style>
.btn--orange,
a.btn--orange {
  color: #fff;
  background-color: #669966;
}
.btn--orange:hover,
a.btn--orange:hover {
  color: #fff;
  background: #669966;
}
p.torikesi {
  text-decoration: line-through;
}
</style>
@section('menubar')
    @parent
@endsection

@section('content')
    <h2>言の葉HTMLへようこそ</h2>
    <p>言の葉HTMLでは縦書きの手紙に様々な付加価値を添えて送ることができます。</p>
    @include('components.message',['msg_title'=>'お知らせ','msg_content'=>'このサービスは永遠にβ版です。また、このサービスは暗号化してません。流出すると困る情報は送らないでください。'])
    <p> </p>
    @include('components.message',['msg_title'=>'新着情報','msg_content'=>'ver1.11を公開しました。変更内容：送信確認画面を追加しました。見やすさのための細かな修正を加えました。'])
    <h3>使い方</h3>
    <p>壱.下記ページへ遷移してください。</p>
    <a href="./send" class="btn btn--orange" target="_blank">手紙を送る</a>
    <p>弐.手紙や付加価値を選んで「送信内容確認」を押下します。</p>
    <p>参.問題なければ「文使いに渡す」を押下します。</p>
    <p>肆.完了画面と共にリンクが表示されますので、複製を押下してリンクを複製した後、SNSなどで送り先へリンクを共有してください。</p>
    <p>伍.リンクを開くと手紙が確認できます。</p>
    <p></p>

@endsection

@section('footer')
    @parent 
@endsection