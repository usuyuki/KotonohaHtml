@extends('layouts.kotonohaapp')
@section('title','手紙を送る')

@section('menubar')
    @parent
@endsection

@section('content')
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
        /* 選択されたラジオボタンの画像の背景を水色に変える */
        .selection-group input[type="radio"]:checked + label img {
        background: #6091d3;
        }
        .selection-group input[type="radio"] {
        display: none;
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
            display:flex;/*要素を横並びに*/
            justify-content: center;/*要素を中央中心に広げる*/
            flex-wrap:wrap;/*要素を折り返す*/

        }
        .waku{
            padding: 0.5em 1em;
            margin: 2em 0;

            border: solid 3px #336699;/*線*/
            border-radius: 10px;/*角の丸み*/
        }
        .youso p{
            width: 200px;/*文字の幅設定*/

        }
        .youso{
            padding: 0.5em 1em;
            margin: 2em 0.5em 0.5em 0;/*枠同士の幅を調整*/
            font-weight: bold;
            color: #6091d3;/*文字色*/
            background: #FFF;
            border: solid 3px #6091d3;/*線*/
            border-radius: 10px;/*角の丸み*/
            word-break: break-all;/*文字の折返し*/

        }
        .youso:hover{
            border: dashed 3px #6091d3;;
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
        .tyuui{
            text-align:center;
            font-size:17px;
        }
        .moziwaku{
            border: 1px solid #6091d3;
            font-size:20px;
            font-family: はんなり明朝;
            
        }
        .moziwaku:focus{
            border: 2px solid #63db7d;
            /* background: #c2dcff;文字入力中の枠の色 */
            /* opacity:0.3;透明度 */

        }
        .center{
            text-align:center
        }
        textarea{
            resize: none;
            /* width:300px;
            height:200px; */
        }
        .explain{
            text-align: center;
        }
    </style>

<SCRIPT language="JavaScript">
<!--
function check(){
var strName;
strName = document.nform.textN.value;
var test = document.getElementById("test");
//一応タグを使えないように置き換える
strName = strName.split("<").join("&lt;");
strName = strName.split(">").join("&gt;");
//改行を改行タグに置き換える
strName = strName.split("\n").join("<br>");
test.innerHTML = strName;
}
//-->
</SCRIPT>

    <div class="center">
        <h2>ここは手紙を送るページです</h2>
        <form method="POST" action="/send/confirm">
        @csrf
        <p>宛名</p>
        <input type="text" name="for"class="moziwaku" required>
        <p>差出人</p>
        <input type="text" name="from"class="moziwaku" required>  
        <p>本文</p>
        <textarea cols="120" rows="20" name="text" class="moziwaku" maxlength="99999" required></textarea>
        <p></p>
    </div>
    
    <!-- 付加価値コーナー -->
    <p class="tyuui">枠内をクリックまたはタップしてそれぞれ1つづつお選びください</p>
    <div class="selection-group">
        <div class="waku">
        <p class='title'>1.香りをお選びください。</p>
        <p class="explain">
            ここでは平安時代に薫物として用いられた薫香の中で、代表的な六種の薫物からお選びいただけます。<br>
            「黒方」「梅花」「荷葉」「侍従」の4種類は源氏物語にも登場しております。
        </p>
            <div class="sentakusi">
                @foreach($scents as $scent)
                    <input id="{{$scent->id}}" type="radio" name="scent_id" value="{{$scent->id}}" required>
                    <label for="{{$scent->id}}">
                        <div class="youso">
                            <p class="name">{{$scent->name}}</p>
                            <img src="{{$scent->logo}}" width=60px height=60px>
                            <p class="intro">{{$scent->explain_nowja}}</p>
                        </div>
                    </label>
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
                    <input id="{{$flower->id.+1}}" type="radio" name="flower_id" value="{{$flower->id}}" required>
                    <label for="{{$flower->id.+1}}">
                        <div class="youso">
                            <p class='name'>{{$flower->name}}</p>
                            <img src="{{$flower->logo}}" width=60px height=60px>
                            <p class="intro">{{$flower->explain_nowja}}</p>
                        </div>
                    </label>
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
                    <input id="{{$sheet->id.+2}}" type="radio" name="sheet_id" value="{{$sheet->id}}" required>
                    <label for="{{$sheet->id.+2}}">
                        <div class="youso">
                            <p class='name'>{{$sheet->name}}</p>
                            <img src="{{$sheet->logo}}" width=60px height=60px>
                            <p class="intro">{{$sheet->explain_nowja}}</p>
                        </div>
                    </label>
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
                    <input id="{{$fold->id.+3}}" type="radio" name="fold_id" value="{{$fold->id}}" required>
                    <label for="{{$fold->id.+3}}">
                        <div class="youso">
                            <p class='name'>{{$fold->name}}</p>
                            <img src="{{$fold->logo}}" width=60px height=60px>
                            <p class="intro">{{$fold->explain_nowja}}</p>
                        </div>
                    </label>
                @endforeach
            </div>
        </div>
    </div>
    <p></p>
    <!-- ↓これはsection-groupのdivの終了タグ -->
    </div>
    <p class="tyuui">※すべて選択しないと確認ボタンは押せません。</p>
    <input type="submit" value="確認" class="botan-susumu" onClick="check()">
    </form>
@endsection

    @section('footer')
    @parent 
    @endsection

