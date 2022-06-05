@extends('template')
@section('container')
<style>
    .tab {
  float: left;
  /* border: 1px solid #ccc; */
  /* background-color: #f1f1f1; */
  width: 30%;
  height: 500px;
}
/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}
/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}
/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  width: 70%;
  border-left: none;
  height: 300px;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans:700,300);
.frame {
	position: absolute;
	top: 50%;
	left: 50%;
	width: 800px;
	height: 400px;
	margin-top: -200px;
	margin-left: -200px;
	border-radius: 2px;
	box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
	overflow: hidden;
	/* background: linear-gradient(to top right, darkmagenta 0%, hotpink 100%); */
    background: lightgray;
	color: #333;
	font-family: "Open Sans", Helvetica, sans-serif;
}
.center {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 300px;
	height: 260px;
	border-radius: 3px;
	box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
	background: #fff;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	flex-direction: column;
}
.title {
	width: 100%;
	height: 50px;
	border-bottom: 1px solid #999;
	text-align: center;
}
h1 {
	font-size: 16px;
	font-weight: 300;
	color: #666;
}
.dropzone {
	width: 300px;
	height: 80px;
	border: 1px dashed #999;
	border-radius: 3px;
	text-align: center;
}
.upload-icon {
	margin: 25px 2px 2px 2px;
}
.upload-input {
	position: relative;
	top: -62px;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
}
.btn1 {
	display: block;
	width: 280px;
	height: 40px;
	background: darkmagenta;
	color: #fff;
	border-radius: 3px;
	border: 0;
	box-shadow: 0 3px 0 0 hotpink;
	transition: all 0.3s ease-in-out;
	font-size: 14px;
}
.btn1:hover {
	background: rebeccapurple;
	box-shadow: 0 3px 0 0 deeppink;
}
</style>
{{-- <div class="text-center wow fadeInUp mt-4" data-wow-delay="0.1s">
    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Profile</h5>
    <h1 class="mb-5">Edit Profile</h1>
</div> --}}
{{-- <div class="container">
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
        <button type="submit" class="btn btn-warning mb-3">Save Profile</button>
        </form>
</div> --}}
<div class="tab" style="margin-bottom: 150px; margin-top:40px ">
    <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Mom & Baby Information</button>
    <button hidden class="tablinks" onclick="openCity(event, 'Paris')">Baby Information</button>
    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Profile Photo</button>
  </div>

  <div id="London" class="tabcontent" style="margin-top: 40px">
    @if (session()->has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
     <div class="container">
    <form method="POST" action="/user/update/{{ $user->id }}">
        @csrf
        {{ method_field('PUT') }}
        <div class="row">
            <div class="col">
                <h3>Data Ibu</h3>
        <div class="mb-3 col-lg-8 justify-content-center">
          <label for="name" class="form-label">Nama</label>
          <input  type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ $user->name }}" required>
          @error('title')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3 col-lg-8">
            <label for="date" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ $user->date }}" required>
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
        <div class="mb-3 col-lg-8">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ $user->pekerjaan }}" required>
            @error('pekerjaan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
        <div class="mb-3 col-lg-8">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required value="{{ $user->alamat }}">
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
            <input  type="text" class="form-control @error('namebayi') is-invalid @enderror" id="namebayi" name="namebayi" required autofocus value="{{ $user->namebayi }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3 col-lg-8 justify-content-center">
            <label for="date1" class="form-label">Tanggal Lahir</label>
            <input  type="date" class="form-control @error('date1') is-invalid @enderror" id="date1" name="date1" required autofocus value="{{ $user->date1 }}">
            @error('date1')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3 col-lg-8 justify-content-center">
            <label for="tinggi" class="form-label">Tinggi Badan (cm)</label>
            <input  type="number" class="form-control @error('tinggi') is-invalid @enderror" id="tinggi" name="tinggi" required autofocus value="{{ $user->tinggi }}">
            @error('tinggi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3 col-lg-8 justify-content-center">
            <label for="berat" class="form-label">Berat Lahir (kg)</label>
            <input  type="float" class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat" required autofocus value="{{ $user->berat }}">
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
        <button type="submit" class="btn btn-warning mb-3">Save Profile</button>
        </form>
</div>
  </div>
  <div id="Paris" class="tabcontent" style="margin-top: 40px">
    <h3>Paris</h3>
    <p>Paris is the capital of France.</p>
  </div>
  <div id="Tokyo" class="tabcontent" style="margin-top: 40px">
    <div class="frame" style="margin-top: 100px">
        <div class="center" style="height: 500px;width:500px">
            <div class="title">
                <h1>Upload your profile picture</h1>
            </div>
            {{-- <form action="/user/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            <div class="dropzone">
                <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" id="preview-image"/>
                <input type="file" class="form-control" name="image" />
            </div>
            <button type="button" class="btn btn-warning" name="uploadbutton">Upload file</button>
            </form> --}}
            <form method="POST" enctype="multipart/form-data" id="image-upload-preview" action="/user/update/{{ $user->id }}" >
                @csrf
                {{ method_field('PUT') }}
            <div class="row">
                {{-- <div class="col-md-12">
                    <div class="form-group">
                        <label for="formFile" class="form-label">Pilih Gambar</label>
                        <img src="" alt="" class="img-preview img-fluid col-sm-6">
                        <input class="form-control" class="image" name="image" type="file" id="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div> --}}
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-center">
                            <img src="@if($user->image)
                            {{ url('/data_file/'.Auth::user()->image) }}
                            @endif" alt="Belum ada foto profil" class="img-preview img-fluid col-sm-6">
                        </div> <br>
                        {{-- <label for="formFile" class="form-label">Pilih Gambar</label> --}}
                        <input class="form-control" class="image" name="image" type="file" id="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Update Gambar</button>
                        </div>
                </div>
            </div>


            </div>
        </form>
        </div>
    </div>
    <!-- original pen: https://codepen.io/roydigerhund/pen/ZQdbeN  -->
    <!-- NO JS ADDED YET -->
  </div>
  <script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  </script>
   <script type="text/javascript">
//     $('#image').change(function(){
//     let reader = new FileReader();
//     reader.onload = (e) => {
//       $('#preview-image').attr('src', e.target.result);
//     }
//     reader.readAsDataURL(this.files[0]);
//    });
function previewImage()
        {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
  </script>
@endsection
