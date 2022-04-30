@extends('template')
@section('container')
{{-- <table>
    <tr>
        <th>nama</th>
        <th>age</th>
        <th>bahan</th>
        <th>kandungan</th>
        <th>manfaat</th>
        <th>prosedur</th>
        <th>kategori</th>
    </tr>
    @foreach ($mpasi as $m)
    <tr>
        <td>{{$m->nama}}</td>
        <td>{{$m->age}}</td>
        <td>{{$m->bahan}}</td>
        <td>{{$m->kandungan}}</td>
        <td>{{$m->manfaat}}</td>
        <td>{{$m->prosedur}}</td>
        <td>{{$m->kategori}}</td>
    </tr>
    @endforeach
</table>
<br>
<br>
<br>
<br> --}}
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <hr>
            <div class="profile-card-2"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-2.jpg" class="img img-responsive">
            <div class="profile-name">JOHN DOE</div>
            <div class="profile-username">@johndoesurname</div>
            <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
            </div>
        </div>
        <div class="col-md-6">
        <hr>
            <div class="profile-card-2"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-2.jpg" class="img img-responsive">
            <div class="profile-name">JOHN DOE</div>
            <div class="profile-username">@johndoesurname</div>
            <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
            </div>
        </div>
        <div class="col-md-6">
        <hr>
            <div class="profile-card-2"><img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-2.jpg" class="img img-responsive">
            <div class="profile-name">JOHN DOE</div>
            <div class="profile-username">@johndoesurname</div>
            <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
            </div>
        </div>
        <div class="col-2 d-flex justify-content-end">
            <livewire:favorite-inde></livewire:favorite-inde>
        </div>
        </div>
    </div>
</div>
@endsection
