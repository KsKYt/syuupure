@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="login-top">
                    <p>会員登録</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="login-email">
                            <div class="login-email-in">
                                <label for="name" class="text-md-end">{{ __('ユーザー名') }}</label>

                                <div class="">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="login-email">
                            <div class="login-email-in">
                                <label for="email" class=" text-md-end">{{ __('Eメール') }}</label>

                                <div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="login-email">
                            <div class="login-email-in">
                                <label for="password" class="  text-md-end">{{ __('パスワード') }}</label>

                                <div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="login-email">
                            <div class=" login-email-in">
                                <label for="password-confirm" class="password-confirm">{{ __('もう一度パスワードを入力してください') }}</label>

                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="login-btn">
                            <div class="login-submit">
                                <button type="submit" class="login-btn-in bgleft">
                                    <span> {{ __('登録する') }}</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection