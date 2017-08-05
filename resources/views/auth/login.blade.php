@extends('layouts.base')
@section('content')
<div class="login-wrapper" style="background-image: url(dashboard/img/mp-bg.jpg)">
    <section class="first-sub_wrapper">
        <div class="logo">
            <img src="{{asset('dashboard/img/mypadi-logo2.png')}}" alt="MyPadi_Logo">
        </div>
        <div class="login-form_container pane-white text-center">
            <form action="{{ url('login') }}" method="get">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" placeholder="Email or Phone Number" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <a href="/manage-users" class="btn btn-secondary btn-block">LOGIN</a>
                </div>
                <br>

                <a href="" class="forget-password-link">Forgot Password?</a>

                <hr class="divide-line">
                <span class="divide-text">OR</span>
                <div class="login-with-label_container">
                    <span class="alt-label">
                        LOGIN WITH
                    </span>
                </div>
                <div class="social-login-button_container">
                    <button class="btn btn--facebook">
                        <i class="facebook f icon"></i>
                    </button>
                    <button class="btn btn--google">
                        <i class="google icon"></i>
                    </button>

                    <button class="btn btn--twitter">
                        <i class="twitter icon"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>
    <section class="second-sub_wrapper">
        <div class="inner">
            <p class="pull-right"> Don't have an account ? <a href="/register" class="btn btn-success">Sign</a></p>
        </div>
    </section>
</div>
@endsection