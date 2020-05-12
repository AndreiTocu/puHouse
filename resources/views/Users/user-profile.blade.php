@extends('layouts.app')

@section('content')

  <!-- Register css file -->
  <link rel="stylesheet" href="/css/Register.css">

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
            <div class="card-body">
              <div class="row">

                <div class="col-lg-6 text-center">
                  <img class="rounded-circle" src="{{URL::asset('/images-users/'.Auth::user()->avatar )}}"
                                              alt="Generic placeholder image" width="150" height="150">
                  <h5 class="card-title text-center pt-3">{{ $user->name }} - Profile</h5>
                </div>

                <div class="col-lg-6 text-center">
                  <div class="container text-center">
                    <div class="card-heder">
                       <span class="badge badge-dark badge-pill">Name</span>
                    </div>
                    <div class="card-body">
                      {{ $user->name }}
                    </div>
                  </div>

                  <div class="container text-center">
                    <div class="card-heder">
                       <span class="badge badge-dark badge-pill">E-mail</span>
                     </div>
                    <div class="card-body">
                      {{ $user->email }}
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row -->
              <hr>
              <div class="row pt-3">
                @if($user->google_id == '')
                  <div class="col-lg-6 text-center">
                    <a class="btn btn-primary" href="{{ route('UserProfileUpdate') }}">Edit Profile</a>
                  </div>
                @endif
                <div class="col-lg-6 text-center">
                  <a class="btn btn-danger" href="{{ route('UserDelete') }}">Delete Profile</a>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
@endsection
