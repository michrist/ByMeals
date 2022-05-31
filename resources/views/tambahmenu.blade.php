@extends('template')
@section('container')
@if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
@endif

<div class="container mb-2">
    <form action="/tambah-menu" method="POST">
        @csrf
        <div class="col-12 m-2">
            <div class="row">
                <label for="namaMenu" class="col-3">Nama Menu</label>
                <input type="text" class="form-control" id="namaMenu" placeholder="Masukkan nama menu..." class="col-9" name="namaMenu">
            </div>
        </div>
        <div class="col-12 m-2">
            <div class="row">
                <label for="deskripsi" class="col-3">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" class="col-9" name="deskripsi">Masukkan deskripsi menu...</textarea>
            </div>
        </div>
        <div class="col-12 m-2">
            <div class="row">
                <label for="umurBayi" class="col-3">Untuk Bayi dengan Umur</label>
                <input type="number" class="form-control" id="umurBayi" placeholder="Masukkan umur bayi..." class="col-9" name="umurBayi">
            </div>
        </div>
        <div class="col-12 m-2">
            <div class="row">
                <label for="bahan" class="col-3">Bahan Menu</label>
                <textarea class="form-control" id="bahan" class="col-9" name="bahan">Masukkan bahan menu...</textarea>
            </div>
        </div>
        <div class="col-12 m-2">
            <div class="row">
                <label for="langkah" class="col-3">Langkah Memasak</label>
                <textarea class="form-control" id="langkah" class="col-9" name="langkah">Masukkan langkah memasak menu...</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary rounded-2">Tambah</button>
    </form>
</div>

@endsection
