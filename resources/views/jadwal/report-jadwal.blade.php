@extends('template')
@section('css')
    <link href="css/jadwal/report.css" rel="stylesheet">
@endsection
@section('container')
    @if ($check == null)
        <div class="container null">
            <div class="col-auto">
                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin:50px">
                    <strong>Hallo {{ Auth::user()->name }} ! </strong> anda belum memiliki jadwal, buat sekarang
                </div>
            </div>
            <div class="col-auto">
                <div class="d-grid gap-2 col-6 mx-auto btn-add">
                    <a href="/add-jadwal" class="btn btn-primary me-md-2 btn-end" type="button">Buat Jadwal</a>
                </div>
            </div>

        </div>
    @else
        <div class="container option">
            <div class="title">
                <p class="h1">Report Jadwal</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-6">

                    <form action="/report-jadwal" method="POST" class="row g-3">
                        @csrf
                        <div class="col-auto">
                            <label for="tanggalJadwal" class="col-form-label">Pilih Tanggal :</label>
                        </div>
                        <div class="col-auto">
                            <select name="tanggalJadwal" id="tanggalJadwal" class="form-select">
                                @foreach ($schedules as $s)
                                    <option value="{{ $s->id }}">{{ $s->tanggal }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-lihat">Lihat Jadwal</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('editJadwal', $menuPagi->id) }}" class="btn btn-warning me-md-2"
                            type="button">Edit</a>
                        <a href="{{ route('hapusJadwal', $menuPagi->id) }}" class="btn btn-danger" type="button">Hapus
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <section class="card-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card card-report">
                            <img class="card-img-top" src="{{ $menuPagi->gambar }}" alt="Card image cap">
                            <div class="card-body">
                                <h4>{{ $menuPagi->nama }}</h4>
                                <p class="card-text">{{ Str::limit($menuPagi->deskripsi, 75) }}</p>
                                <a href="{{ route('detailMenu', $menuPagi->idmpasi) }}"
                                    class="btn btn-primary btn-sm">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card card-report">
                            <img class="card-img-top" src="{{ $menuSiang->gambar }}" alt="Card image cap">
                            <div class="card-body">
                                <h4>{{ $menuSiang->nama }}</h4>
                                <p class="card-text">{{ Str::limit($menuSiang->deskripsi, 75) }}</p>
                                <a href="{{ route('detailMenu', $menuSiang->idmpasi) }}"
                                    class="btn btn-primary btn-sm">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 crd">
                        <div class="card card-report">
                            <img class="card-img-top" src="{{ $menuMalam->gambar }}" alt="Card image cap">
                            <div class="card-body">
                                <h4>{{ $menuMalam->nama }}</h4>
                                <p class="card-text">{{ Str::limit($menuMalam->deskripsi, 75) }}</p>
                                <a href="{{ route('detailMenu', $menuMalam->idmpasi) }}"
                                    class="btn btn-primary btn-sm">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
