@extends('layouts.kotonohaapp')
@section('title','言の葉HTML')
@section('menubar')
    @parent
@endsection


@section('content')
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

    <div class="waku">
        <p>403 エラーです。このページへの入構は許可されていません。</p>
    </div>

@endsection

@section('footer')
    @parent 
@endsection