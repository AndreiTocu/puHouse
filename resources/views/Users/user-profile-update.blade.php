@extends('layouts.app')

@section('content')
  <!-- Register css file -->
  <link rel="stylesheet" href="/css/Register.css">

  <div class="container mt-5">
    <div class="title text-center">
      @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
      @endif
    </div>
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
            <div class="card-body">
              <form action="{{ route('UserUpdate') }}" method="post">
                @csrf

                <!-- Profile Picture -->
                <div class="form-label-group text-center p-1">
                  <div class="card-body">
                    <img class="rounded-circle" src="images-users/{{ Auth::user()->avatar }}"
                                                alt="Generic placeholder image" width="140" height="140">
                  </div>
                </div>

                <div class="pt-3">
                  <!-- Name -->
                  <div class="form-label-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>
                    <label for="name">{{ __('Name') }}</label>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <!-- E-mail Adress -->
                  <div class="form-label-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="pt-3">
                  <button class="btn btn-success" type="submit" name="button">Confirm Change</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
