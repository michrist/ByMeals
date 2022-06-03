@extends('template')
@section('container')

@if ($check == null)
<div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin:50px">
    <strong>Holy {{ Auth::user()->name }} ! </strong> anda belum memiliki jadwal buat sekarang
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="d-grid gap-2 col-6 mx-auto" style="padding-bottom:50px">
    <a href="/add-jadwal" class="btn btn-primary me-md-2" type="button">Buat Jadwal</a>
</div>
@else
<div class="row mb-lg-2">
    <center>
        <h2>Pilih Tanggal : </h2>
        <form action="/report-jadwal" method="POST">
            @csrf
            <select name="tanggalJadwal" id="tanggalJadwal">
                @foreach ($schedules as $s)
                <option value="{{$s->id}}">{{$s->tanggal}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Lihat Jadwal</button>
        </form>
    </center>
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="card-group col-10">
        <div class="col-lg-4 mb-lg-4">
            <center>
                <div class="card" style="width: 19rem;">
                    <img class="card-img" src="{{$menuPagi->gambar}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$menuPagi->nama}}</h5>
                        <p class="card-text">{{Str::limit($menuPagi->deskripsi, 100)}}</p>
                        <a href="{{route('detailMenu', $menuPagi->idmpasi)}}" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </center>
        </div>

        <div class="col-lg-4 mb-lg-4">
            <center>
                <div class="card" style="width: 19rem;">
                    <img class="card-img-top" src="{{$menuSiang->gambar}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$menuSiang->nama}}</h5>
                        <p class="card-text" >{{Str::limit($menuSiang->deskripsi, 100)}}</p>
                        <a href="{{route('detailMenu', $menuSiang->idmpasi)}}" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </center>
        </div>

        <div class="col-lg-4 mb-lg-4">
            <center>
                <div class="card" style="width: 19rem;">
                    <img class="card-img-top" src="{{$menuMalam->gambar}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$menuMalam->nama}}e</h5>
                        <p class="card-text">{{Str::limit($menuMalam->deskripsi, 100)}}</p>
                        <a href="{{route('detailMenu', $menuMalam->idmpasi)}}" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
    <div class="col-1"></div>
</div>
<div class="row">
    <h3 style="text-align: center">Aksi : </h3>
</div>
<div class="row">
    <div class="col-3"></div>
    <div class="col-3 mb-lg-3">
        <center>
            <a href="{{route('editJadwal', $menuPagi->id)}}"><button class="btn btn-info">Edit Jadwal</button></a>
        </center>
    </div>
    <div class="col-3">
        <center>
            <a href="{{route('hapusJadwal', $menuPagi->id)}}"><button class="btn btn-warning">Hapus Jadwal</button></a>
        </center>
    </div>
    <div class="col-3"></div>
</div>

@endif
@endsection
