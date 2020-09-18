@extends('layouts.kotonohaapp')
@section('title','お問い合わせ')

@section('menubar')
    @parent
@endsection

@section('content')
    <style>
        .icon ul{
            margin:0;
            padding:0;
            list-style: none;
            display:flex;
        }
        .icon ul li{
            margin-right: 12px;
        }
    </style>

    <h2>お問い合わせ</h2>

    <p>ご意見、ご感想、バグなどあれば下記フォームよりご連絡ください。</p>
    <p>Googleフォームを利用させていただいております。</p>
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeDD--Rw2oQcLPhlR4XNggIP8IykpxRV2ihES7tDQ10TE45aw/viewform?embedded=true" width="640" height="951" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
    <p>　</p>
    <div class="icon">
      <p>製作者TwitterとGitHub</p>
      <ul>
        <li>
            <a href="https://twitter.com/usuyuki26" target="_blank">
                <img src="img/logos/sns/Twitter.png" width="40" height="40" alt="Twitterへのリンクアイコンです">
            </a>
        </li>
        <li>
            <a href="https://github.com/Usuyuki" target="_blank">
                <img src="img/logos/sns/GitHub.png" width="40" height="40" alt="Githubへのリンクアイコンです">
            </a>
        </li>
      </ul>
    </div>
@endsection

@section('footer')
    @parent 
@endsection