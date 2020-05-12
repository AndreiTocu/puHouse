@extends('layouts.app')

@section('content')
  <!-- Style for the LogIn feature -->
  <link href="{{ asset('css/Login.css') }}" rel="stylesheet">

  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">{{ __('Login') }}</h5>
            <form action="{{ route('login') }}" method="POST" class="form-signin">
              @csrf

              <!-- E-mail Adress -->
              <div class="form-label-group">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name = "email" placeholder="Email Adress" required autocomplete="email" autofocus>
                <label for="email">{{ __('E-Mail Address') }}</label>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <!-- Password -->
              <div class="form-label-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                <label for="password">{{ __('Password') }}</label>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Login') }}</button>
              <!-- Forgot Password -->
              <div class="text-center">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
              </div>
              <hr class="my-4">
              <a href="{{ url('redirect') }}" class="btn btn-lg btn-google btn-block text-uppercase"><i class="fab fa-google mr-2"></i>Login with Google</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
