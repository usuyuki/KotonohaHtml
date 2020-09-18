<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="description" content="言の葉HTMLは手紙に付加価値を加えて送れるwebアプリです。">
    <meta charset="utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175673455-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-175673455-1');
    </script>
    
</head>

<style>
    @font-face {
	font-family: 'はんなり明朝';
	src: url("/fonts/hannari/Hannari.otf")format('opentype');
    }

    body {font-size:16pt; color:#999; margin:5px; font-family: はんなり明朝;}
    h1 {font-size:50pt; text-align:left; color:green; margin:-20px 0px -30px 0px; letter-spacing:-4pt; font-family: はんなり明朝;}
    h3 { line-height: 0.5em; }
    u1 {font-size:12pt; はんなり明朝;}
    hr {margin:25px 100px; border-top:1px dashed #ddd; font-family: はんなり明朝;}
    .menutitle {font-size:14pt; font-weight:bold; margin:0px;font-family: はんなり明朝;}
    .content {margin:10px;font-family: はんなり明朝;}
    .footer{text-align:right; font-size:10pt; margin:10px; border-bottom:solid 1px #ccc; color:#ccc;font-family: はんなり明朝;}
    .page-seni a{
        color: white;
        text-decoration: none;
    }
    .page-seni{
        display: inline;
        position: relative;
        display: inline-block;
        padding: 0.25em 0.5em;
        background: green;/*背景色*/
        border-radius: 4px;/*角の丸み*/
        box-shadow: inset 0 2px 0 rgba(255,255,255,0.2), 0 2px 2px rgba(0, 0, 0, 0.19);

    }
    .page-seni:hover{
        background: #005e00;/*背景色*/
    }
    img.logo{
        margin-bottom:10px;
    }
        
</style>

<body>
    @section('menubar')
    <a href="../">
        <img src="/img/logos/KotonohaHTMLlogo20200918.png" width=300px height=78px class="logo">
    </a>
    <h2 class="menutitle"></h2>
    <div class="page-seni">
    <a href="../">トップ</a>
    </div>
    <div class="page-seni">
    <a href="../send">手紙を送る</a>
    </div>
    <div class="page-seni">
    <a href="../contact">お問い合わせ</a>
    </div>
    @show
    <hr size="1">
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    <h3>このサービスは暗号化していません。流出すると困る情報は送らないでください。</h3>
    <h3>本サイトでは、閲覧状況に関する統計を取るためにGoogleアナリティクスを使用しています。</h3>
    <h3>copyright 2020 usuyuki.</h3>
    </div>
    
</body>

</html>