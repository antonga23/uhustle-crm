@extends('layouts.auth') @section('content')
<div id="app">
  <div class="main-wrapper min-vh-100" id="auth">
    <div class="row justify-content-center align-items-center min-vh-100 mx-0">
      <div class="col-6 px-0">
        <div class="login">
          <h1 class="text-center">Sign Up</h1>
          <form role="form" method="POST" action="{{ route('register') }}">
            <div class="form-group">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill omni-shadow" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name"> @error('name')
              <span class="invalid-feedback" role="alert">
                {{ $message }}
              </span> @enderror
            </div>

            <div class="form-group pr-0">
              <input maxlength="100" type="text" required="required" class="form-control rounded-pill omni-shadow" placeholder="Surname" />
            </div>

            <div class="form-group">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill omni-shadow" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"> @error('email')
              <span class="invalid-feedback" role="alert">
                {{ $message }}
              </span> @enderror
            </div>

            <div class="form-group">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-pill omni-shadow" name="password" required autocomplete="new-password" placeholder="Password"> @error('password')
              <span class="invalid-feedback" role="alert">
                {{ $message }}
              </span> @enderror
            </div>

            <div class="form-group row mx-0 mb-0 justify-content-between route-btns">
              <div class="col-auto custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="" id="check5">
                <label class="terms-text custom-control-label" for="check5">I agree to the 
                  <a class="font-weight-bold terms" href=""> terms and conditions</a>
                </label>
              </div>

              <div class="col-auto">
                <a href="/register" class="btn center m-0 p-0 auth-btns font-weight-bold">Login</a>
              </div>
            </div>

            <div class="row justify-content-center mx-0">
              <div class="col-auto">
                <button type="submit" class="btn btn-primary submit-btn mx-0 mb-0 font-weight-bold text-uppercase border-0">
                  {{ __('Get Started') }}
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