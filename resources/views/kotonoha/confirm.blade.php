@extends('layouts.kotonohaapp')
@section('title','手紙確認')
@section('menubar')
    @parent
@endsection


@section('content')
    <style>
        .waku{
                padding: 0.5em 1em;
                margin: 2em 0;
                font-weight: bold;
                color: #6091d3;/*文字色*/
                background: #FFF;
                border: solid 3px #6091d3;/*線*/
                border-radius: 10px;/*角の丸み*/
        }

        .botan-susumu {
            width:200px;
            font-size:24px;
            text-decoration:none;
            display:block;
            text-align:center;
            padding:8px 0 10px;
            color:#fff;
            background-color:#6091d3;
            border-radius:5px;
            font-family: はんなり明朝;
            margin: 0 auto; 
        }
        .botan-susumu:hover{
            background-color:#5179b0;
            }
        .botan-modoru {
            width:100px;
            font-size:18px;
            text-decoration:none;
            display:block;
            text-align:center;
            padding:8px 0 10px;
            color:#fff;
            background-color:#6091d3;
            border-radius:5px;
            font-family: はんなり明朝;
            margin: 0 auto; 
        }
        .botan-modoru:hover{
            background-color:#5179b0;
        }
        .left{
            text-align:end;
        }
        .left h5{
            opacity: 0.3;
        }
        .center{
            text-align:center;
        }

    </style>
    <h2 class="center">送信確認ページです。</h2>
    <div class="waku">
        <h3>{{$from}}</h3>
        <p class="left">より</p>
    </div>
    <div class="waku">
        <h3>{{$for}}</h3>
        <p class="left">へ</p>
    </div>
    <div class="waku">
        <h2>本文</h2>
        <p>{{$text}}
        <h6 class="left">{{$number_of_character}}文字</h6>

    </div>
    <div class="waku">
        <h2>香り</h2>
        <img src="{{$scent->logo}}" width=60px height=60px>
        <p>{{$scent->name}}</p>
        <p>{{$scent->explain_nowja}}</p>
    </div>
    <div class="waku">
        <h2>添え花</h2>
        <img src="{{$flower->logo}}" width=60px height=60px>
        <p>{{$flower->name}}</p>
        <p>{{$flower->explain_nowja}}</p>
    </div>
    <div class="waku">
        <h2>用紙</h2>
        <img src="{{$sheet->logo}}" width=60px height=60px>
        <p>{{$sheet->name}}</p>
        <p>{{$sheet->explain_nowja}}</p>
    </div>
    <div class="waku">
        <h2>折り方</h2>
        <img src="{{$fold->logo}}" width=60px height=60px>
        <p>{{$fold->name}}</p>
        <p>{{$fold->explain_nowja}}</p>
    </div>

    <button type="button" onclick="history.back()" class="botan-modoru">書き直す</button>
    <p></p>

    <a href="../send/done" class="botan-susumu">文使いに渡す</a>

@endsection

@section('footer')
    @parent 
@endsection