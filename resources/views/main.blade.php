<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yomogi&family=Yusei+Magic&family=Zen+Maru+Gothic:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Movie Sport</title>
</head>

<body class="main-bg">
    <header class="header-top">

        <div class="header-top__img">
            <a href="/top1"> <img src="/storage/post_img/logo.png" alt="logo"></a>
        </div>

    </header>

    <div class="top-text">
        <h1><span class="smoothText"><span class="smoothTextTrigger">映画を作りたい、すべての人へ。</h1></span></span>
        <div class="top-text__img">
            <a href="/top1"> <img src="/storage/post_img/logo.png" alt="logo"></a>
        </div>
    </div>

    <div class="middle-text">
        <span class="smoothText"><span class="smoothTextTrigger">
                <h2>創造しよう、あなたの世界を</h2>
            </span></span>
        <span class="smoothText"><span class="smoothTextTrigger">
                <p>あなたの作りたいを応援する、それが「Movie Support」です。<br>
            </span></span>
        <span class="smoothText"><span class="smoothTextTrigger">「Movie Support」は、映像制作を行う人のためのマッチングプラットフォームです。</p></span></span>



        <div class="login-box border">

            <span>
                @if (Route::has('login'))
                <div class="link">
                    @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログアウト</a>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
                </div>
            </span>
        </div>
        <div class="login-box border link">
            <span>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">会員登録</a>
                @endif
                @endauth
        </div>
        @endif

        </span>

    </div>
    <span class="smoothText"><span class="smoothTextTrigger">
            <div class="bottom-text">
                <h2>創造を広げる</h2>
        </span></span>

    <span class="smoothText"><span class="smoothTextTrigger">
            <p>今まで出会うことのかった人に出会い<br>
        </span></span>
    <span class="smoothText"><span class="smoothTextTrigger"> 価値観を広げることによって<br></span></span>
    <span class="smoothText"><span class="smoothTextTrigger">あなたの「創造」はより新しいものに変わっていくかもしれません。<br></span></span>
    <span class="smoothText"><span class="smoothTextTrigger">あなたの創造を広げてみませんか</p>
        </span></span>
    <div class="login-box border">

        <span>
            @if (Route::has('login'))
            <div class="link">
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログアウト
        </span></a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
    </div>
    </span>
    </div>
    <div class="login-box border link">
        <span>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">会員登録</a>
            @endif
            @endauth
    </div>
    @endif

    </span>
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


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script>
        function SmoothTextAnime() {
            $('.smoothTextTrigger').each(function() { //smoothTextTriggerというクラス名が
                var elemPos = $(this).offset().top - 100; //要素より、50px上の
                var scroll = $(window).scrollTop();
                var windowHeight = $(window).height();
                if (scroll >= elemPos - windowHeight) {
                    $(this).addClass('smoothTextAppear'); // 画面内に入ったらsmoothTextAppearというクラス名を追記
                } else {
                    $(this).removeClass('smoothTextAppear'); // 画面外に出たらsmoothTextAppearというクラス名を外す
                }
            });
        }


        $(window).scroll(function() {
            SmoothTextAnime();
        });

        // 画面が読み込まれたらすぐに動かしたい場合の記述
        $(window).on('load', function() {
            SmoothTextAnime(); /* アニメーション用の関数を呼ぶ*/
        }); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述
    </script>

</body>


</html>