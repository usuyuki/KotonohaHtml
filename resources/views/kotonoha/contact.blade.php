@extends('layouts.kotonohaapp')
@section('title','お問い合わせ')
<style>
.btn--orange,
a.btn--orange {
  color: #fff;
  background-color: #669966;
}
.btn--orange:hover,
a.btn--orange:hover {
  color: #fff;
  background: #669966;
}
</style>
@section('menubar')
    @parent
@endsection

@section('content')
    <h2>お問い合わせ</h2>

    <p>ご意見、ご感想、バグなどあれば下記フォームよりご連絡ください。</p>
    <p>Googleフォームを利用させていただいております。</p>
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeDD--Rw2oQcLPhlR4XNggIP8IykpxRV2ihES7tDQ10TE45aw/viewform?embedded=true" width="640" height="951" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
@endsection

@section('footer')
    @parent 
@endsection