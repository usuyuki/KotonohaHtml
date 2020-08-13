<html>
<head>
    <title>kotonoha/Create</title>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px; letter-spacing:-4pt;}

    
    </style>
</head>
<body>
    <h1>Post</h1>
    <p>ここは手紙を送るページです。</p>
    <p>{{$msg ?? ''}}</p>
    <form method="POST" action="/send">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
    <div class="selection-group">
        <input id="a" type="radio" name="rate" value="a">
        <input id="b" type="radio" name="rate" value="b">
        <input id="c" type="radio" name="rate" value="c">
</div>
    </form>
</body>

</html>