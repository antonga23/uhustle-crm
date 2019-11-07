@extends('layouts.auth') @section('content')
<div id="app">
  <div class="main-wrapper min-vh-100" id="auth">
    <div class="row justify-content-center align-items-center min-vh-100 mx-0 ">
      <div class="col-lg-4 min-vh-100 outer-login-container left-side">
        <div class="row login justify-content-center inner-login-container mx-auto">
          <div class="col-lg-12 mb-0 p-0">
            <div class="row mx-0">
              <div class="col-md-12">
                <a href="/login" class="btn center pt-4 w-100 m-0 inactiveBtn">Login</a>
              </div>
            </div>
          </div>
          <div class="col-lg-12 mb-4 p-0">
            <div class="row mx-0">
              <div class="col-md-12">
                <a href="/register" class="btn center pt-4 w-100 m-0 activeBtn">Sign Up</a>
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
                <div class="col-lg-12 mb-3 p-0 center">
                  <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                    <img id="top-landing-logo" src="/images/SVG_Images/Logo.svg" class=" lp-logo m-0">
                  </a>
                </div>
              </div>
              
              <div class="row justify-content-center">
                <div class="col-lg-12 mb-0 p-0 center">
                  <p class="logo-title mb-0">UHUSTLE</p>
                </div>
              </div>

              <div class="container register px-0">
                <div class="row justify-content-center">
                  <div class="col-lg-12">
                    <div class="container px-0">
                      <form role="form" method="POST" action="{{ route('register') }}">
                        <div class="form-group">
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill omni-shadow" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name"> @error('name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                        </div>

                        <div class="form-group pr-0">
                          <input maxlength="100" type="text" required="required" class="form-control rounded-pill omni-shadow" placeholder="Surname" />
                        </div>

                        <div class="form-group">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill omni-shadow" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email"> @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span> @enderror
                        </div>

                        <div class="form-group">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-pill omni-shadow" name="password" required autocomplete="new-password" placeholder="Password"> @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span> @enderror
                        </div>

                        <div class="pb-4 custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="" id="check5">
                          <label class="terms-text custom-control-label" for="check5">I agree to the <a class="terms" href=""> terms and conditions</a></label>
                        </div>

                        <div class="row justify-content-center mx-0">
                          <div class="col-md-12 px-0">
                            <button type="submit" class="btn btn-primary submit-btn w-100 m-0">
                              {{ __('Get Started') }}
                            </button>
                          </div>
                        </div>
                        <hr class="copyright-divider">
                        <p class="copyright">@ 2019 UHUSTLE. All rights reserve</p>
                      </form>
                    </div>
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