@extends('layout/main')
@section('content-main')
<div class="container">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">

    @foreach ($movies as $movie)
    <div class="col">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$movie->original_title}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$movie->title}}</h6>
          <div class="card-text">
            <span><strong>nationality:</strong> {{$movie->nationality}}</span><br />
            <span><strong>vote:</strong> {{$movie->vote}}</span>
            <address>{{$movie->date}}</address>
          </div>
        </div>
      </div>
    </div>
    
    @endforeach
  </div>
</div>
@endsection