@extends('layouts.kotonohaapp')
@section('title','言の葉郵便局')
@section('menubar')
    @parent
@endsection
<style>
    .pagination{font-size:10pt;}
    .pagination li{display:inline-block}
</style>

@section('content')
<table>
<tr><th>宛名</th><th>差出人</th><th>本文</th><th>リンク</th></tr>
@foreach($mails as $mail)
    <tr>
        <td>{{$mail->for}}</td>
        <td>{{$mail->from}}</td>
        <td>{{$mail->text}}</td>
        <td>準備中</td>
    </tr>
@endforeach
</table>
{{$mails->links()}}
@endsection


@section('footer')
    @parent 
@endsection