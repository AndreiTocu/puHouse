@extends('layouts.app')

@section('content')
  <!-- Register css file -->
  <link rel="stylesheet" href="/css/Register.css">

    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
               <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Register</h5>
              <form class="form-signin" action="{{ route('register') }}" method="POST">
                @csrf
                <!-- Name -->
                <div class="form-label-group">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  <label for="name">{{ __('Name') }}</label>

                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <!-- E-mail Adress -->
                <div class="form-label-group">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ old('email') }}" required autocomplete="email">
                  <label for="email">{{ __('E-Mail Address') }}</label>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <hr>
                <!-- Password -->
                <div class="form-label-group">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                  <label for="password">Password</label>
                </div>
                <!-- Confirm Password -->
                <div class="form-label-group">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password" >
                  <label for="password-confirm">{{ __('Confirm Password') }}</label>
                </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Register') }}</button>
                <hr class="my-4">
                <a href="{{ url('redirect') }}" class="btn btn-lg btn-google btn-block text-uppercase"><i class="fab fa-google mr-2"></i>Sign up with Google</a>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
