@extends('layouts.kotonohaapp')
@section('title','送信完了')
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
    <p>文使いに渡されました。</p>
    <div class="waku">
    <h2>{{$url}}</h2>
    <p>こちらを複製してSNSなどで送り先へリンクを共有してください。</p>
    </div>


@endsection

@section('footer')
    @parent 
@endsection