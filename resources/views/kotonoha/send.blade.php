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
    <p>これは送信ページです。</p>
    <p>{{$msg ?? ''}}</p>
    <form method="POST" action="/post">
    @csrf
    <input type="text" name="msg">
    <input type="submit">
    
    </form>
</body>

</html>