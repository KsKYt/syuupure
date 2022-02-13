<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
     
               <div class="app-head">
               <div class="nav-back">
                 
                            <span class="navbar-toggler-icon"></span>
                            
                   
                            <a class="back linkb bgleft" href="{{ url('/top1') }}">
                                <span>{{ config('戻る', '戻る') }}</span>
                            </a>
                   </div>
                     
        
                    
    
           
               </div>
                                   
                        
                        
                
                </div>
            </div>
        </nav>

            
            <main class="py-4">
        


         
          
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <p class="login-top">
                            パスワードを再設定する。
</p>

                   
                         <div class="email-content
                         ">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
    
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
    
                                    <div class="login-email">
                                        <div class="login-email-in">
                                            <label for="email" class="login-titl"><p>Eメール</p></label>
    
                                           
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                           
                                        </div>
                                    </div>
    

                            
                    
                          
                                  
                            
                              
            

                        <div class="row mb-0">
                                    <div class="login-btn">
                                        <div class="login-submit">
                                            <button type="submit" class="login-btn-in bgleft">
                                             <span>   {{ __('送信') }}</span>
                                            </button>
                                        </div>
                                    </div>
                         </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    
        </main>
    </div>
</body>

</html>