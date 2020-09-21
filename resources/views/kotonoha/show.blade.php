@extends('layouts.kotonohaapp')
@section('title','言の葉HTML')
@section('menubar')
    @parent
@endsection

@section('content')
    <style>
        .waku{
            padding: 0.5em 1em;
                margin: 2em 0;
                font-weight: bold;
                color: green;/*文字色*/
                background: #FFF;
                border: solid 3px green;/*線*/
                border-radius: 10px;/*角の丸み*/
                /* float: left; */
        }
    </style>
    
    <h2 class="center">お手紙です</h2>
    <div class="waku">
        <p style="color: #999;">{{$from}}</p>
        <p>より</p>
    </div>
    <div class="waku">
        <p style="color: #999;">{{$for}}</p>
        <p>へ</p>
    </div>
    <div class="waku">
        <div class="tategaki">
            <h2>本文</h2>
            <p style="color: #999;">{{$text}}
        </div>
    </div>
    <div class="waku">
        <h2>香り</h2>
        <img src="{{$scent->logo}}" width=60px height=60px>
        <p style="color: black;">{{$scent->name}}</p>
        <p style="color: #999;">{{$scent->explain_nowja}}</p>
    </div>
    <div class="waku">
        <h2>添え花</h2>
        <img src="{{$flower->logo}}" width=60px height=60px>
        <p style="color: black;">{{$flower->name}}</p>
        <p style="color: #999;">{{$flower->explain_nowja}}</p>
    </div>
    <div class="waku">
        <h2>用紙</h2>
        <img src="{{$sheet->logo}}" width=60px height=60px>
        <p style="color: black;">{{$sheet->name}}</p>
        <p style="color: #999;">{{$sheet->explain_nowja}}</p>
    </div>
    <div class="waku">
        <h2>折り方</h2>
        <img src="{{$fold->logo}}" width=60px height=60px>
        <p style="color: black;">{{$fold->name}}</p>
        <p style="color: #999;">{{$fold->explain_nowja}}</p>
    </div>


@endsection

@section('footer')
    @parent 
@endsection