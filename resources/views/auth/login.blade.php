@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             <p class="login-top">  ログイン</p>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-email">
                        <div class="login-email-in">
                            <label for="email" class="login-titl"><p>Eメール</p></label>

                           
                                <input id="email" type="email" class="form-control-e @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="login-email">
                        <div class="login-email-in">
                            <label for="password" class="login-titl"><p>パスワード</p></label>
                            @if (Route::has('password.request'))
                                  <div class="pass-btn">
                                        <a class="pass-btn-in" href="{{ route('password.request') }}">
                                            <p class="pass-forget">パスワードを忘れましたか？</p>
                                        </a>
                                  </div>
                           
                                <input id="password" type="password" class="form-control-p @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="memo">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                       <p> 記憶する</p>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="login-btn">
                                <div class="login-submit">
                                    <button type="submit" class="login-btn-in bgleft">
                                    <span>{{ __('ログイン') }}</span>
                                    </button>
                                </div>
                                </div>
                              
                                @endif
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
