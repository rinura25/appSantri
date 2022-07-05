@extends('layout.master')
@section('judul')
    List Santri Putri
@endsection
@section('content')

  <a href="/putra/create" class="btn btn-success my-3">Tambah Santri</a>

  <table class="table">
    <thead class="thead-dark" align="center">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Santri</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tahun Ajaran</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody align="center">
        @forelse ($putra as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->nama_santri}}</td>
                <td>{{$item->ttl}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->tahun_ajaran}}</td>
                <td>
                    <form action="/putra/{{$item->id}}" method="POST">
                      @csrf
                      @method('delete')
                      <a href="/putra/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                      <a href="/putra/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                      <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <h1>Data Kosong</h1>
        @endforelse
    </tbody>
  </table>
@endsection