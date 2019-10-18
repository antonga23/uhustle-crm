@extends('layouts.auth') @section('content')
<div id="app">
    <div class="main-wrapper vh-100" id="auth">
        <div class="row justify-content-center h-100 mx-0 ">
            <div valign="top" class="col-lg-4 outer-login-container left-side">
                <div class="row login justify-content-center inner-login-container mx-auto">
                    <div class="col-lg-12 mb-0 p-0">
                        <div class="row mx-0">
                            <div class="col-md-12">
                                <a href="/login" class="btn center pt-4 w-100 m-0 activeBtn">Login</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4 p-0">
                        <div class="row mx-0">
                            <div class="col-md-12">
                                <a href="/register" class="btn center pt-4 w-100 m-0 inactiveBtn">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 px-5 right-side">
                <main>
                    <div class="row mt-10 align-content-center align-items-center justify-content-center">
                        <div class="col-10 align-self-center">

                            <div class="row justify-content-center mx-auto">
                                <div class="col-lg-12 mb-4 p-0 center">
                                    <a class="navbar-brand" href="{{ url('/') }}">
                                        <img id="top-landing-logo" src="/images/SVG_Images/Logo.svg" class=" lp-logo m-0">
                                    </a>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 mb-0 p-0 center">
                                    <p class="logo-title mb-0">UHUSTLE</p>
                                </div>
                            </div>
                            <div class="container login px-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group row mt-4">
                                                <div class="col-md-12">
                                                    <input id="email" placeholder="{{ __('Email') }}" type="email" class="form-control @error('email') is-invalid @enderror omni-shadow" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                         </span> @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-12">
                                                    <input id="password" placeholder="{{ __('Password') }}" type="password" class="form-control @error('password') is-invalid @enderror omni-shadow" name="password" required autocomplete="current-password"> @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span> @enderror
                                                </div>
                                            </div>

                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link w-100 mx-0 mt-0 mb-3 pwd-link" href="{{ route('password.request') }}">
                                {{ __('forgot password?') }}
                                     </a> @endif 
                                            <div class="form-group row mb-0">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary submit-btn w-100 m-0">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <hr class="my-4">
                                        <p class="copyright">@ 2019 UHUSTLE. All rights reserve</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

@endsection