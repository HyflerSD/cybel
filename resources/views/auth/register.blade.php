@extends('layouts.auth')

@section('content')
    <!-- Sign up form -->
    <section class="signup" style="background: radial-gradient(circle, rgba(42,133,154,1) 0%, rgba(73,19,166,1) 72%, rgba(50,0,176,1) 82%, rgba(53,0,176,1) 99%);position: fixed; top: 0; left: 0; width: 100%; height: 100vh; display: flex; justify-content: center; align-items: center;">
        <div class="container" style="background-color: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 100px;">
            <div class="signup-content" style="display: flex; align-items: center; color: white;">
                <div class="signup-form" style="width: 100%;">
                    <h2 class="form-title" style="text-align: center; color: white;">Sign up</h2>
                    <form method="POST" class="register-form" action="{{ route('register') }}" id="register-form">
                        @csrf
                        <div class="form-group">
                            <div class="">
                                <input name="fname" type="text" placeholder="First Name"
                                       class="form-control input-height" style="color: white; background-color: rgba(255, 255, 255, 0.2);"/>
                                @error('name')
                                <span class="help-block" role="alert" style="color: white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input name="lname" type="text" placeholder="Last Name"
                                       class="form-control input-height" style="color: white; background-color: rgba(255, 255, 255, 0.2);"/>
                                @error('name')
                                <span class="help-block" role="alert" style="color: white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <input name="is_advisor" type="hidden" value=""/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input name="email" type="email" placeholder="Your Email"
                                       class="form-control input-height" style="color: white; background-color: rgba(255, 255, 255, 0.2);"/>
                                @error('email')
                                <span class="help-block" role="alert" style="color: white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input name="password" type="password" placeholder="Password"
                                       class="form-control input-height" style="color: white; background-color: rgba(255, 255, 255, 0.2);"/>
                                @error('password')
                                <span class="help-block" role="alert" style="color: white;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input name="password_confirmation" type="password" placeholder="Repeat Password"
                                       class="form-control input-height" style="color: white; background-color: rgba(255, 255, 255, 0.2);"/> </div>
                        </div>
                        <div class="form-group">
                            <label for="agree-term" class="label-agree-term" style="color: white;">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" style="color: white;"/>
                                <span><span></span></span>I agree to <a href="#" class="term-service" style="color: white;">Terms of service</a>
                            </label>
                        </div>
                        <div class="form-group form-button" style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
                            <button class="btn btn-round" name="signup" id="register" style="background-color: royalblue; color: white;" onmouseover="this.style.backgroundColor='navy'; this.style.color='white';" onmouseout="this.style.backgroundColor='royalblue'; this.style.color='white';">Register</button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="/admin/assets/img/pages/poweredbyCybel.png" alt="sing up image"></figure>
                    <a href="{{ route('login') }}" class="signup-image-link" style="color: white;">I am already member.</a>
                </div>
            </div>
        </div>
    </section>
@endsection
