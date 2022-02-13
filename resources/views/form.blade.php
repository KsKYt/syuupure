

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <header class="header-top">
        <div class="header-top__img">
            <img src="images/logo.png" alt="logo">
        </div>
  

            <nav class="navigation-main">

                <div class="left">
                    <a href="menu.html" class="menu_1">募集を探す</a>

                    <a href="access.html">募集をする</a>
</nav>

                    <div class="right">
                        @if (Route::has('login'))
                        <div>
                            @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログアウト</a>
                            @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">会員登録</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </div>
            </nav>
    </header>







    <form action="/newpostsend" method="post" enctype="multipart/form-data">
    @csrf
    <p>タイトル</p>
    <input type="text" name="title" class="formtitle">

    <p>&nbsp;</p>
    <p>本文</p>
    <textarea name="main" cols="40" rows="10"></textarea>

    <p>&nbsp;</p>
    <p>画像をアップロード</p>
    <input type="file" name="post_img">

    <p>&nbsp;</p>
    <input type="submit" class="submitbtn">
</form>
    






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