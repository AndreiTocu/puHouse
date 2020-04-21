@extends('layouts.app')

@section('content')
      <div class="container">
        <div class="card text-white bg-dark  mt-3 m-auto" style="max-width: 60rem;">
          <div class="card-header">SCHEDULE</div>
          <div class="card-body">
            <h5 class="card-title"> {{ $pubProfile->OpeningTime }} - {{ $pubProfile->ClosingTime }} </h5>
          </div>
        </div>
        <div class="card text-white bg-dark mt-3 m-auto" style="max-width: 60rem;">
          <div class="card-header">DESCRIPTION</div>
          <div class="card-body">
            <h5 class="card-title"> {{ $pubProfile->Description }} </h5>
          </div>
        </div>
        <div class="card text-white bg-dark mt-3 m-auto" style="max-width: 60rem;">
          <div class="card-header">ADRESS</div>
          <div class="card-body">
            <h5 class="card-title"> {{ $pubProfile->Adress }} </h5>
          </div>
        </div>
      </div>
      <!-- 5 star rating/review -->
      <div class="container">
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
                  <textarea name="comment" rows="10" cols="70" placeholder="Add a comment with your star rating (optional)"></textarea>
                  <br>
                  <input class="btn btn-success" type="submit" value="Save Review">
              </form>
          </div>
          <div class="card-header">
            <strong>REVIEWS FROM USERS</strong>
          </div>
          @foreach($pubReviews as $pubReview)
            <div class="card mt-4">            
              <div class="card-body text-dark">
                <ul class="list-group">
                  <li class="list-group-item">
                    {{ $pubReview['rating'] }}
                    <span class="badge badge-dark badge-pill">Number of Stars</span>
                  </li>
                  <li class="list-group-item">
                    {{ $pubReview['comment'] }}
                    <span class="badge badge-dark badge-pill">Comment</span>
                  </li>
                </ul>
              </div>
            </div>
          @endforeach
        </div>
      </div>
@endsection
