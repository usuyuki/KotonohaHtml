<html>
<head>
    <title>@yield('title')</title>
    <style>
    @font-face {
	font-family: 'はんなり明朝';
	src: url(/storage/fonts/hannari/Hannari.otf)format('opentype');
    }

    body {font-size:16pt; color:#999; margin:5px; font-family: はんなり明朝;}
    h1 {font-size:50pt; text-align:right; color:#f6f6f6; margin:-20px 0px -30px 0px; letter-spacing:-4pt; font-family: はんなり明朝;}
    u1 {font-size:12pt; はんなり明朝;}
    hr {margin:25px 100px; border-top:1px dashed #ddd; font-family: はんなり明朝;}
    .menutitle {font-size:14pt; font-weight:bold; margin:0px;font-family: はんなり明朝;}
    .content {margin:10px;font-family: はんなり明朝;}
    .footer{text-align:right; font-size:10pt; margin:10px; border-bottom:solid 1px #ccc; color:#ccc;font-family: はんなり明朝;}


body {
	font-family: MyFont;
}
    
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <p>言の葉HTML</p>
    <h2 class="menutitle">※メニュー</h2>
    <a href="../">トップ</a>
    <a href="./send">手紙を送る</a>
    <a href="./contact">お問い合わせ</a>
    @show
    <hr size="1">
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    <h3>このサービスは暗号化してません。流出すると困る情報は送らないでください。</h3>
    <h3>copyright 2020 usuyuki.</h3>
    </div>
</body>

</html>