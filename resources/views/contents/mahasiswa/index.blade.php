@extends('app')
@section("head")
@include('layouts.head')
@endsection
@section("script")
@include('layouts.script')
@endsection
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<div class="card ml-3 mt-3 mr-3 mb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card card-info card-outline">
                </div>
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h1>Mahasiswa</h1>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                              <li class="breadcrumb-item active"><a>Mahasiswa</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <!-- Button trigger for primary themes modal -->
                    <a class="btn btn-outline-primary" href="{{ route('mahasiswa.create') }}">
                        + Tambah Mahasiswa
                    </a>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-info">
                                    <th class="text-center" style="vertical-align: middle;">No</th>
                                    <th class="text-center" style="vertical-align: middle;">NIM</th>
                                    <th class="text-center" style="vertical-align: middle;">Nama</th>
                                    <th class="text-center" style="vertical-align: middle;">Tempat Lahir</th>
                                    <th class="text-center" style="vertical-align: middle;">Tanggal Lahir</th>
                                    <th class="text-center" style="vertical-align: middle;">Jenis Kelamin</th>
                                    <th class="text-center" style="vertical-align: middle;">Alamat</th>
                                    <th class="text-center" style="vertical-align: middle;">Agama</th>
                                    <th class="text-center" style="vertical-align: middle;">Aksi</th>
                                    {{-- <th class="text-center" style="vertical-align: middle;">Aksi</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Mahasiswa as $m)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}} </td>
                                    <td class="text-center">{{$m->nim}} </td>
                                    <td class="text-center">{{$m->nama}} </td>
                                    <td class="text-center">{{$m->tempat_lahir}} </td>
                                    <td class="text-center">{{$m->tanggal_lahir}} </td>
                                    <td class="text-center">{{$m->jenis_kelamin}} </td>
                                    <td class="text-center">{{$m->alamat}} </td>
                                    <td class="text-center">{{$m->agama}} </td>
                                    <td class="text-center">
                                        <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST">
                                            <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-warning"><i
                                                    class="fa fa-edit"></i> Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Anda Yakin Data dihapus?')"
                                                class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script_tambahan')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        // DataTable
        var table = $('#myTable').DataTable({

            initComplete: function () {
                var r = $('#myTable tfoot tr');
                r.find('th').each(function () {
                    $(this).css('padding', 8);
                });
                $('#myTable thead').append(r);
                $('#search_0').css('text-align', 'center');
                // Apply the search
                this.api()
                    .columns()
                    .every(function () {
                        var that = this;

                        $('input', this.footer()).on('keyup change clear', function () {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
            },
        });
    });

</script>
  @endsection
  @section('script_tambahan')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        // DataTable
        var table = $('#myTable').DataTable({

            initComplete: function () {
                var r = $('#myTable tfoot tr');
                r.find('th').each(function () {
                    $(this).css('padding', 8);
                });
                $('#myTable thead').append(r);
                $('#search_0').css('text-align', 'center');
                // Apply the search
                this.api()
                    .columns()
                    .every(function () {
                        var that = this;

                        $('input', this.footer()).on('keyup change clear', function () {
                            if (that.search() !== this.value) {
                                that.search(this.value).draw();
                            }
                        });
                    });
            },
        });
    });

</script>
  @endsection
