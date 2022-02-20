<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <header class="header-top">
        <div class="header-top__img">
            <a href="/top1"> <img src="/storage/post_img/logo.png" alt="logo"></a>
        </div>


        <nav class="navigation-main">


            <div class="left">
                <a href="/index" class="linkb bgleft"><span>募集を探す</span></a>

                <a href="/create2" class="linkb bgleft"> <span>募集をする</span></a>
            </div>

        </nav>
        <div>
                @auth
                <div id="navbarDropdown" class="nav-link" >
                                            <p class="username">{{ Auth::user()->name }}さん</p></div>
</div>
        <div class="right linkb bgleft">
            
            @if (Route::has('login'))
           
                <a href="{{ url('/home') }}" class="login-out"><span>ログアウト</span></a>
                @else
                <a href="{{ route('login') }}" class="lgoin"><span>ログイン</span></a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="login"><span>会員登録</span></a>
                @endif
                @endauth
            </div>
            @endif
        </div>
     
    </header>
    <div class="wrapper">
        <div class="header">
            <h1 class="login-top">募集詳細</h1>
        </div>
       

        <div class="content-show">
        <p class="created">{{$data->created_at}}</p>
        <h1>{{$data->title}}</h1>
        <hr>
        <p>{!! nl2br($data->main)!!}</p>
            
        @if(file_exists(public_path().'/storage/post_img/'. $data->id .'.jpg'))
                <img src="/storage/post_img/{{ $data->id }}.jpg">
            @elseif(file_exists(public_path().'/storage/post_img/'. $data->id .'.jpeg'))
                <img src="/storage/post_img/{{ $data->id }}.jpeg">
            @elseif(file_exists(public_path().'/storage/post_img/'. $data->id .'.png'))
                <img src="/storage/post_img/{{ $data->id }}.png">
            @elseif(file_exists(public_path().'/storage/post_img/'. $data->id .'.gif'))
                <img src="/storage/post_img/{{ $data->id }}.gif">
            @endif
        </div>

      
        <footer class="footer">

<nav class="navigation-footer">
    <ul class="navigation-footer__item">
        <li><a href="#">利用規約</a></li>
        <li><a href="#">プライバシーポリシー</a></li>
        <li><a href="#">お問い合わせ</a></li>

    </ul>
    <div class="footer-info">
        <small>&copy; 2022</small>
    </div>
</nav>


</footer>
   
   
    </body>
</html> 