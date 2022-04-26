<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        {{-- <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1> --}}
        <img src="{{ asset('img/bymeals-logo.png') }}" alt=""> <span class="text-primary m-0" style="font-size: 34px"> ByMeals</span>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">

        @if (Auth::check())
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="/" class="nav-item nav-link {{ ($title === "Home") ? 'active' : '' }}">Home</a>
            <a href="/about" class="nav-item nav-link {{ ($title === "About") ? 'active' : '' }}">About</a>
            {{-- <a href="/blog" class="nav-item nav-link {{ ($title === "Blog") ? 'active' : '' }}">Blog</a> --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ ($title === "Blog") ? 'active' : '' }}" data-bs-toggle="dropdown">Blog</a>
                <div class="dropdown-menu m-0">
                    <a href="/blog" class="dropdown-item">Blog & Articles</a>
                    <a href="/create" class="dropdown-item">Add Post</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Menu</a>
                <div class="dropdown-menu m-0">
                    <a href="booking.html" class="dropdown-item">Booking</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a style="color:white" href="#" class="nav-link dropdown-toggle {{ ($title === "Profile") ? 'active' : '' }}" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
            <div class="dropdown-menu m-0">
                <a href="/user/profile/{{ Auth::id() }}" class="dropdown-item">Profile</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item">Logout</button>
                </form>
            </div>
        </div>
        <a  href="#" class="nav-link" data-bs-toggle="dropdown" style="color: white"><i class="material-icons" style="font-size:36px">person_outline</i></a>
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
        @else <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="/" class="nav-item nav-link {{ ($title === "Home") ? 'active' : '' }}">Home</a>
            <a href="/about" class="nav-item nav-link {{ ($title === "About") ? 'active' : '' }}">About</a>
            {{-- <a href="/blog" class="nav-item nav-link {{ ($title === "Blog") ? 'active' : '' }}">Blog</a> --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ ($title === "Blog") ? 'active' : '' }}" data-bs-toggle="dropdown">Blog</a>
                <div class="dropdown-menu m-0">
                    <a href="/blog" class="dropdown-item">Blog & Articles</a>
                    <a href="/create" class="dropdown-item">New Article</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ ($title === "Menu") ? 'active' : '' }}" data-bs-toggle="dropdown">Menu</a>
                <div class="dropdown-menu m-0">
                    <a href="booking.html" class="dropdown-item">Booking</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                </div>
            </div>
        </div>
        <a href="/login" class="btn btn-primary py-2 px-4">Login</a>
        @endif
    </div>
</nav>
