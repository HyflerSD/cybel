@extends('layouts.auth')

@section('content')
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form method="POST" class="register-form" action="{{ route('register') }}" id="register-form">
                        @csrf
                        <div class="form-group">
                            <div class="">
                                <input name="fname" type="text" placeholder="First Name"
                                       class="form-control input-height" />
                                @error('name')
                                <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input name="lname" type="text" placeholder="Last Name"
                                       class="form-control input-height" />
                                @error('name')
                                <span class="help-block" role="alert">
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
                                       class="form-control input-height" />
                                @error('email')
                                <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input name="password" type="password" placeholder="Password"
                                       class="form-control input-height" />
                                @error('password')
                                <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <input name="password_confirmation" type="password" placeholder="Repeat Password"
                                       class="form-control input-height" /> </div>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                                statements in <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <button class="btn btn-round btn-primary" name="signup" id="register">Register</button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="/admin/assets/img/pages/signup.jpg" alt="sing up image"></figure>
                    <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
@endsection
