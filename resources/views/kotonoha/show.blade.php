@extends('layouts.kotonohaapp')
@section('title','Index')
@section('menubar')
    @parent
    言の葉HTML
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
        float: left;
}
</style>
@section('content')
    <p>お手紙です。</p>
    <p>{{$from}}より</p>
    <p>{{$for}}へ</p>
    <div class="waku">
    <h2>本文</h2>
    <p>{{$text}}</div>
    </div>
    <div class="waku">
    <h2>香り</h2>
    <p>{{$scent->logo}}</p>
    <p>{{$scent->name}}</p>
    <p>{{$scent->intro}}</p>
    </div>
    <div class="waku">
    <h2>添え花</h2>
    <p>{{$flower->logo}}</p>
    <p>{{$flower->name}}</p>
    <p>{{$flower->intro}}</p>
    </div>
    <div class="waku">
    <h2>用紙</h2>
    <p>{{$sheet->logo}}</p>
    <p>{{$sheet->name}}</p>
    <p>{{$sheet->intro}}</p>
    </div>
    <div class="waku">
    <h2>折り方</h2>
    <p>{{$fold->logo}}</p>
    <p>{{$fold->name}}</p>
    <p>{{$fold->intro}}</p>
    </div>


@endsection

@section('footer')
    @parent 
@endsection