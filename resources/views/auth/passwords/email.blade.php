@extends('layouts.app')

@section('content')
  <!-- Style for the LogIn feature -->
  <link href="{{ asset('css/Login.css') }}" rel="stylesheet">

  <div class="container p-5">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <h5 class="card-title text-center">{{ __('Reset Password') }}</h5>
            <form action="{{ route('password.email') }}" method="POST" class="form-signin">
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
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">{{ __('Send Password Reset Link') }}</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
