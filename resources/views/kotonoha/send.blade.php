<html>
<head>
    <title>手紙を送る</title>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0px -100px 0px; letter-spacing:-4pt;}

    
    </style>
</head>
@section('menubar')
        @parent
        言の葉HTML
    @endsection
<body>

    <h1>Post</h1>
    <p>ここは手紙を送るページです。</p>
    <form method="POST" action="/send">
    @csrf
    <textarea name="comment" cols="60" rows="10" name="text"></textarea></p>

    <div class=scents">
    <p>香りをお選びください。</p>
        @foreach($scents as $scent)
        <input id="{{$scent->id}}" type="radio" name="{{$scent->name}}" value="{{$scent->id}}">
        <label for="{{$scent->id}}">
            <p>{{$scent->name}}</p>
            <img src="{{$scent->picture}}" width=60px height=60px>
            <p>{{$scent->explain_nowja}}</p>
        </label>
        @endforeach
    </div>
    <input type="submit">
    </form>


    @section('footer')
    @parent 
    @endsection
</body>

</html>