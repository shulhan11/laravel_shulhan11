@extends('templates.index')
@section('body')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Data Pasien</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
      </div>
    </div>

    <a href="/pasien" class="btn btn-primary">Kembali</a>
    <form action="/pasien" method="POST" class="col-5">
        @csrf
        <div class="mb-3 mt-3">
          <label for="nama" class="form-label">Nama Pasien</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
          @error('nama')
    <div class="invalid-feedback">
      {{ $message }}
  </div>
    @enderror
        </div>
        <div class="mb-3 mt-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control  @error('alamat') is-invalid @enderror" id="alamat" name="alamat">
          @error('alamat')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
          @enderror
        </div>
        <div class="mb-3 mt-3">
          <label for="telepon" class="form-label">No Telepon</label>
          <input type="text" class="form-control  @error('telepon') is-invalid @enderror" id="telepon" name="telepon">
          @error('telepon')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
          @enderror
        </div>
        <div class="mb-3 mt-3">
            <select class="form-select" name="rumahsakit_id" aria-label="Default select example">
                <option selected>Pilih Rumah Sakit</option>
                @foreach ($rumahsakit as $rs)
                <option value="{{ $rs->id }}" name="rumahsakit_id">{{$rs->rumahsakit}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-dark float-end">Submit</button>
      </form>
@endsection