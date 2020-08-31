@extends('layouts.kotonohaapp')
@section('title','言の葉HTML')
<head>
    <title>手紙を送る</title>
    <style>
    @font-face {
	font-family: 'はんなり明朝';
	src: url(/storage/fonts/hannari/Hannari.otf)format('opentype');
    }
    p{font-family: はんなり明朝;}
    body {font-size:16pt; color:#999; font-family: はんなり明朝;}
    h1 {font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px; letter-spacing:-4pt; font-family: はんなり明朝;}

    /* 説明の文字サイズを小さくする */
    p.intro{
        font-size:12pt;
    }
    p.title{
        font-size:22pt; color:#Black font-weight: bold;
    }
    p.name{
        font-size:18pt; color:#Black; font-weight: bold;
    }


    /* ラジオボタンを消す */
    .selection-group input[type="radio"] {
    display: none;
    }
    /* 選択されたラジオボタンの画像の背景をうぐいす色に変える */
    .selection-group input[type="radio"]:checked + label img {
    background: #669999;
    }
    .selection-group input[type="radio"] {
    display: none;
    }
    /* 選択されたラジオボタンの画像の背景をうぐいす色に変える */
    .selection-group input[type="radio"]:checked + label img {
    background: #669999;
    }
    
    /* 画像部分に余白を持たせる、枠囲みする */
    label img {
    margin: 3px;
    padding: 8px;
    border: 4px solid black;
    }
    
    /* 横並べと枠囲み */
    .sentakusi{
        overflow: hidden;

    }
    .waku{
        padding: 0.5em 1em;
        margin: 2em 0;
        border: solid 3px #336699;/*線*/
        border-radius: 10px;/*角の丸み*/
    }
    .youso{
        padding: 0.5em 1em;
        margin: 2em 0;
        font-weight: bold;
        color: #6091d3;/*文字色*/
        background: #FFF;
        border: solid 3px #6091d3;/*線*/
        border-radius: 10px;/*角の丸み*/
        float: left;
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
    .mannaka{
        text-align:center;
        font-size:17px;
    }

    </style>
</head>
<body>
@section('menubar')
    @parent
@endsection
@section('content')

    <h2>ここは手紙を送るページです。</h2>
    <form method="POST" action="/send/confirm">
    @csrf
    <p>宛名</p>
    <input type="text" name="for">
    <p>送り主</p>
    <input type="text" name="from">
    <p>本文</p>
    <textarea cols="60" rows="10" name="text"></textarea>
    <p></p>
    <!-- 付加価値コーナー -->
    <div class="selection-group">
        <div class="waku">
        <p class='title'>1.香りをお選びください。</p>
            <div class="sentakusi">
                @foreach($scents as $scent)
                <div class="youso">
                    <input id="{{$scent->id}}" type="radio" name="scent_id" value="{{$scent->id}}" required>
                    <label for="{{$scent->id}}">
                        <p class="name">{{$scent->name}}</p>
                        <img src="{{$scent->logo}}" width=60px height=60px>
                        <p class="intro">{{$scent->explain_nowja}}</p>
                    </label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <p></p>

    <div class="selection-group">
        <div class="waku">
        <p class='title'> 2.添え花をお選びください。</p>
            <div class="sentakusi">
                @foreach($flowers as $flower)
                <div class="youso">
                    <input id="{{$flower->id.+1}}" type="radio" name="flower_id" value="{{$flower->id}}" required>
                    <label for="{{$flower->id.+1}}">
                        <p class='name'>{{$flower->name}}</p>
                        <img src="{{$flower->logo}}" width=60px height=60px>
                        <p class="intro">{{$flower->explain_nowja}}</p>
                    </label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <p></p>

    <div class="selection-group">
        <div class="waku">
            <p class='title'>3.用紙をお選びください。</p>
            <div class="sentakusi">
                @foreach($sheets as $sheet)
                <div class="youso">
                    <input id="{{$sheet->id.+2}}" type="radio" name="sheet_id" value="{{$sheet->id}}" required>
                    <label for="{{$sheet->id.+2}}">
                        <p class='name'>{{$sheet->name}}</p>
                        <img src="{{$sheet->logo}}" width=60px height=60px>
                        <p class="intro">{{$sheet->explain_nowja}}</p>

                    </label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <p></p>

    <div class="selection-group">
        <div class="waku">
            <p class='title'>4.折り方をお選びください。</p>
            <div class="sentakusi">
                @foreach($folds as $fold)
                <div class="youso">
                    <input id="{{$fold->id.+3}}" type="radio" name="fold_id" value="{{$fold->id}}" required>
                    <label for="{{$fold->id.+3}}">
                        <p class='name'>{{$fold->name}}</p>
                        <img src="{{$fold->logo}}" width=60px height=60px>
                        <p class="intro">{{$fold->explain_nowja}}</p>

                    </label>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <p></p>
    <!-- ↓これはsection-groupのdivの終了タグ -->
    </div>
    <p class="mannaka">※すべて選択しないと確認ボタンは押せません。</p>
    <input type="submit" value="確認" class="botan-susumu">
    </form>
@endsection

    @section('footer')
    @parent 
    @endsection
</body>
