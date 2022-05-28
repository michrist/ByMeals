@extends('template')
@section('container')
<div class="container">
    <h1 class="text-center">Saved MP-ASI</h1>
    <p class="text-center">Tambahkan ke jadwal MP-ASI untuk si buah hati</p>
</div>
<div class="container">
    <section class="wrapper">
        <div class="container-fostrap">
            <div class="content">
                <div class="container">
                    <div class="row">
                        @foreach ($favorit as $f )
                        <div class="col-xs-12 col-sm-4">
                            <a href="/menu/detail/{{$f->idmpasi}}" class="">
                                <div class="card1" onclick="location.href='/menu/detail/{{ $f->id }}';">
                                    <a class="img-card" href="/menu/detail/{{$f->idmpasi}}">
                                    <img src="{{ $f->gambar }}" width="300px" />
                                  </a>
                                    <div class="card-content">
                                        <h4 class="card-title">
                                            <a href="/menu/detail/{{$f->idmpasi}}"> {{ $f->nama }}
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
                                              <span style="font-size: 1.25rem;text-transform:capitalize"> {{ $f->waktu }}</span>
                                           </div>
                                       </div>
                                    </div> <br>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection