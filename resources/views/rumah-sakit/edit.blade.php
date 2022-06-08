@extends('templates.index')
@section('body')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Data Rumah Sakit</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
      </div>
    </div>

    <a href="/rumahsakit" class="btn btn-primary">Kembali</a>
    <form action="/rumahsakit/{{ $rumahsakit->id }}" method="POST" class="col-5">
        @method('put')
        @csrf
        <div class="mb-3 mt-3">
          <label for="rumahsakit" class="form-label">Rumah Sakit</label>
          <input type="text" class="form-control @error('rumahsakit') is-invalid @enderror" id="rumahsakit" name="rumahsakit" value="{{ $rumahsakit->rumahsakit }}" required>
          @error('rumahsakit')
    <div class="invalid-feedback">
      {{ $message }}
  </div>
    @enderror
        </div>
        <div class="mb-3 mt-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control  @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $rumahsakit->alamat }}" required>
          @error('alamat')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
          @enderror
        </div>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{ $rumahsakit->email }}" required>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
          @enderror
        </div>
        <div class="mb-3 mt-3">
          <label for="telepon" class="form-label">Telepon</label>
          <input type="text" class="form-control  @error('telepon') is-invalid @enderror" id="telepon" name="telepon" value="{{ $rumahsakit->telepon }}" required>
          @error('telepon')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-dark float-end">Submit</button>
      </form>
@endsection