@extends('template')
@section('container')

<div class="container-xxl py-5 bg-dark hero-header">
<div class="kotak">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Pencernaan Bayi Berkembang,<br>Mama pun Tenang</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
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
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
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
            <a class="btn btn-primary py-3 px-5 mt-2" href="/menu">Read More</a>
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
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <img width="250px" height="330px" src="{{asset('img/bayam-jagung.jpeg')}}" alt="" style="border-radius: 10px">
                    </div>
                    <div class="col-5">
                        <h3>Crochet Projects for Noodle Lovers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim </p>
                        <div class="row">
                            <div class="col-5" style="font-size: 0.8rem">Wade Warr</div> 
                            <div class="col-7" style="font-size: 0.8rem">12 November 2021</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <img width="250px" height="330px" src="{{asset('img/bayam-jagung.jpeg')}}" alt="" style="border-radius: 10px">
                    </div>
                    <div class="col-5">
                        <h3>Crochet Projects for Noodle Lovers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim </p>
                        <div class="row">
                            <div class="col-5" style="font-size: 0.8rem">Wade Warr</div> 
                            <div class="col-7" style="font-size: 0.8rem">12 November 2021</div>
                        </div>
                    </div>
                </div>
            </div>
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
            <a href="/jadwal" class="btn btn-primary" style="background: #FEA116: color:white">Plan yours</a>
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
            <div class="col-6">
                <img class="mb-3" height="500px" width="532px"  src="{{asset('img/baby-eating.jpg')}}" alt="">
                <a href="" class="btn btn-primary" style="background: white;color:black;border:1px solid black">Read More</a>
                <h1>Why MPASI?</h1>
                <p>
                    The provision of complementary feeding (MPASI) or formula milk is 
                    one of the important periods in the first 1000 days of a child's life. Research shows that 
                    during this transition period, many babies experience growth failure due to poor quality complementary foods. 
                    This period is also a critical moment for your little one to learn to eat.
                </p>
            </div>
            <div class="col-6">
                <img class="mb-3" height="500px" width="532px"  src="{{asset('img/buah_naga.jpg')}}" alt="">
                <a href="" class="btn btn-primary" style="background: white;color:black;border:1px solid black">Read More</a>
                <h1>Why MPASI?</h1>
                <p>
                    The provision of complementary feeding (MPASI) or formula milk is 
                    one of the important periods in the first 1000 days of a child's life. Research shows that 
                    during this transition period, many babies experience growth failure due to poor quality complementary foods. 
                    This period is also a critical moment for your little one to learn to eat.
                </p>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
