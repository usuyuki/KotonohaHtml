@extends('layouts.kotonohaapp')
@section('title','言の葉郵便局')
@section('menubar')
    @parent
@endsection


@section('content')
    <style>
        .pagination{font-size:10pt;}
        .pagination li{display:inline-block}
    </style>

    <table>
        <tr><th>宛名</th><th>差出人</th><th>本文</th><th>uuid</th></tr>
        @foreach($mails as $mail)
            <tr>
                <td>{{$mail->for}}</td>
                <td>{{$mail->from}}</td>
                <td>{{$mail->text}}</td>
                <td>{{$mail->uuid}}</td>
            </tr>
        @endforeach
    </table>
    {{$mails->links()}}
@endsection


@section('footer')
    @parent 
@endsection