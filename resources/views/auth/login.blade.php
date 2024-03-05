@extends('layouts.auth')

@section('title') {{'Login'}} @endsection
@section('content')
    <!-- Sign in Form -->
    <section class="sign-in" style=" background: radial-gradient(circle, rgba(42,133,154,1) 0%, rgba(73,19,166,1) 72%, rgba(50,0,176,1) 82%, rgba(53,0,176,1) 99%);;position: fixed; top: 0; left: 0; width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="container" style="background-color: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 100px;">
            <div class="signin-content" style="display: flex; align-items: center;">
                <div>
                    <figure>
                        <img src="/admin/assets/img/pages/poweredbyCybel.png" alt="sing up image" style="margin-top: 100px;">
                    </figure>
                </div>
                <div class="signin-form" style="margin-left: 20px;">
                    <h2 class="form-title" style="text-align: center; margin-bottom: 20px;color: #FFFFFF">Login</h2>
                    <form class="register-form" id="login-form" action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group has-error">
                            <input name="email" type="email" placeholder="Email" class="form-control input-height" />
                            @error('email')
                            <span class="help-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" placeholder="Password" class="form-control input-height" />
                            @error('password')
                            <span class="help-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group" style="text-align: center;">
                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" style="vertical-align: middle;" />
                            <label for="remember-me" class="label-agree-term" style="display: inline-block; vertical-align: middle;color: #FFFFFF""><span><span></span></span>Remember me</label>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('register') }}" class="signup-image-link" style="display: block; text-align: center;color: #FFFFFF"">Create an account</a>
                        </div>
                        <div class="form-group form-button" style="text-align: center;">
                            <button class="btn btn-round" name="signin" id="signin" style="background-color: royalblue; color: white;" onmouseover="this.style.backgroundColor='navy'; this.style.color='white';" onmouseout="this.style.backgroundColor='royalblue'; this.style.color='white';">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
