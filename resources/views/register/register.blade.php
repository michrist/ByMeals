<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="{{ asset('css/regin.css') }}">
    <link rel="icon" href="{{ asset('img/bymeals-logo.png') }}">



    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

<main class="form-registration mb-3">
  <form action="/registration" method="POST">
    @csrf
    <img class="mb-4 rounded" src="img/bymeals-logo.png" alt="" width="150px">
    <h1 class="h3 mb-3 fw-normal">Please Register First</h1>
    <div class="form-floating">
        <input value="{{ old('name') }}" type="text" name="name" class="form-control @error('name')
        is-invalid
        @enderror" id="name">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">
           {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input value="{{ old('username') }}" type="text" name="username" class="form-control @error('username')
        is-invalid
        @enderror" id="username">
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback">
           {{ $message }}
        </div>
        @enderror
      </div>
    <div class="form-floating">
      <input value="{{ old('email') }}" type="email" name="email" class="form-control @error('email')
      is-invalid
      @enderror" id="email" placeholder="name@example.com">
      <label for="email">Email address</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password')
      is-invalid
      @enderror" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>
  </form>
  <small >Already have an account? <a class="mt-3" href="/login">Login</a></small>
</main>



  </body>
</html>

