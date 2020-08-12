@extends('layouts.kotonohaapp')
@section('title','Index')
@section('menubar')
    @parent
    言の葉HTML
@endsection

@section('content')
    <p>言の葉HTMLへようこそ</p>
    <p>言の葉HTMLでは縦書きの手紙に様々な付加価値を添えて送ることができます。</p>
    @include('components.message',['msg_title'=>'お知らせ','msg_content'=>'生まれてはじめてのwebサービスです。'])
@endsection

@section('footer')
    @parent 
@endsection