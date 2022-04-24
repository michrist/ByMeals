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
    padding: 2rem 0;
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
    width: 50%; }
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
  @import url('https://fonts.googleapis.com/css?family=Roboto');

body {
  background-color: #2C3A47;
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Roboto', sans-serif;
  height: 100vh;
  margin: 0;
  padding: 0;
}

.container1 {
  position: relative;
  height: 500px;
  width: 500px;
  overflow: hidden;
  box-shadow: 0px 2px 5px rgba(0,0,0,0.3);
  transition: box-shadow 0.3s ease-out;
}

.container1:hover {
  box-shadow: 1px 2px 10px rgba(0,0,0,0.5);
}

.img-container1 {
  background-color: #000;
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  transition: transform 0.3s ease-out;
  z-index: 2;
}

.img-container1:hover {
	cursor: pointer;
}

.container1:hover .img-container1 {
	transform: translateY(-100px);
}

.img-container1 > img {
  height: 100%;
  width: 100%;
  transition: opacity 0.3s ease-out;
}

.container1:hover > .img-container1 > img {
  opacity: 0.5;
}

.social-media {
  display: flex;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  z-index: 3;
  margin: 0;
  padding: 0;
}

.social-media > li {
  list-style: none;
}

.social-media > li > a {
  display: block;
  height: 50px;
  width: 50px;
  background-color: #FFF;
  text-align: center;
  color: #262626;
  margin: 0 5px;
  border-radius: 50%;
  opacity: 0;
  transform: translateY(200px);
  transition: all 0.3s ease-out;
}

.container1:hover > .social-media > li > a {
  transform: translateY(0);
  opacity: 1;
}

.social-media > li > a > .fa {
  font-size: 24px;
  line-height: 50px;
  transition: transform 0.3s ease-out;
}

.social-media > li > a:hover > .fa {
  transform: rotateY(360deg);
}

.container1:hover .social-media li:nth-child(1) a {
	transition-delay: 0s;
}

.container1:hover .social-media li:nth-child(2) a {
	transition-delay: 0.1s;
}

.container1:hover .social-media li:nth-child(3) a {
	transition-delay: 0.2s;
}

.container1:hover .social-media li:nth-child(4) a {
	transition-delay: 0.3s;
}

.container1:hover .social-media li:nth-child(5) a {
	transition-delay: 0.4s;
}

.user-info {
  position: absolute;
	bottom: 0;
	left: 0;
	background-color: #FFF;
	height: 100px;
	width: 100%;
	box-sizing: border-box;
	padding: 10px;
  text-align: center
}

.user-info > h2 {
  padding: 0;
  margin: 10px 0;
}

.user-info > span {
  color: #262626;
  font-size: 16px;
}
}


</style>
<div class="text-center mt-4">
    <h1 style="color: #000638">Rekomendasi Menu MP-ASI</h1>
    <h6>Berbagai menu MP-ASI untuk si buah hati</h6>
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

<div class="container">
    <div class="tabs">
        <div class="tab-2">
          <label for="tab2-1" style="color: #ffb800">Jadwal Makan</label>
          <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
        <div class="container" style="margin-left: 500px">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                </li>
              </ul>
        </div>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
          </div>
          {{-- <div class="container ">
              <div class="row justify-content center">
                  <div class="col">
                    <div class="container1">
                        <div class="img-container1">
                          <img src="https://images.unsplash.com/photo-1534809027769-b00d750a6bac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" alt="">
                        </div>
                        <ul class="social-media">
                                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                              </ul>
                              <div class="user-info">
                                  <h2>Aniket Singh</h2>
                            <span>20-july</span>
                              </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="container1">
                        <div class="img-container1">
                          <img src="https://images.unsplash.com/photo-1534809027769-b00d750a6bac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" alt="">
                        </div>
                        <ul class="social-media">
                                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                              <div class="user-info">
                                  <h2>Aniket Singh</h2>
                            <span>20-july</span>
                              </div>
                      </div>
                  </div>
                  <div class="col mt-4">
                    <div class="container1">
                        <div class="img-container1">
                          <img src="https://images.unsplash.com/photo-1534809027769-b00d750a6bac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1534&q=80" alt="">
                        </div>
                        <ul class="social-media">
                                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                              </ul>
                              <div class="user-info">
                                  <h2>Aniket Singh</h2>
                            <span>20-july</span>
                              </div>
                      </div>
                  </div>
              </div>
          </div> --}}
        </div>
        <div class="tab-2">
          <label for="tab2-2" style="color: #ffb800">Umur Bayi</label>
          <input id="tab2-2" name="tabs-two" type="radio">
          <div>
            <h4>Tab Two</h4>
            <p>Quisque sit amet turpis leo. Maecenas sed dolor mi. Pellentesque varius elit in neque ornare commodo ac non tellus. Mauris id iaculis quam. Donec eu felis quam. Morbi tristique lorem eget iaculis consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tellus eget risus tempus ultrices. Nam condimentum nisi enim, scelerisque faucibus lectus sodales at.</p>
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
