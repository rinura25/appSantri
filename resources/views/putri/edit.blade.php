@extends('layout.master')
@section('judul')
    Halaman Edit Data Santri
@endsection
@section('content')
<form action="/putri/{{$putri->id}}" method="POST">
@csrf
@method('put')
    <div class="form-group">
      <label>Nama Santri</label>
      <input type="text" value="{{$putri->nama_santri}}"class="form-control" name="nama_santri" autofocus>
    </div>
    @error('nama_santri')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
      <label>Nama Orang Tua</label>
      <input type="text" value="{{$putri->nama_orang_tua}}"class="form-control" name="nama_orang_tua" autofocus>
    </div>
    @error('nama_orang_tua')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input type="date" value="{{$putri->ttl}}"class="form-control" name="ttl" autofocus>
    </div>
    @error('ttl')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
      <label>Alamat</label>
      <input type="text" value="{{$putri->alamat}}"class="form-control" name="alamat" autofocus>
    </div>
    @error('alamat')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
      <label>Tahun Ajaran</label>
      <input type="text" value="{{$putri->tahun_ajaran}}"class="form-control" name="tahun_ajaran" autofocus>
    </div>
    @error('tahun_ajaran')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
      <label>Foto KK</label>
      <input type="file" value="{{$putri->kk}}"class="form-control" name="kk" autofocus>
    </div>
    @error('kk')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
@endsection