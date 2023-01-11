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
                        <h1>Tambah Mahasiswa</h1>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                              <li class="breadcrumb-item active"><a href="/mahasiswa">Mahasiswa</a></li>
                              <li class="breadcrumb-item active"><a>Tambah Mahasiswa</a></li>
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
                                <div class="col-md-12">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Form Mahasiswa</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <form action="{{ route('mahasiswa.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>NIM</label>
                                                            <input name="nim" type="text" class="form-control"
                                                               placeholder="Enter ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input name="nama" type="text" class="form-control"
                                                               placeholder="Enter ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Tempal Lahir</label>
                                                            <input name="tempat_lahir" type="text" class="form-control"
                                                               placeholder="Enter ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Tanggal Lahir</label>
                                                            <input name="tanggal_lahir" type="date" class="form-control"
                                                               placeholder="Enter ...">
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
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <textarea class="form-control" name="alamat"
                                                                id="alamat" type="textarea" class="form-control"
                                                                rows="3"
                                                                placeholder="Enter ..."></textarea>
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
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Katolik">Katolik</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Budha">Budha</option>
                                                                <option value="Konghuchu">Konghuchu</option>
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
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
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
