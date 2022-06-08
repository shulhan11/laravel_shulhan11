@extends('templates.index')
@section('body')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Pasien</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
      </div>
    </div>

    <a href="/pasien/create" class="btn btn-primary">Add Data</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Alamat</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Rumah Sakit</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pasien as $ps)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ps->nama }}</td>
                <td>{{ $ps->alamat }}</td>
                <td>{{ $ps->telepon }}</td>
                <td>{{ $ps->rumahsakit->rumahsakit }}</td>
                <td>
                  <a href="/pasien/{{ $ps->id }}/edit" class="badge text-bg-info" style="text-decoration: none">Edit</a>
                  <meta name="csrf-token" content="{{ csrf_token() }}">
                  <button class="deleteRecordd badge text-bg-danger" data-id="{{ $ps->id }}" >Delete</button>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
@endsection