@extends('layouts.kotonohaapp')
@section('title','送信完了')
@section('menubar')
@parent
@endsection

@section('content')

<style>
    .waku {
        padding: 0.5em 1em;
        margin: 2em 0;
        font-weight: bold;
        color: green;
        /*文字色*/
        background: #FFF;
        border: solid 3px green;
        /*線*/
        border-radius: 10px;
        /*角の丸み*/

    }

    /* コピーボタン 参考→https://reiwa-worknews.com/textbox-copy*/
    .copy_btn {
        width: 80%;
        padding: 12px 0;
        margin: 20px auto;
        color: #ffffff;
        font-weight: bold;
        background: green;

        border-radius: 3px;
        transition: .4s;
        text-align: center;
    }

    .copy_btn:hover {
        background: #006600;
        color: #000000;
        cursor: pointer;
    }



    .botan-kakunin {
        text-decoration: none;
        width: 40% !important;
        font-size: 18px;
        display: block;
        text-align: center;
        padding: 8px 0 10px;
        color: #ffffff;
        background-color: green;
        border-radius: 5px;
        font-family: はんなり明朝;
        margin: 0.1em auto;
    }

    .botan-kakunin:hover {
        background: #006600;
        color: #000000;
    }

    .share {
        margin: 0 auto;
        text-align: center;

        /* float: left; */
    }

    .twitter {
        margin: 0 20px;
        display: inline-block;
        /* padding: 0 20px; */
        /* float: bottom; */
    }

    .facebook {
        margin: 0 20px;
        display: inline-block;
        /* padding: 0 20px; */
        /* float: bottom; */
    }

    .LINE {
        margin: 0 20px;
        display: inline-block;
        /* padding: 0 20px; */
    }
</style>

<!-- コピーのためのスクリプト   参考→https://reiwa-worknews.com/textbox-copy -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- ↓クリップボード操作のために使用するjsを読み込む　( https://clipboardjs.com/ ) -->
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.13/clipboard.min.js"></script>

<script>
    var clipboard = new Clipboard('.copy_btn'); //clipboard.min.jsが動作する要素をクラス名で指定
    //クリックしたときの挙動
    $(function() {
        $('.copy_btn').click(function() {
            $(this).addClass('copied'); //ボタンの色などを変更するためにクラスを追加
            $(this).text('複製しました'); //テキストの書き換え
        });
    });
</script>

<h2 class="center">文使いに渡されました</h2>
<div class="waku">
    <h2>{{$url}}</h2>
    <p>上記URLを複製してSNSなどで送り先へリンクを共有してください。</p>
    <div class="copy_btn" data-clipboard-text="{{$url}}">上記リンクを複製する</div>
    <a href="{{$url}}" class="botan-kakunin" target="_blank">送られた手紙を確認する</a>
    <P>　</P>
    <div class="share">
        <p>下記共有ボタンでのご利用も可能です。(共有時にリンクも自動で付与されます)</p>
        <!-- Twitter -->
        <div class="twitter">
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-text="言の葉HTMLよりお手紙です。" class="twitter-share-button" data-size="large" data-show-count="false" data-url="{{$url}}">Tweet</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <!-- facebook -->
        <div class="facebook">
            <div class="fb-share-button" data-href="{{$url}}" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkotonoha.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">シェア</a></div>
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v8.0" nonce="kRPbnPp1"></script>
        </div>
        <!-- LINE -->
        <div class="LINE">
            <div class="line-it-button" data-lang="ja" data-type="share-a" data-ver="3" data-url="{{$url}}" data-color="default" data-size="large" data-count="false" style="display: none;"></div>
            <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
        </div>
    </div>
</div>




@endsection

@section('footer')
@parent

@endsection