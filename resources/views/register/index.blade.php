@extends('templates-auth.main')
@section('body')
<main class="form-signin">
    <form action="/register" method="POST">
        @csrf 
     
      <h1 class="h3 mb-3 fw-normal">Register</h1>
  
      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Nama</label>
        @error('name')
        <div class="invalid-feedback">
           {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        @error('email')
        <div class="invalid-feedback">
           {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">username</label>
        @error('username')
        <div class="invalid-feedback">
           {{$message}}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        @error('password')
        <div class="invalid-feedback">
           {{$message}}
        </div>
        @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-2 mb-1 text-muted">punya akun ? langsung <a href="/login" style="text-decoration: none">login</a> Dong</p>
      <p><a href="/" style="text-decoration: none">Kembali</a></p>
      <p class="mt-5 mb-3 text-muted">&copy; 2022-now</p>
    </form>
  </main>
@endsection