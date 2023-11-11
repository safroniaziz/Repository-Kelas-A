@extends('layout')
@section('content')
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Manajemen Mahasiswa</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <a href="{{ route('manajemen_mahasiswa.create') }}" class="btn btn-primary">Tambah Data</a>
        @if ($message = Session::get('success'))
          <div class="alert alert-success alert-block" style="margin-top:10px;">
          <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>Berhasil</strong> {{ $message }}
          </div>
        @endif
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NPM Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $index => $mahasiswa)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $mahasiswa->npm }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->prodi }}</td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <form action="{{ route('manajemen_mahasiswa.delete',[$mahasiswa->npm]) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->
@endsection