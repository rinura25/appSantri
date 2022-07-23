@extends('layout.master')
@section('judul')
    Tambah Santri
@endsection

@section('content')
    <form action="/putri" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Santri</label>
            <input type="text" class="form-control" name="nama_santri" autofocus value="{{ old('nama_santri') }}">
        </div>

        @error('nama_santri')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Nama Orang Tua</label>
            <input type="text" class="form-control" name="nama_orang_tua" autofocus value="{{ old('nama_orang_tua') }}">
        </div>

        @error('nama_orang_tua')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control" name="ttl" autofocus value="{{ old('ttl') }}">
        </div>

        @error('ttl')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" autofocus value="{{ old('alamat') }}">
        </div>

        @error('alamt')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Tahun Ajaran</label>
            <input type="text" class="form-control" name="tahun_ajaran" autofocus value="{{ old('tahun_ajaran') }}">
        </div>

        @error('tahun_ajaran')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection