@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>


                    @endif

                </div>
           
                 <div class="content-logout">
                        <p class="logout-text">ログアウトしますか？</p>
                     
                        <div class="login-content"> <a class="login-item bgleft" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                            <span> {{ __('ログアウト') }}</span>
                        </a>   </div>
                 </div>

              </p> 

           
        </div>
    </div>
</div>
</div>
@endsection