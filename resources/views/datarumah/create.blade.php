@extends('layouts.template')
@section('judulh1',' - Anggota')

@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Rumah</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('datarumah.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class=" card-body">
            <div class="form-group">
              <div class="mb-3">
                <label for="alamat" class="form-label">alamat </label>
                <input type="text" class="form-control" id="alamat" name="alamat">
              </div>
              <div class="mb-3">
                <label for="kota" class="form-label">kota</label>
                <input type="text" class="form-control" id="kota" name="kota">
              </div>
              <div class="mb-3">
                <label for="amount" class="form-label">harga</label>
                <input type="double" class="form-control" id="amount" name="amount">
              </div>
              <div class="mb-3">
                <label for="img" class="form-label">image</label>
                <input type="file" class="form-control" id="img" name="img">
              </div>
              <div class="mb-3">
                <label for="status" class="form-label">status</label>
                <select class="form-control" name="status">
                    <option hidden>--Pilih status--</option>
                    <option value="disewa">disewa</option>
                    <option value="kosong">kosong</option>
                </select><br>
              
             
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection