<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Movie Sport</title>
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
            <div id="navbarDropdown" class="nav-link">
                <p class="username">{{ Auth::user()->name }}さん</p>
            </div>
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


        <div class="content">
            @yield('content')
        </div>
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