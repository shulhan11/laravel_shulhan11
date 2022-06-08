@extends('templates.index')
@section('body')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Rumah sakit</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
      </div>
    </div>

    <a href="/rumahsakit/create" class="btn btn-primary">Add Data</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Rumah Sakit</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">Telepon</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($rumahsakit as $rs)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td >{{ $rs->rumahsakit }}</td>
            <td >{{ $rs->alamat }}</td>
            <td >{{ $rs->email }}</td>
            <td>{{ $rs->telepon }}</td>
            <td>
              <a href="/rumahsakit/{{ $rs->id }}/edit" class="badge text-bg-info" style="text-decoration: none">Edit</a>
              <meta name="csrf-token" content="{{ csrf_token() }}">
              <button class="deleteRecord badge text-bg-danger" data-id="{{ $rs->id }}" >Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection