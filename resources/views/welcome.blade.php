@extends('layouts.app')

@section('content')

  <style media="screen">
    .carousel-item {
      height: 80vh;
      min-height: 350px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .row {
      margin: 0!important;
    }
  </style>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One -->
      <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1538488881038-e252a119ace7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <!-- Slide Two -->
      <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1049&q=80')">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <!-- Slide Three -->
      <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1572184142990-b237959b616a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
        <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
  <div class="container-marketing m-5">
    <div class="row text-center pt-5">
        <div class="col-lg-12">
          <img  src="/images/pub-icon.png" alt="Generic placeholder image" width="140" height="140">
          <h2 class="pt-2">Pubs & Bars</h2>
          <p>We can help you find the most beautiful and fun place where you and your friends can enjoy a pleasant time together</p>
          <p>
            <a class="btn btn-primary" href="/Pubs">Go to our listed Pubs !</a>
          </p>
        </div><!-- /.col-lg-4 -->
      <!-- Row -->
      <hr>
  </div>
@endsection
