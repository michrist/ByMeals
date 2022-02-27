@extends('template')
@section('container')
<div class="text-center wow fadeInUp mt-4" data-wow-delay="0.1s">
    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Blog</h5>
    <h1 class="mb-5">All Categories</h1>
</div>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category )
            <div class="col-md-4">
                <a href="/categories/{{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400?" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill p-3 fs-3" style="background-color: white">{{ $category -> name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
