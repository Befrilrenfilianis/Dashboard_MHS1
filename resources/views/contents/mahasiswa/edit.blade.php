@extends('app')
@section("head")
@include('layouts.head')
@endsection
@section("script")
@include('layouts.script')
@endsection
@section('content')
<div class="card ml-3 mt-3 mr-3 mb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-info card-outline">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h1>Edit Mahasiswa</h1>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active"><a href="/mahasiswa">Mahasiswa</a></li>
                                <li class="breadcrumb-item active"><a>Edit Mahasiswa</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-info">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-body">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Form Mahasiswa</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <form action="{{ route('mahasiswa.update', $Mahasiswa->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>NIM</label>
                                                        <input name="nim" type="text" value="{{ $Mahasiswa->nim }}"
                                                            class="form-control" placeholder="Enter ...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Tempal Lahir</label>
                                                        <input name="tempat_lahir"
                                                            value="{{ $Mahasiswa->tempat_lahir }}" type="text"
                                                            class="form-control" placeholder="Enter ...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Tanggal Lahir</label>
                                                        <input name="tanggal_lahir"
                                                            value="{{ $Mahasiswa->tanggal_lahir }}" type="date"
                                                            class="form-control" placeholder="Enter ...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- text input -->
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input name="nama" value="{{ $Mahasiswa->nama }}" type="text"
                                                            class="form-control" placeholder="Enter ...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <select class="form-control" name="jenis_kelamin">
                                                            <option value="">---Pilih---</option>
                                                            <option value="Laki-laki" {{ $Mahasiswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                            <option value="Perempuan" {{ $Mahasiswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <textarea class="form-control" name="alamat" id="alamat"
                                                            type="textarea" class="form-control" rows="3"
                                                            placeholder="Enter ...">{{ $Mahasiswa->alamat }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label>Agama</label>
                                                        <select class="form-control" name="agama">
                                                            <option value="">---Pilih---</option>
                                                            <option value="Islam" {{ $Mahasiswa->agama == 'Islam' ? 'selected' : '' }} >Islam</option>
                                                            <option value="Kristen" {{ $Mahasiswa->agama == 'Kristen' ? 'selected' : '' }} >Kristen</option>
                                                            <option value="Katolik" {{ $Mahasiswa->agama == 'Katolik' ? 'selected' : '' }} >Katolik</option>
                                                            <option value="Hindu" {{ $Mahasiswa->agama == 'Hindu' ? 'selected' : '' }} >Hindu</option>
                                                            <option value="Budha" {{ $Mahasiswa->agama == 'Budha' ? 'selected' : '' }} >Budha</option>
                                                            <option value="Konghuchu" {{ $Mahasiswa->agama == 'Konghuchu' ? 'selected' : '' }} >Konghuchu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
