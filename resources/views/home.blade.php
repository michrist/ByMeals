@extends('template')
@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css">
<div class="container-xxl py-5 bg-dark hero-header">
<div class="kotak">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Pencernaan Bayi Berkembang,<br>Mama pun Tenang</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">MKami membantu Anda menjadi kepala koki hebat untuk pelanggan kecil yang sangat spesial</p>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/piring-muter.png" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- About Start -->
<div class="container-xxl py-5">
<div class="container">
    <div class="row g-5 align-items-center">
        <div class="col-lg-6">
            <div class="row g-3">
                <div class="col-6 text-start">
                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/Puree-Alpukat.jpg">
                </div>
                <div class="col-6 text-start">
                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/bayam-jagung.jpeg" style="margin-top: 25%;">
                </div>
                <div class="col-6 text-end">
                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/kentang-salmon.jpg">
                </div>
                <div class="col-6 text-end">
                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/sup-kentang.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
            <h1 class="mb-4">Welcome to ByMeals</h1>
            <p class="mb-4">Temukan ide menu dan resep MPASI dan makanan sehat terbaru untuk sarapan, makan siang, dan makan malam. Menu MPASI kami dipercaya bergizi, mudah dikonsumsi, dan mudah disiapkan. Masing-masing dirancang untuk bayi dibawah satu tahun. Lihat setiap resep untuk tips penyajian, kandungan, dan banyak lagi.</p>
            <div class="row g-4 mb-4">
                <div class="col-sm-6">
                    <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                        <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                        <div class="ps-4">
                            <p class="mb-0">Years of</p>
                            <h6 class="text-uppercase mb-0">Experience</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                        <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                        <div class="ps-4">
                            <p class="mb-0">Popular</p>
                            <h6 class="text-uppercase mb-0">Menus</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- About End -->
{{-- Menu Rekomendasi MPASI --}}
<section>
    <div class="container">
        <h1 class="text-center" >Rekomendasi MP-ASI</h1>
        <p class="text-center mb-4" style="font-size:1.3rem">Berbagai menu MP-ASI untuk si buah hati</p>
        <div class="row">
            @foreach ($menu as $m)
            <div class="col-6">
                <div class="row">
                    <div class="col-6 my-auto">
                        <img width="250px" height="250px" src="{{$m->gambar}}" alt="" style="border-radius: 10px">
                    </div>
                    <div class="col-5">
                        <h3>{{$m->nama}}</h3>
                        <p>{{$m->deskripsi}} </p>
                        <a href="/menu/detail/{{ $m->idmpasi }}" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- Planner --}}
<section>

</section>

{{-- Blog --}}

<!-- Menu Start -->

<!-- Menu End -->


<!-- Reservation Start -->
<div class="container-xxl mt-5 py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
<div class="row g-0">
    <div class="col-md-6">
        <div class="">
            <img height="525px" width="650px"  src="{{asset('img/gambar_planner.jpeg')}}" alt="">
        </div>
    </div>
    <div class="col-md-6 bg-warning d-flex align-items-center">
        <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="" style="color: #000638">
                <h1 class="text-white mb-4">Planner</h1>
                 <h1 class="fw-bold" style="font-size:60px;margin-top:-20px">Best Free Meal Planning App</h1>
            </div>
            <p style="font-size:1.2rem;color:#605C59">Plan your baby’s meals for the week all while barely lifting a finger.</p>
            @Auth
            <a href="/jadwal" class="btn btn-primary" style="background: #FEA116: color:white">Plan yours</a>
            @else
            {{-- <a data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-primary" style="background: #FEA116: color:white">Plan yours</a> --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Plan yours
              </button>
            @endauth
        </div>
    </div>
</div>
</div>

{{-- <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content rounded-0">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- 16:9 aspect ratio -->
            <div class="ratio ratio-16x9">
                <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                    allow="autoplay"></iframe>
            </div>
        </div>
    </div>
</div>
</div> --}}
<section class="" style="margin-bottom: 60px">
    <h1 class="text-center">
        Blog & Artikel
    </h1>
    <p class="text-center  mb-5">Deretan artikel tentang fakta, MP-ASI, dan tips untuk bayi</p>
    <div class="container">
        <div class="row">
            @foreach ($artikel as $a)
            <div class="col-6">
                <img class="mb-3" height="500px" width="532px"  src="{{asset('img/baby-eating.jpg')}}" alt="">
                <a href="/article/{{$a->id}}" class="btn btn-primary" style="background: white;color:black;border:1px solid black">Read More</a>
                <h1>{{$a->title}}</h1>
                <p>
                    {!! Str::limit($a->body, 350) !!}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left:-80px;">
    <div class="modal-dialog" role="document" style="">
      <div class="modal-content" style="width: 700px;border-radius:20px;background:#E5E5E5">
        <div class="modal-header">
          <div class="d-flex justify-content-center">
            <h5 class="modal-title text-center" id="exampleModalLabel" style="margin-left: 57px">Ups, Anda belum masuk</h5>
          </div>

        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center mb-4">
              <a href="/login" class="btn btn-primary">Login</a>

          </div>
          <p class="text-center mx-4">Atau</p>
          <div class="d-flex justify-content-center">
            <a href="/register" class="btn btn-primary mb-4">Register</a>
        </div>
        <p class="text-center" style="font-size: 1.2rem">untuk membuat jadwal  dan simpan wishlist MPASI bayi Anda!</p>
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
