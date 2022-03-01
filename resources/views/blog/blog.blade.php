@extends('template')
@section('container')
    <div class="text-center wow fadeInUp mt-4" data-wow-delay="0.1s">
        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Blog</h5>
        <h1 class="mb-5">{{ $judul }}</h1>
    </div>
    <div class="container">
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-md-6">
    <form action="/posts" method="GET">

        <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Search" value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
          </div>
    </form>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
{{-- @foreach ($posts as $post ) --}}
@if ($posts->count())
<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?" class="card-img-top" alt="...">
    <div class="card-body text-center">
    <h3 class="card-title"><a class="text-decoration-none text-dark" href="">{{ $posts[0]-> title }}</a></h3>
    <p>By <a class="text-decoration-none" href="/user/{{ $posts[0]->user->username }}">{{ $posts[0]->user->username }}</a> in <a  class="text-decoration-none" href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></p>
    <p class="card-text">{!! Str::limit($posts[0]->body, 150) !!}</p>
    <p class="card-text"><small class="text-muted">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
    <a href="/article/{{ $posts[0]->id }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
</div>
{{-- @endforeach --}}
<div class="row">
    @foreach ($posts->skip(1) as $post )
    <div class="col-md-4 mb-5">
        <div class="card">
            <div class="position-absolute bg-dark p-2 "><a class="text-decoration-none text-white" href="">{{ $post->category->name }}</a></div>
            <img src="https://source.unsplash.com/500x400?" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p>By <a class="text-decoration-none" href="">{{ $post->user->username }}</a></p>
            <p class="card-text">{!! Str::limit($post->body, 150) !!}</p>
            <a href="/article/{{ $post->id }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
@endforeach
</div>

    </div>
</div>
@else
<p class="text-center fs-4">No Post Found</p>
@endif
@if (Auth::check())
<a href="/create" class="btn btn-warning">Add Post</a>
@endif

@endsection
