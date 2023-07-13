@extends('layouts.app')

@section('content')
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Register</h2>
              <form method="POST" action="{{ route('register') }}">
                @csrf
  
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                      <label class="form-label" for="name">Name</label>
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                      <label class="form-label" for="email">Email address</label>
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                </div>
  
                <div class="form-outline mb-4">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                  <label class="form-label" for="password">Password</label>
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
  
                <div class="form-outline mb-4">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                  <label class="form-label" for="password-confirm">Confirm Password</label>
                </div>
  
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                  </label>
                </div>
  
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Register
                </button>
  
              </form>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" class="w-50 rounded-4 shadow-4"
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  
@endsection
