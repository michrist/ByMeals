@extends('template')
@section('container')
<div class="text-center wow fadeInUp mt-4" data-wow-delay="0.1s">
    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Profile</h5>
    <h1 class="mb-5">Edit Profile</h1>
</div>
<div class="container">
    <form method="POST" action="/user/update/{{ $user->id }}">
        @csrf
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col">
                <h3>Data Ibu</h3>
        <div class="mb-3 col-lg-8 justify-content-center">
          <label for="name" class="form-label">Nama</label>
          <input  type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ $user->name }}">
          @error('title')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3 col-lg-8">
            <label for="date" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"  }}" value="{{ $user->date }}">
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
        <div class="mb-3 col-lg-8">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan"  }}" value="{{ $user->pekerjaan }}">
            @error('pekerjaan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
        <div class="mb-3 col-lg-8">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"  }}" value="{{ $user->alamat }}">
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
            </div>
            <div class="col">
                <h3>Data Bayi</h3>
          <div class="mb-3 col-lg-8 justify-content-center">
            <label for="namebayi" class="form-label">Nama</label>
            <input  type="text" class="form-control @error('namebayi') is-invalid @enderror" id="namebayi" name="namebayi" autofocus value="{{ $user->namebayi }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3 col-lg-8 justify-content-center">
            <label for="date1" class="form-label">Tanggal Lahir</label>
            <input  type="date" class="form-control @error('date1') is-invalid @enderror" id="date1" name="date1" autofocus value="{{ $user->date1 }}">
            @error('date1')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3 col-lg-8 justify-content-center">
            <label for="tinggi" class="form-label">Tinggi Badan (cm)</label>
            <input  type="number" class="form-control @error('tinggi') is-invalid @enderror" id="tinggi" name="tinggi" autofocus value="{{ $user->tinggi }}">
            @error('tinggi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3 col-lg-8 justify-content-center">
            <label for="berat" class="form-label">Berat Lahir (kg)</label>
            <input  type="float" class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat" autofocus value="{{ $user->berat }}">
            @error('berat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3 col-lg-8">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="gender">

                <option value="laki">Laki-laki</option>

                <option value="perempuan">Perempuan</option>

              </select>
        </div>
            </div>
        </div>

        <button type="submit" class="btn btn-warning">Save Profile</button>
        </form>
</div>
@endsection
