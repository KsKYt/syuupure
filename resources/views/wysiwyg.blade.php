<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
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



    <div class="header-">
            <h1 class="login-top">投稿</h1>
        </div>
    <div class="wrapper-post">
       
        <div class="content_wrapper">
            <div class="content2">

                <form action="/newpostsend" method="post" name="ansform" enctype="multipart/form-data">
                    @csrf
                    <p class="post-title">タイトル</p>
                    <input type="text" name="title" class="formtitle">
                    <p>&nbsp;</p>
                    <p>本文</p>
                    <div id="editor" style="height: 200px;"></div>
                    <input type="hidden" name="main">
                    <p>&nbsp;</p>
                
                    <button type="submit" class="submitbtn login-btn-in bgleft" name="subbtn">    
<span>投稿する</span>
                    </button>
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
                    ['image', 'video'],
                    [{
                     
                    }, {
           
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