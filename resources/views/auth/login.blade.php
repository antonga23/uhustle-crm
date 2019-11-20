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
                <strong>{{ $message }}</strong>
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
                <strong>{{ $message }}</strong>
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

      <!-- <div class="col-lg-4 min-vh-100 outer-login-container left-side">
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
          <div class="row align-items-center justify-content-center">
            <div class="col-10">
              <div class="row justify-content-center mx-auto">
                <div class="col-lg-12 mb-4 p-0 center">
                  <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                    <img id="top-landing-logo" src="/images/SVG_Images/siarem-logo.svg" class="lp-logo m-0">
                  </a>
                </div>
              </div>

              <div class="container login px-0">
                <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <form method="POST" action="{{ route('login') }}">
                      @csrf

                      <div class="form-group row mt-4">
                        <div class="col-md-12">
                          <input id="email" placeholder="{{ __('Email') }}" type="email" class="form-control @error('email') is-invalid @enderror omni-shadow rounded-pill" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                        </div>
                      </div>

                      <div class="form-group row mb-0">
                        <div class="col-md-12">
                          <input id="password" placeholder="{{ __('Password') }}" type="password" class="form-control @error('password') is-invalid @enderror omni-shadow rounded-pill" name="password" required autocomplete="current-password"> @error('password')
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
      </div> -->
    </div>
  </div>
</div>

@endsection