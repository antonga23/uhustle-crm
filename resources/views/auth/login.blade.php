@extends('layouts.auth') @section('content')
<div id="app">
  <div class="main-wrapper min-vh-100" id="auth">
    <div class="row justify-content-center align-items-center min-vh-100 mx-0">
      <div class="col-6 px-0">
        <div class="login">
          <h1 class="text-center">Login</h1>
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mt-4">
              <input 
                id="email" 
                placeholder="{{ __('Email') }}" 
                type="email" 
                class="form-control @error('email') is-invalid @enderror omni-shadow rounded-pill" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autocomplete="email" 
                autofocus
              > @error('email')
              <span class="invalid-feedback" role="alert">
                {{ $message }}
              </span> @enderror
            </div>

            <div class="form-group mb-0">
              <input 
                id="password" 
                placeholder="{{ __('Password') }}" 
                type="password" 
                class="form-control @error('password') is-invalid @enderror omni-shadow rounded-pill" 
                name="password" 
                required 
                autocomplete="current-password"
              >@error('password')
              <span class="invalid-feedback" role="alert">
                {{ $message }}
              </span> @enderror
            </div>

            <div class="form-group row mx-0 mb-0 justify-content-between route-btns">
              <div class="col-auto">
                <a href="/register" class="btn center m-0 px-0 auth-btns font-weight-bold">Sign up</a>
              </div>

              <div class="col-auto">
                @if (Route::has('password.request'))
                <a class="btn btn-link m-0 px-0 text-capitalize pwd-link font-weight-bold" href="{{ route('password.request') }}">
                  {{ __('forgot password?') }}
                </a> @endif 
              </div>
            </div>

            <div class="form-group row mx-0 mb-0 justify-content-center">
              <div class="col-auto">
                <button type="submit" class="btn btn-primary submit-btn mx-0 mb-0 font-weight-bold text-uppercase border-0">
                  {{ __('Log in') }}
                </button>
              </div>
            </div>
          </form>
          <hr class="copyright-divider">
          <p class="copyright">@ 2019 SIAREM. All rights reserved</p>
        </div>
      </div>

      <div class="col-6 text-right">
        <img src="/images/SVG_Images/siarem-logo.svg" alt="Siarem logo" width="80.5%">
      </div>
    </div>
  </div>
</div>

@endsection