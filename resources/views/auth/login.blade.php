@extends('layouts.auth')

@section('content')

<div class="row auth-buttons login justify-content-center mx-auto">
    <div class="col-lg-12 mb-4 p-0">
        <div class="row mx-0">
            <div class="col-md-6 pl-0">
                <a href="" class="btn w-100 m-0 activeBtn">Sign In</a>
            </div>
            <div class="col-md-6 pr-0">
                <a href="/register" class="btn w-100 m-0 inactiveBtn">Sign Up</a>
            </div>
        </div>
    </div>
</div>
<div class="container login px-0">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email" class="form-control @error('email') is-invalid @enderror omni-shadow" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="password" placeholder="{{ __('Password') }}" type="password" class="form-control @error('password') is-invalid @enderror omni-shadow" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input omni-shadow" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary w-100 m-0">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link w-100 mx-0" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
