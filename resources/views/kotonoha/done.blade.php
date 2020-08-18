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

}
</style>
@section('content')
    <h2>文使いに渡されました。</h2>
    <div class="waku">
    <h2>{{$url}}</h2>
    <p>上記URLを複製してSNSなどで送り先へリンクを共有してください。</p>
    </div>


@endsection

@section('footer')
    @parent 
@endsection