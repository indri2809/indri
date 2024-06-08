@extends('layouts.template')
@section('judulh1','cekdata')

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
            <h3 class="card-title">Tambah sewa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('cekdata.store', $id_rumah) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <div class="mb-3">
                <label for="id_rumah" class="form-label">id_rumah</label>
                <input type="text" class="form-control" id="id_rumah" name="id_rumah" value="{{ $id_rumah }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="noHp" class="form-label">noHp</label>
                <input type="text" class="form-control" id="noHp" name="noHp" required>
            </div>
            <div class="mb-3">
                <label for="tgl_sewa" class="form-label">tgl_sewa</label>
                <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" required>
            </div>
            <div class="mb-3">
                <label for="tgl_keluar" class="form-label">tgl_keluar</label>
                <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" required>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success float-right">Simpan</button>
    </div>
</form>

    </div>
</div>
@endsection