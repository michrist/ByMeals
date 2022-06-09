<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        {{-- <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1> --}}
        <img src="{{ asset('img/bymeals-logo.png') }}" alt=""> <span class="text-primary m-0" style="font-size: 34px">
            ByMeals</span>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">

        @if (Auth::check())
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="/" class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Home</a>

                {{-- <a href="/blog" class="nav-item nav-link {{ ($title === "Blog") ? 'active' : '' }}">Blog</a> --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $title === 'Blog' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu m-0">
                        <a href="/allpost" class="dropdown-item">Blog & Articles</a>
                        <a href="/create" class="dropdown-item">Tambah Post</a>
                    </div>
                </div>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $title === 'Menu' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Menu</a>
                    <div class="dropdown-menu m-0">
                        <a href="/menu" class="dropdown-item">Lihat Menu</a>
                        <a href="{{route('tambahMenu')}}" class="dropdown-item">Tambah Menu</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $title === 'Jadwal' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Jadwal</a>
                    <div class="dropdown-menu m-0">
                        <a href="/report-jadwal" class="dropdown-item">Report Jadwal</a>
                        <a href="/add-jadwal" class="dropdown-item">Tambah Jadwal</a>
                    </div>
                </div>
            </div>
            @if (Auth::user()->image)
            <a href="#" class="nav-link" data-bs-toggle="dropdown" style="color: white"><img style="border-radius: 50%" height="50px" width="50px" src="{{ url('/data_file/'.Auth::user()->image) }}" alt=""></a>
            @else
            <a  href="#" class="nav-link" data-bs-toggle="dropdown" style="color: white"><i class="fas fa-user-circle" style="font-size: 36px"></i></a>
            @endif

            <div class="nav-item dropdown">
                <a style="color:white" href="#"
                    class="nav-link dropdown-toggle {{ $title === 'Profile' ? 'active' : '' }}"
                    data-bs-toggle="dropdown">{{ Auth::user()->username }}</a>
                <div class="dropdown-menu m-0">
                    <a href="/user/profile/{{ Auth::id() }}" class="dropdown-item">Profile</a>
                    <a href="/favorit" class="dropdown-item">Favorit</a>
                    <a data-toggle="modal" data-target="#exampleLogout" class="dropdown-item">Logout</a>
                    {{-- <form action="/logout" method="POST">
                        @csrf
                        <button class="dropdown-item">Logout</button>
                    </form> --}}
                </div>
            </div>

            {{-- <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle btn btn-primary py-2 px-4" data-bs-toggle="dropdown">{{ Auth::user()->name }} </a>
            <div class="dropdown-menu m-0">
                <a href="/user/profile/{{ Auth::id() }}" class="dropdown-item">Profile</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item">Logout</button>
                </form>

            </div>
        </div> --}}
        @else
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="/" class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Home</a>

                {{-- <a href="/blog" class="nav-item nav-link {{ ($title === "Blog") ? 'active' : '' }}">Blog</a> --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $title === 'Blog' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu m-0">
                        <a href="/allpost" class="dropdown-item">Blog & Articles</a>
                        <a data-toggle="modal" data-target="#exampleModal" class="dropdown-item">Tambah Article</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $title === 'Menu' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Menu</a>
                    <div class="dropdown-menu m-0">
                        <a href="/menu" class="dropdown-item">Lihat Menu</a>
                        <a data-toggle="modal" data-target="#exampleModal" class="dropdown-item">Tambah Menu</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $title === 'Jadwal' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Jadwal</a>
                    <div class="dropdown-menu m-0">
                        <a data-toggle="modal" data-target="#exampleModal" class="dropdown-item">Report Jadwal</a>
                        <a data-toggle="modal" data-target="#exampleModal" class="dropdown-item">Tambah Jadwal</a>
                    </div>
                </div>
                {{-- <div class="nav-item dropdown">
                <a href="/menu" class="nav-link nav-item {{ ($title === "Menu") ? 'active' : '' }}" data-bs-toggle="dropdown">Menu</a>
                <div class="dropdown-menu m-0">
                    <a href="booking.html" class="dropdown-item">Booking</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div> --}}
            </div>
            <a href="/login" class="btn btn-primary py-2 px-4">Login</a>
        @endif
    </div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left:-80px;">
    <div class="modal-dialog" role="document" style="">
      <div class="modal-content" style="width: 700px;border-radius:20px;background:#E5E5E5">
        <div class="modal-header">
          <div class="d-flex justify-content-center">
            <h5 class="modal-title text-center" id="exampleModalLabel" style="margin-left: 57px">Ups, Anda belum masuk</h5>
          </div>

        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center mb-4">
              <a href="/login" class="btn btn-primary">Login</a>

          </div>
          <p class="text-center mx-4">Atau</p>
          <div class="d-flex justify-content-center">
            <a href="/register" class="btn btn-primary mb-4">Register</a>
        </div>
        <p class="text-center" style="font-size: 1.2rem">untuk membuat jadwal  dan simpan wishlist MPASI bayi Anda!</p>
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  {{-- Popup Logout --}}
  <div class="modal fade" id="exampleLogout" tabindex="-1" role="dialog" aria-labelledby="exampleLogoutLabel" aria-hidden="true" style="margin-left:-80px;">
    <div class="modal-dialog" role="document" style="">
      <div class="modal-content" style="width: 700px;border-radius:20px;background:#E5E5E5">
        <div class="modal-header">
          <div class="d-flex justify-content-center">
            <h5 class="modal-title text-center" id="exampleModalLabel" style="margin-left: 57px">Apakah Anda Yakin untuk Logout?</h5>
          </div>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center mb-4">
              <div class="row">

                  <div class="col-4">
                  <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-primary">Ya</button>
                </form>
                </div>
                <div class="col-4 mx-3"><a class="btn btn-primary" data-dismiss="modal">Tidak</a></div>

              </div>

          </div>
          {{-- <p class="text-center mx-4">Atau</p>
          <div class="d-flex justify-content-center">
            <a href="/register" class="btn btn-primary mb-4">Register</a>
        </div> --}}
        <p class="text-center" style="font-size: 1.2rem">Anda tidak bisa lagi untuk membuat jadwal  dan simpan wishlist MPASI bayi jika logout</p>
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          {{-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> --}}
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
