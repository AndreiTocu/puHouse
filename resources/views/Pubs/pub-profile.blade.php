@extends('layouts.app')

@section('content')
  <div class="container pt-5">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4 text-center">{{ $pubProfile->name }}</h1>
        <div class="list-group">
          <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">
              <strong>Schedule</strong>
            </div>
            <div class="card-body text-info">
              <h5 class="card-title">{{ $pubProfile->OpeningTime }} - {{ $pubProfile->ClosingTime }}</h5>
            </div>
          </div>
          <div class="card border-info mb-3" style="max-width: 18rem;">
            <div class="card-header">
              <strong>Adress</strong>
            </div>
            <div class="card-body text-info">
              <h5 class="card-title">{{ $pubProfile->Adress }}</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
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
        <!-- Description -->
        <div class="container ">
          <div class="card text-black mt-3 m-auto" style="max-width: 60rem;">
            <div class="card-header text-center">
              <strong>Description</strong>
            </div>
            <div class="card-body">
              <h5 class="card-title"> {{ $pubProfile->Description }} </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- 5 star rating/review -->
  <div class="container pt-3">
    <div class="card text-white bg-dark mt-3 m-auto">
      <div class="card-header">
        <strong>REVIEWS</strong>
      </div>
      <div class="card-body">
        <form action = "{{ route('reviews.store') }}" method="post">
          @csrf
          <input type="hidden" name="pub_id" value="{{ $pubProfile->id }}">
          <label for="rating">
            <strong>Rating</strong>
          </label>
          <br>
          <select name = "rating">
            <option>1</option>
            <option>2</option>
            <option selected>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <br>
          <label for="comment">
            <strong>Comment</strong>
          </label>
          <br>
          <textarea name="comment" rows="5" cols="70" placeholder="Add a comment with your star rating (optional)"></textarea>
          <br>
          <input class="btn btn-success" type="submit" value="Save Review">
        </form>
      </div>
    </div>
  </div>
  <!-- Reviews container -->
  <div class="container pt-4">
    <div class="card text-white bg-dark mt-3 m-auto">
      <div class="container p-2">
        <strong>REVIEWS FROM USERS</strong>
      </div>

      @foreach($pubReviews as $pubReview)
        <?php $pubReviewUser = \App\User::find($pubReview['user_id']) ?>
        <div class="row">
          <div class="col-lg-2 p-4">
            <div class="img-thumbnail">
              <img src="{{URL::asset('/images-users/'.$pubReviewUser->avatar)}}" class="card-img-top" alt="profile picture">
            </div>
            <h5 class="card-title text-center pt-3">{{ $pubReviewUser->name }}</h5>
          </div>
          <div class="col-lg-10">
              <div class="card-body text-dark">
                <ul class="list-group">
                  <label for="starBox"><span class="badge badge-dark badge-pill">Number of Stars</span></label>
                  <li id = "starBox" class="list-group-item">
                    {{ $pubReview['rating'] }}
                  </li>
                  <label for="comBox"><span class="badge badge-dark badge-pill">Comment</span></label>
                  <li id = "comBox"class="list-group-item">
                    {{ $pubReview['comment'] }}
                  </li>
                </ul>
                <div class="pt-2 ml-auto">
                  @if(Auth::check())
                    @if($pubReviewUser->id == Auth::user()->id)
                      <a class="btn btn-danger" href="/DeleteReview/{{ $pubReview['id'] }}" method ="PO">Delete Review</a>
                    @endif
                  @endif
                </div>
              </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
