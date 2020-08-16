@extends('layouts.kotonohaapp')
@section('title','御手紙')
@section('menubar')
    @parent
@endsection

<style>
.waku{
    padding: 0.5em 1em;
        margin: 2em 0;
        font-weight: bold;
        color: black;/*文字色*/
        background: #FFF;
        border: solid 3px red;/*線*/
        border-radius: 10px;/*角の丸み*/
        /* float: left; */
}
</style>
@section('content')
<div class="waku">
    <p>404 エラーです。このページは存在しません。</p>
</div>

@endsection

@section('footer')
    @parent 
@endsection