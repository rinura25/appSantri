@extends('layout.master')
@section('judul')
    List Santri Putri
@endsection
@section('content')

  <a href="/putri/create" class="btn btn-success my-3">Tambah Santri</a>

  <table class="table">
    <thead class="thead-dark" align="center">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Santri</th>
        <th scope="col">Nama Orang Tua</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">Tahun Ajaran</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody align="center">
        @forelse ($putri as $key => $item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->nama_santri}}</td>
                <td>{{$item->nama_orang_tua}}</td>
                <td>{{$item->ttl}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->tahun_ajaran}}</td>
                <td>
                    <form action="/putri/{{$item->id}}" method="POST">
                      @csrf
                      @method('delete')
                      <a href="/putri/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                      <a href="/putri/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
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