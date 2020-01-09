@extends('layouts.auth') @section('content')
<div id="app">
    <div class="main-wrapper vh-100" id="auth">
        <div class="row justify-content-center h-100 mx-0 ">
            <div valign="top" class="col-lg-4 outer-login-container left-side">
                <div class="row login justify-content-center inner-login-container mx-auto">
                </div>
            </div>
            <div class="col-lg-8 px-5 right-side">
                <main>
                    <div class="row align-content-center align-items-center justify-content-center">
                        <div class="col-10 align-self-center mt-20">
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
                                    <p>{{ __('Reset Password') }}</p>
                                </div>
                            </div>
                            <div class="container login px-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                        @endif

                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                                </div>
                                          </div>
                                                <div class="form-group row mb-0">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary w-100 m-0">
                                                            {{ __('Send Password Reset Link') }}
                                                        </button>
                                                    </div>
                                                </div>
                                        </form>
                                        <hr class="my-4">
                                        <p class="copyright">@ <script>document.write(new Date().getFullYear())</script> UHUSTLE. All rights reserve</p>
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