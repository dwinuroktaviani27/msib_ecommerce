@extends('layouts.app')

@section('content')
<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="POST" action="{{ route('register') }}">
          @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign Up with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Name input -->
          <div class="form-outline mb-4">
             <input id="name" type="text" class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
              placeholder="Enter a valid email address" name="email" value="{{ old('email') }}" required autocomplete="email"/>
            @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
              placeholder="Enter password" name="password" required autocomplete="current-password"/>
            @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
          </div>

          <!-- Confirm Password -->
          <div class="form-outline mb-3">
            <input id="password-confirm" type="password"" class="form-control form-control-lg"
              placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password"/>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>

            <p class="small fw-bold mt-2 pt-1 mb-0">Have an account? <a href="{{ route('login') }}"
                class="link-danger">Sign In</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  {{-- <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div> --}}
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
@endsection
