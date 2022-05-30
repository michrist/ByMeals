@extends('template')
@section('container')
<style>
  input[type=checkbox]:checked + label {
  color:black;
  text-decoration: line-through;
}
.custom-control-label:before{
        background-color:#dcdada;
        border: 2px solid black;
    }
.custom-checkbox .custom-control-input:checked~.custom-control-label::before{
        background-color:black;
    }
.custom-checkbox .custom-control-input:checked~.custom-control-label::after{
        background-image:url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23dcdada' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E");
}
@import url(https://fonts.googleapis.com/css?family=Roboto:400,100,900);

html,
body {
  -moz-box-sizing: border-box;
       box-sizing: border-box;
  height: 100%;
  width: 100%;
  background: #FFF;
  font-weight: 400;
}

.wrapper {
  display: table;
  height: 100%;
  width: 100%;
}

.container-fostrap {
  display: table-cell;
  padding: 1em;
  text-align: center;
  vertical-align: middle;
}
.fostrap-logo {
  width: 100px;
  margin-bottom:15px
}
h1.heading {
  color: #fff;
  font-size: 1.15em;
  font-weight: 900;
  margin: 0 0 0.5em;
  color: #505050;
}
@media (min-width: 450px) {
  h1.heading {
    font-size: 3.55em;
  }
}
@media (min-width: 760px) {
  h1.heading {
    font-size: 3.05em;
  }
}
@media (min-width: 900px) {
  h1.heading {
    font-size: 3.25em;
    margin: 0 0 0.3em;
  }
}
.card1 {
  display: block;
    margin-bottom: 20px;
    padding-bottom: 10px
    line-height: 1.42857143;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
    transition: box-shadow .25s;
}
.card1:hover {
  box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.img-card {
  width: 100%;
  height:200px;
  border-top-left-radius:2px;
  border-top-right-radius:2px;
  display:block;
    overflow: hidden;
}
.img-card img{
  width: 100%;
  height: 200px;
  object-fit:cover;
  transition: all .25s ease;
  border-radius: 10px 10px 0 0;
}
.card-content {
  padding:15px;
  text-align:left;
}
.card-title {
  margin-top:0px;
  font-weight: 700;
  font-size: 1.65em;
}
.card-title a {
  color: #000;
  text-decoration: none !important;
}
.card-read-more {
  border-top: 1px solid #D4D4D4;
}
.card-read-more a {
  text-decoration: none !important;
  padding:10px;
  font-weight:600;
  text-transform: uppercase
}
</style>
<div class="container mt-5">
    <div class="row">
        <div class="col-5">
            <img src="{{ $mpasi->gambar }}" width="400px" height="400px">
        </div>
        <div class="col-7" style="margin-top: 17px">
            <h2 style="color: #000638; font-size: 50px">{{ $mpasi->nama }}</h2>
            <div class="row mt-4">
                @php
                    $durasi = preg_split('/---/', $mpasi->durasi);
                @endphp
                <div class="col-1 my-auto text-center">
                    <i class="fas fa-stopwatch" style="color: black; font-size: 25px"></i>
                </div>
                <div class="col-3">
                    <span style="font-size: 20px; color: black">{{ $durasi[0] }}</span> <br>
                    <span style="font-size: 15px; color: black">{{ $durasi[1] }}</span>
                </div>
                <div class="col-1 my-auto text-center">
                    <i class="fas fa-stopwatch" style="color: black; font-size: 25px"></i>
                </div>
                <div class="col-3">
                    <span style="font-size: 20px; color: black">{{ $durasi[2] }}</span> <br>
                    <span style="font-size: 15px; color: black">{{ $durasi[3] }}</span>
                </div>
                <div class="col-1 my-auto text-center">
                    <i class="fas fa-utensils" style="color: black; font-size: 25px"></i>
                </div>
                <div class="col-3 my-auto">
                    <span style="font-size: 20px; color: black">{{ $durasi[4] }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <p class="btn mt-4" style="border-radius: 10px; background-color:#FFD600; color:black; width:200px"><i class="fas fa-baby"></i> <span style="margin-left: 10px">: </span><span style="margin-left: 10px"> 6 Bulan</span></p>
                </div>
                <div class="col-4">
                    <p class="btn mt-4" style="border-radius: 10px; background-color:#FFD600; color:black; width:200px"><i class="fas fa-clock"></i> <span style="margin-left: 10px"> :</span><span style="margin-left: 10px;text-transform:uppercase">{{ $mpasi->waktu }}</span></p>
                </div>
                <div class="col-4">
                 @auth
                 <livewire:favorite-index :idmpasi="$idmpasi"></livewire:favorite-index>
                 @else
                 <button data-toggle="modal" data-target="#exampleModal" class="btn mt-4" style="border-radius: 10px; background-color:#FEA116; color:black; width:140px"><i class="far fa-bookmark"></i> <span style="margin-left: 10px"> Save </span></button>
                 @endauth
                </div>
            </div>
            <p class="mt-3 " style="color: black; font-size: 17px; text-align: justify; margin-right:55px">{{ $mpasi->deskripsi }}</p>
        </div>
    </div>
<div class="row">
    <div class="col-7">
        <p class="mt-5" style="color: black; font-size: 35px; font-weight:bold">Bahan</p>
            <div class="row">
                @php
                    $bahan = preg_split('/---/', $mpasi->bahan);
                    $kuantitas = preg_split('/---/', $mpasi->kuantitas);
                    $prosedur = preg_split('/---/', $mpasi->prosedur);
                    $kandungan = preg_split('/---/', $mpasi->kandungan);
                @endphp
                <div class="col-7">
                    @foreach ($bahan as $b )
                    <input class="form-check-input custom-control-input" type="checkbox" value="checkbox"> <label class="form-check-label custom-control-label" style="margin-left: 10px; color:black; font-size:20px"> {{ $b }} </label><br>
                    @endforeach
                </div>
                <div class="col-1">
                </div>
                <div class="col-4">
                   @foreach ($kuantitas as $k )
                    <label style="color:black; font-size:20px">{{ $k }}</label> <br>
                   @endforeach
                </div>
            </div>
        <p class="mt-5" style="color: black; font-size: 35px; font-weight:bold">Cara Memasak</p>
        @foreach ($prosedur as $p )
        @if ($loop->odd)
        <h4>{{ $p }}</h4>
        @elseif ($loop->even)
        <p class="mt-2" style="font-size: 20px">{{ $p }}</p>
        @endif
        @endforeach
    </div>
    <div class="col-1"></div>
    <div class="col-4 mt-5" >
        <div style="background-color:#FFD600 ; border-radius: 25px; padding: 30px; font-size:14px; color:black">
            <p style="color: black; font-size: 35px; font-weight:bold; text-align:center">Kandungan Gizi</p>
            <ul>
                @foreach ($kandungan as $k )
                @if ($loop->odd)
                <li class="fw-bold fs-5">{{ $k }}</li>
                @elseif ($loop->even)
                <p style="text-align: justify">{{ $k }}</p>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
<p class="mt-5 text-center" style="color: black; font-size: 35px; font-weight:bold">Coba menu MP-ASI yang lain</p>
<div class="container">
    <section class="wrapper">
        <div class="container-fostrap">
            <div class="content">
                <div class="container">
                    <div class="row">
                        @foreach ($menu as $m )
                        <div class="col-xs-12 col-sm-4">
                            <div class="card1" onclick="location.href='/menu/detail/{{ $m->id }}';">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="{{ $m->gambar }}" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="http://www.fostrap.com/2016/02/awesome-material-design-responsive-menu.html"> {{ $m->nama }}
                                      </a>
                                    </h4>
                                </div>
                                <div class="mb-4">
                                   <div class="row">
                                       <div class="col">
                                        <i class="fas fa-stopwatch"></i>
                                           <span style="font-size: 1.25rem"> 30 min</span>
                                       </div>
                                       <div class="col">
                                        <i class="fas fa-utensils"></i>
                                          <span style="font-size: 1.25rem;text-transform:capitalize"> {{ $m->waktu }}</span>
                                       </div>
                                   </div>
                                </div> <br>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<br>
<br>
<br>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left:-80px;">
  <div class="modal-dialog" role="document" style="">
    <div class="modal-content" style="width: 700px;border-radius:20px;background:#E5E5E5">
      <div class="modal-header">