@extends('template')
@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            {{-- @foreach ($posts as $post ) --}}
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{ $posts -> title }}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted by {{ $posts -> user -> name }}</div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="/categories/{{ $posts -> category -> slug }}">{{ $posts -> category -> name }}</a>
                    @if ( $posts->user_id === Auth::id())
                        <a href="/edit/{{ $posts->id }}" class="badge bg-warning text-decoration-none link-light edit">Edit Post</a>
                    @endif
                    <div class="container">
                    @if(session()->has('success'))
                    <div class="alert alert-success mt-3">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    </div>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="https://source.unsplash.com/900x400?" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4" style="text-align: justify">{!! $posts->body !!}</p>
                </section>
            </article>
            {{-- @endforeach --}}
            <!-- Comments section-->
            <section class="mb-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <!-- Comment form-->
                       @if (Auth::check())
                       <form class="mb-4" method="POST" action="/comment/{{ $posts->id }}">
                        @csrf
                        <textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!" name="comment"></textarea>
                        <button type="submit" class="btn btn-warning mt-3">Post</button>
                        </form>
                        @else
                        <form class="mb-4" method="POST" action="/comment/{{ $posts->id }}">
                            @csrf
                            <textarea readonly class="form-control" rows="3" placeholder="Please login first to join the discussion" name="comment"></textarea>
                            <button type="submit" class="btn btn-warning mt-3">Post</button>
                            </form>
                       @endif
                        <!-- Comment with nested comments-->

                        <div class="d-flex mb-4">
                            <!-- Parent comment-->

                            <h3>Comments</h3>


                        </div>

                        <!-- Single comment-->
                        @foreach ($comments as $comment )
                        <div class="d-flex">
                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                            <div class="ms-3 mb-3">
                                <div class="fw-bold">{{ $comment->user->name }}</div>
                                {{ $comment->comment }}
                            </div>
                        </div>
                        @endforeach

                        {{-- <div class="d-flex">
                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                            <div class="ms-3">
                                <div class="fw-bold">Alfito</div>
                                Mantab
                            </div>
                        </div> --}}

                    </div>
                </div>
            </section>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                @foreach ($categories as $category )
                                <li><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>

@endsection()
