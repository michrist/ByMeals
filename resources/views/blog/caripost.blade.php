@extends('template')
@section('container')
<style>
.title {

 margin-bottom: 50px;
 text-transform: uppercase;
}

.card-block {
 font-size: 1em;
 position: relative;
 margin: 0;
 padding: 1em;
 border: none;
 border-top: 1px solid rgba(34, 36, 38, .1);
 box-shadow: none;

}
.card {
 font-size: 1em;
 overflow: hidden;
 height: 350px;
 border: none;
 border-radius: .28571429rem;
 box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
 margin-top:20px;
}

.carousel-indicators li {
 border-radius: 12px;
 width: 12px;
 height: 12px;
 background-color: #404040;
}
.carousel-indicators li {
 border-radius: 12px;
 width: 12px;
 height: 12px;
 background-color: #404040;
}
.carousel-indicators .active {
 background-color: white;
 max-width: 12px;
 margin: 0 3px;
 height: 12px;
}
.carousel-control-prev-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}
lex-direction: column;


.btn {
margin-top: auto;
}
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card1 {
  margin: 30px auto;
  width: 100px;
  height: 100px;
  border-radius: 40px;
box-shadow: 5px 5px 6px 4px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card1 .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;
}

.card1 .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card1 .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 20px;
  margin-top: -80px;
  height: 40px;
  color: black
}

.card1:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25),
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}


/*
.card {
  margin: 30px auto;
  width: 300px;
  height: 300px;
  border-radius: 40px;
  background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-repeat: no-repeat;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  transition: 0.4s;
}
*/
</style>
<div class="text-center wow fadeInUp mt-4" data-wow-delay="0.1s">
    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Blog</h5>
    <h1 class="mb-3">Hasil Pencarian Blog & Artikel tentang {{ $cari }}</h1>
</div>
@if (session()->has('successs'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container mb-4">
    <!-- Card Start -->
    @foreach ($posts as $post )
    <div class="card">
      <div class="row ">
        <!-- Carousel start -->
        <div class="col-md-5">
          <div id="CarouselTest" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                @if(count((array)$post->image_upload))
                <figure><img class="d-block" src="{{ url('/data_file/'.$post->image_upload) }}" alt="" width="400px"></figure>
                @else
                <figure><img class="d-block" src="{{ $post->image }}" alt="" style="height: 350px" ></figure>
                @endif

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 px-3">
            <div class="card-block px-6">
              <h4 class="card-title">{{ $post->title }}</h4>
              <p class="card-text">
                {!! Str::limit($post->body, 300) !!}
              </p>
              <br>
              <a href="/article/{{ $post->id }}" class="mt-auto btn btn-primary" wire:click="getComment({{ $post->id }})">Read More</a>
            </div>
          </div>
        <!-- End of carousel -->
      </div>
    </div>
    @endforeach

    {{-- {{$posts->links()}} --}}
    <!-- End of card -->

  </div>
@endsection()