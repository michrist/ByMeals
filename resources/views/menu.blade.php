@extends('template')
@section('container')
<style>
h1 {
  font-size: 40px;
  line-height: 0.8em;
  color: #ffb800;}
.made-with {
    background: #000638;
    color: #fff;
    display: block;
    font-size: 12px;
    line-height: 1em;
    margin: 0;
    padding: 5px 110px;
    position: fixed;
    top: 20px;
    right: -100px;
    text-align: center;
    text-decoration: none;
    transform: rotate(45deg);
}
.documentation {
    color: #000638;
}
button:focus,
input:focus,
textarea:focus,
select:focus {
  outline: none; }

.tabs {
  display: block;
  display: -webkit-flex;
  display: -moz-flex;
  display: flex;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0;
  overflow: hidden; }
  .tabs [class^="tab"] label,
  .tabs [class*=" tab"] label {
    color: #efedef;
    cursor: pointer;
    display: block;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1em;
    padding: 1rem 0;
    text-align: center; }
  .tabs [class^="tab"] [type="radio"],
  .tabs [class*=" tab"] [type="radio"] {
    border-bottom: 1px solid rgba(239, 237, 239, 0.5);
    cursor: pointer;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    display: block;
    width: 100%;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out; }
    .tabs [class^="tab"] [type="radio"]:hover, .tabs [class^="tab"] [type="radio"]:focus,
    .tabs [class*=" tab"] [type="radio"]:hover,
    .tabs [class*=" tab"] [type="radio"]:focus {
      border-bottom: 1px solid #000638; }
    .tabs [class^="tab"] [type="radio"]:checked,
    .tabs [class*=" tab"] [type="radio"]:checked {
      border-bottom: 2px solid #000638; }
    .tabs [class^="tab"] [type="radio"]:checked + div,
    .tabs [class*=" tab"] [type="radio"]:checked + div {
      opacity: 1; }
    .tabs [class^="tab"] [type="radio"] + div,
    .tabs [class*=" tab"] [type="radio"] + div {
      display: block;
      opacity: 0;
      padding: 2rem 0;
      width: 90%;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out; }
  .tabs .tab-2 {
    width: 100%; }
    .tabs .tab-2 [type="radio"] + div {
      width: 200%;
      margin-left: 200%; }
    .tabs .tab-2 [type="radio"]:checked + div {
      margin-left: 0; }
    .tabs .tab-2:last-child [type="radio"] + div {
      margin-left: 100%; }
    .tabs .tab-2:last-child [type="radio"]:checked + div {
      margin-left: -100%; }
      $hoverEasing: cubic-bezier(0.23, 1, 0.32, 1);
$returnEasing: cubic-bezier(0.445, 0.05, 0.55, 0.95);
  }
 /*****************
    - Header -
*****************/
header {
	position:relative;
	left:0;
	top:0;
	width:100%;
	min-height:120px;
	padding:50px 0;
	color:#fff;
	    background: #383838 url(https://www.athenadesignstudio.com/plugins/switch/images/bg.jpg) no-repeat center center;
	margin-bottom:30px
}

/* Logo */
header .logo {
	clear:both;
    display:block;
	text-align:center;
    padding-bottom:10px;
}

/* Title */
header h1 {
    font-weight:300;
    font-size:24px;
    color:#eee;
	letter-spacing:2px;
	text-align:center;
	text-transform:uppercase;
	margin:0 !important;
	padding-bottom:25px;
}
@charset "utf-8";
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Open Sans:400,600,800');
h1,
h2,
h3,
h4,
h5,
h6,
div,
input,
p,
a {
    font-family: "Open Sans";
    margin: 0px;
}

a,
a:hover,
a:focus {
    color: inherit;
}

body {
    background-color: #F1F2F3;
}

.container-fluid,
.container {
    max-width: 1200px;
}

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
    <h1 style="color: #000638; font-size:66px">Rekomendasi Menu MP-ASI</h1>
    <h6 class="mt-3" style="font-size:30px; color: #605C59">Berbagai menu MP-ASI untuk si buah hati</h6>
</div>
<div class="input-group container mt-5 d-flex justify-content-center">
    <div class="form-outline" style="width: 30%">
      <input type="search" style="background-color: #FFD600; border-top-left-radius: 15px; border-bottom-left-radius: 15px;" id="form1" class="form-control" placeholder="Pilih MP-ASI Favorit">

    </div>
    <button type="button" class="btn btn-primary" style="background-color: #FFD600; border-top-right-radius: 15px; border-bottom-right-radius: 15px;">
      <i class="fas fa-search" style="color: black"></i>
    </button>
  </div>
{{-- <div class="justify-content-center"> --}}
    {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#jadwal" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Jadwal Makan</button>
        </li>

        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#umur" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Umur Bayi</button>
        </li>
      </ul> --}}


{{-- </div> --}}

<div class="container mt-5">
    <div class="tabs">
        <div class="tab-2">
          <label for="tab2-1" style="color: #ffb800; font-size:30px">Jadwal Makan</label>
          <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
          <div>
            <ul class="nav justify-content-center h-100 w-100" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#all" style="font-size: 20px">All</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#breakfast" style="font-size: 20px">Breakfast</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#lunch" style="font-size: 20px">Lunch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#dinner" style="font-size: 20px">Dinner</a>
                </li>
              </ul>
              <div class="tab-content" >
                <div id="all" class="container tab-pane active"><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        </div>
                    </div>
                <div id="breakfast" class="container tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                    </div>
                  <h3>Menu 1</h3>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="lunch" class="container tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        </div>
                  <h3>Menu 2</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="dinner" class="container tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        </div>
                  <h3>Menu 3</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
              </div>
            </div>

          </div>




          {{-- <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                    <div class="profile-name">JOHN DOE</div>
                    <div class="profile-username">@johndoesurname</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                    <div class="profile-name">JOHN DOE</div>
                    <div class="profile-username">@johndoesurname</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                    <div class="profile-name">JOHN DOE</div>
                    <div class="profile-username">@johndoesurname</div>
                    </div>
                </div>
                </div>
            </div> --}}




        <div class="tab-2">
          <label for="tab2-2" style="color: #ffb800; font-size:30px">Umur Bayi</label>
          <input id="tab2-2" name="tabs-two" type="radio">
          <div>
            <ul class="nav d-flex justify-content-center" role="tablist" >
                <li class="nav-item">
                  <a class="nav-link active" data-bs-toggle="tab" href="#home" style="font-size: 20px">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#menu1" style="font-size: 20px">Menu 1</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#menu2" style="font-size: 20px">Menu 2</a>
                </li>
              </ul>
              <div class="tab-content">
                <div id="home" class="container tab-pane active"><br>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                        <div class="profile-name">JOHN DOE</div>
                        <div class="profile-username">@johndoesurname</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                        <div class="profile-name">JOHN DOE</div>
                        <div class="profile-username">@johndoesurname</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                        <div class="profile-name">JOHN DOE</div>
                        <div class="profile-username">@johndoesurname</div>
                        </div>
                    </div>
                    </div>
                    <h3>Menu Home</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                    </div>
                  <h3>Menu 1</h3>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-card-2"><img src="https://images.unsplash.com/photo-1495615080073-6b89c9839ce0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c3F1YXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" width="350px" height="350px" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="profile-username">@johndoesurname</div>
                            </div>
                        </div>
                        </div>
                  <h3>Menu 2</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
    </div>

<script>
  $('.fa.fa-expand').on("click", function(){
  $('.card').toggleClass("expand");
})

$('.fa.fa-heart').on("click", function(){
  $(this).toggleClass("active");
})
</script>
@endsection
