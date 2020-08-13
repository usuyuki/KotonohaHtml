@extends('layouts.kotonohaapp')
@section('title','Index')
@section('menubar')
    @parent
    言の葉HTML
@endsection

@section('content')
    <p>お手紙です。</p>
    <p>{{$from}}より</p>
    <p>{{$for}}へ</p>
    <p>本文</p>
    <p>{{$text}}</p>
    <p>オプション</p>
    <p>{{$fold}}</p>
    <p>{{$flower}}</p>
    <p>{{$sheet}}</p>

@endsection

@section('footer')
    @parent 
@endsection