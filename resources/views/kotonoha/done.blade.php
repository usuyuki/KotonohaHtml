@extends('layouts.kotonohaapp')
@section('title','送信完了')
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

        }

        /* コピーボタン 参考→https://reiwa-worknews.com/textbox-copy*/
        .copy_btn {
        width:80%!important;
        padding: 12px 0;
        margin-left: auto!important;
        margin-right: auto!important;
        color:#ffffff;
        font-weight:bold;
        background:green;

        border-radius: 3px;
        transition: .4s;
        text-align: center;
        }
        
        .copy_btn:hover {
        background: #006600;
        color: #000000;
        }
        .copy_btn:hover {
            cursor: pointer;
        }
        .botan-kakunin {
            text-decoration:none;
            width:40%!important;
            font-size:18px;
            display:block;
            text-align:center;
            padding:8px 0 10px;
            color:#ffffff;
            background-color:green;
            border-radius:5px;
            font-family: はんなり明朝;
            margin: 0.1em auto; 
        }
        .botan-kakunin:hover{
            background: #006600;
            color: #000000;
            }
            .center{
            text-align:center;
        }

    </style>

    <!-- コピーのためのスクリプト   参考→https://reiwa-worknews.com/textbox-copy -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- ↓クリップボード操作のために使用するjsを読み込む　( https://clipboardjs.com/ ) -->
    <script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>
    
    <script>
        var clipboard = new Clipboard('.copy_btn');    //clipboard.min.jsが動作する要素をクラス名で指定
        //クリックしたときの挙動
        $(function(){
            $('.copy_btn').click(function(){
                $(this).addClass('copied');    //ボタンの色などを変更するためにクラスを追加
                $(this).text('複製しました');    //テキストの書き換え
            });
        });
    </script>

    <h2 class="center">文使いに渡されました。</h2>
    <div class="waku">
        <h2>{{$url}}</h2>
        <p>上記URLを複製してSNSなどで送り先へリンクを共有してください。</p>
        <div class="copy_btn" data-clipboard-text="{{$url}}">上記リンクを複製する</div>
        <a href="{{$url}}" class="botan-kakunin" target="_blank">送られた手紙を確認する</a>   
    </div>




@endsection

@section('footer')
    @parent 

@endsection

