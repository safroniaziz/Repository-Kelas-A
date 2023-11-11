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
      <form action="{{ route('manajemen_mahasiswa.post') }}" method="POST">
        @csrf @method('POST')
        <div class="box-body">
            <div class="form-group">
                <label>Masukan NPM</label>
                <input type="text" class="form-control" name="npm">
            </div>

            <div class="form-group">
                <label>Masukan Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>

            <div class="form-group">
                <label>Masukan Kelas</label>
                <input type="text" class="form-control" name="kelas">
            </div>

            <div class="form-group">
                <label>Masukan Prodi</label>
                <input type="text" class="form-control" name="prodi">
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="reset" class="btn btn-danger">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <!-- /.box-footer-->
      </form>
    </div>
    <!-- /.box -->
@endsection