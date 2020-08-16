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
        font-size:18pt; color:#Black;
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
    


    </style>
</head>
<body>
@section('menubar')
    @parent
@endsection
@section('content')

    <h2>ここは手紙を送るページです。</h2>
    <form method="POST" action="/send/done">
    @csrf
    <p>宛名</p>
    <input type="text" name="for">
    <p>送り主</p>
    <input type="text" name="from">
    <p>本文</p>
    <textarea cols="60" rows="10" name="text"></textarea>

    <!-- 付加価値コーナー -->
    <div class="selection-group">
        <div class="scents">
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
    
    <div class="selection-group">
        <div class="flower">
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

    <div class="selection-group">
        <div class="sheet">
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

    <div class="selection-group">
        <div class="fold">
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




    </div>
    <input type="submit" name="文使いに渡たす">
    </form>
@endsection

    @section('footer')
    @parent 
    @endsection
</body>
