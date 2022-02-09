<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
</head>


<body>
    <header class="header-top">
        <div class="header-top__img">
        <a href="/top1"> <img src="/storage/post_img/logo.png" alt="logo"></a>
        </div>


        <nav class="navigation-main">

            <div class="left">
            <a href="/index">募集を探す</a>

<a href="/create2">  募集をする</a>
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



    <div class="wrapper">
        <div class="header">
            <h1>投稿ページ</h1>
        </div>
        <div class="content_wrapper">
            <div class="content2">

                <form action="/newpostsend" method="post" name="ansform" enctype="multipart/form-data">
                    @csrf
                    <p>タイトル</p>
                    <input type="text" name="title" class="formtitle">
                    <p>&nbsp;</p>
                    <p>本文</p>
                    <div id="editor" style="height: 200px;"></div>
                    <input type="hidden" name="main">
                    <p>&nbsp;</p>
                    <input type="submit" class="submitbtn" name="subbtn">
                </form>

            </div>
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
    <script>
        var quill = new Quill('#editor', {
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline', 'strike'],
                    [{
                        'color': []
                    }, {
                        'background': []
                    }],
                    ['link', 'blockquote', 'image', 'video'],
                    [{
                        list: 'ordered'
                    }, {
                        list: 'bullet'
                    }]
                ]
            },
            placeholder: 'Write your question here...',
            theme: 'snow'

        });
        document.ansform.subbtn.addEventListener('click', function() {
            document.querySelector('input[name=main]').value = document.querySelector('.ql-editor').innerHTML;
            document.ansform.submit();
        });
    </script>

</body>

</html>