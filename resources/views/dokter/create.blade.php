@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Tambah Data Dokter</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detail data Dokter</div>
                    <div class="card-body">
                        <form action="{{ route('dokter.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan NIK</label>
                                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror">
                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Dokter</label>
                                <select name="id_dokter" class="form-control @error('id_dokter') is-invalid @enderror">
                                    @foreach ($jadwal as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_dokter }}</option>
                                    @endforeach
                                </select>
                                @error('id_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control @error('jk') is-invalid @enderror">
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Nama Spesialis</label>
                                <select name="id_spesialis"
                                    class="form-control @error('id_spesialis') is-invalid @enderror">
                                    @foreach ($spesialis as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_spesialis }}</option>
                                    @endforeach
                                </select>
                                @error('id_spesialis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Alamat</label>
                                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                   ???
