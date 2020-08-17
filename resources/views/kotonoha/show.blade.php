@extends('layouts.kotonohaapp')
@section('title','言の葉HTML')
@section('menubar')
    @parent
@endsection

<style>
.waku{
    padding: 0.5em 1em;
        margin: 2em 0;
        font-weight: bold;
        color: green;/*文字色*/
        background: #FFF;
        border: solid 3px green;/*線*/
        border-radius: 10px;/*角の丸み*/
        /* float: left; */
}
</style>
@section('content')
    <p>お手紙です。</p>
    <div class="waku">
    <p>{{$from}}<br>より</p>
    </div>
    <div class="waku">
    <p>{{$for}}<br>へ</p>
    </div>
    <div class="waku">
    <h2>本文</h2>
    <p>{{$text}}</div>
    </div>
    <div class="waku">
    <h2>香り</h2>
    <img src="{{$scent->logo}}" width=60px height=60px>
    <p>{{$scent->name}}</p>
    <p>{{$scent->explain_nowja}}</p>
    </div>
    <div class="waku">
    <h2>添え花</h2>
    <img src="{{$flower->logo}}" width=60px height=60px>
    <p>{{$flower->name}}</p>
    <p>{{$flower->explain_nowja}}</p>
    </div>
    <div class="waku">
    <h2>用紙</h2>
    <img src="{{$sheet->logo}}" width=60px height=60px>
    <p>{{$sheet->name}}</p>
    <p>{{$sheet->explain_nowja}}</p>
    </div>
    <div class="waku">
    <h2>折り方</h2>
    <img src="{{$fold->logo}}" width=60px height=60px>
    <p>{{$fold->name}}</p>
    <p>{{$fold->explain_nowja}}</p>
    </div>


@endsection

@section('footer')
    @parent 
@endsection