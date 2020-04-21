@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-header">
              <h1>
                <strong>PUBS</strong>
              </h1>
          </div>
          @foreach ($pubs as $pub)
            <div class="card mt-4">
              <div class="card-header">
                <a href="/Pubs/{{ $pub->id }}"> <strong> {{ $pub -> name }} </strong> </a>
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item">
                    {{ $pub -> OpeningTime }} - {{ $pub -> ClosingTime }}
                    <span class="badge badge-dark badge-pill">Schedule</span>
                  </li>
                  <li class="list-group-item">
                    {{ $pub -> Adress }}
                    <span class="badge badge-dark badge-pill">Adress</span>
                  </li>
                  <li class="list-group-item">
                    {{ $pub -> Description }}
                    <span class="badge badge-dark badge-pill">Description</span>
                  </li>
                </ul>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>
@endsection
