@extends('../layout/main')

@section('title','Home')

@section('juduldalam')
<div class="card" style="width: 18rem;">
  <img src="{{ Auth::user()->profile_photo_url }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endsection