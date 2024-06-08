<div>
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
            <form wire:submit.prevent="submit">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="id_rumah" class="form-label">ID Rumah</label>
                            <input type="text" class="form-control" id="id_rumah" wire:model="id_rumah">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" wire:model="nama">
                        </div>
                        <div class="mb-3">
                            <label for="noHp" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="noHp" wire:model="noHp">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_sewa" class="form-label">Tanggal Sewa</label>
                            <input type="date" class="form-control" id="tgl_sewa" wire:model="tgl_sewa">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_keluar" class="form-label">Tanggal Keluar</label>
                            <input type="date" class="form-control" id="tgl_keluar" wire:model="tgl_keluar">
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
