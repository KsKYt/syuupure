<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
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

        <div class="right linkb bgleft">
            @if (Route::has('login'))
            <div>
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><span>ログアウト</span></a>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><span>ログイン</span></a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"><span>会員登録</span></a>
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