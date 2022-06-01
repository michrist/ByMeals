@extends('template')
@section('container')
<style>
    .card-container {
    padding: 10px 0px;
    -webkit-perspective: 1000;
    perspective: 1000;
}
.profile-card-2 {
    width: 350px;
    background-color: #FFF;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    background-position: center;
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    border-radius: 10px;
}
.profile-card-2 img {
    transition: all linear 0.25s;
}

.profile-card-2 .profile-name {
    position: absolute;
    left: 30px;
    bottom: 70px;
    font-size: 30px;
    color: #FFF;
    text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    font-weight: bold;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-icons {
    position: absolute;
    bottom: 30px;
    right: 30px;
    color: #FFF;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-username {
    position: absolute;
    bottom: 50px;
    left: 30px;
    color: #FFF;
    font-size: 13px;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-icons .fa {
    margin: 5px;
}

.profile-card-2:hover img {
    filter: grayscale(100%);
}

.profile-card-2:hover .profile-name {
    bottom: 80px;
}

.profile-card-2:hover .profile-username {
    bottom: 60px;
}

.profile-card-2:hover .profile-icons {
    right: 40px;
}
::-webkit-input-placeholder {
   text-align: center;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;
}

:-ms-input-placeholder {
   text-align: center;
}
</style>
<div class="text-center mt-5">
    <h1 style="color: #000638; font-size:66px">Hasil Pencarian Menu "{{ $cari }}"</h1>
</div>
<div class="container">
    <div class="row">
        @foreach ($mpasi as $mpasi )
        <div class="col-md-4" onclick="location.href='/menu/detail/{{ $mpasi->idmpasi }}';">
            <div class="profile-card-2"><img src="{{ $mpasi->gambar }}" width="350px" height="350px" class="img img-responsive">
                <div class="profile-name">{{ $mpasi->nama }}</div>
             </div>
        </div>
        @endforeach
    </div>
</div>
@endsection