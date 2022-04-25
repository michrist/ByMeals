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
 padding: 5;
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
}

.btn {
margin-top: auto;
}
</style>
<div class="text-center wow fadeInUp mt-4" data-wow-delay="0.1s">
    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Blog</h5>
    <h1 class="mb-5">Blog & Artikel</h1>
</div>
<div class="container">
    <h3>Categories</h3>
    <p>Pilih artikel berdasarkan kategori</p>
</div>
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
                <img class="d-block" src="https://picsum.photos/450/300?image=1072" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 px-3">
            <div class="card-block px-6">
              <h4 class="card-title">{{ $post->title }}</h4>
              <p class="card-text">
                {!! Str::limit($post->body, 250) !!}
              </p>
              <br>
              <a href="/article/{{ $post->id }}" class="mt-auto btn btn-primary  ">Read More</a>
            </div>
          </div>
        <!-- End of carousel -->
      </div>
    </div>
    @endforeach
    <!-- End of card -->

  </div>
@endsection()
