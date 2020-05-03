@extends('layouts.app')

@section('content')

  <!-- Style for the Login feature -->
  <link href="{{ asset('css/Login.css') }}" rel="stylesheet">

  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-12">
        
        <div class="card card-signin my-5">
        @foreach ($pubs as $pub)
          <!-- Pub profile -->
            <div class="card-body">
              <h1 class="my-4"> <strong> {{ $pub -> name }} </strong>
                  <small></small>
              </h1>
              <div class="row p-4">
                <div class="col-md-7">
                  <a href="/Pubs/{{ $pub->id }}">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
                  </a>
                </div>
                <div class="col-md-5 text-center">
                  <h2 class="font-italic" >Schedule</h2>
                  <h4>{{ $pub->OpeningTime }} - {{ $pub->ClosingTime }}</h4>
                  <br>
                  <h2 class="font-italic" >Address</h2>
                  <h4>{{ $pub->Adress }}</h4>
                </div>
              </div>
              <a  class="btn btn-lg btn-primary btn-block text-uppercase rounded-pill" role="button" href="/Pubs/{{ $pub->id }}">View {{ $pub -> name }}</a>
              <hr class="my-4">
            </div>
          @endforeach
          </div>
      </div>
    </div>
  </div>
@endsection
