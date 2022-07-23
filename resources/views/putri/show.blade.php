@extends('layout.master')
@section('judul')
    Halaman Detail Santri
@endsection

@section('content')
    <div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Santri</label>
                    <input type="text" class="form-control" name="nama_santri" value="{{$putri->nama_santri}}" readonly>
                </div>
                <div class="form-group">
                    <label>Nama Orang Tua</label>
                    <input type="text" class="form-control" name="nama_santri" value="{{$putri->nama_orang_tua}}" readonly>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control" name="nama_santri" value="{{$putri->ttl}}" readonly>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="nama_santri" value="{{$putri->alamat}}" readonly>
                </div>
                <div class="form-group">
                    <label>Tahun Ajaran</label>
                    <input type="text" class="form-control" name="nama_santri" value="{{$putri->tahun_ajaran}}" readonly>
                </div>
                <a href="/putri" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection