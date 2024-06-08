@extends('layouts.template')
@section('judulh1', 'DataRumah')
@section('konten')
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-3">
                <a href="{{ route('datarumah.create') }}" class="btn btn-md btn-success">Tambah DataRumah</a>
            </div>
            <div class="col-lg-9">
                
            </div>
        </div>
        {{-- atas --}}
        <div class="row mt-5" >
        @foreach ($data as $rumah)
            <div class="col-lg-6" >
                <div class="card mb-3" style="max-width: 500px;" >
                    <div class="row g-0" >
                        <div class="col-md-4 d-flex align-items-center">
                        <img src="{{ asset('storage/' . $rumah->img) }}" class="img-fluid rounded-start ml-3" style="height: 250px; object-fit: foto;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                
                                <p class="card-text">alamat : {{ $rumah->alamat }}</p>
                                <p class="card-text">kota : {{ $rumah->kota }}</p>
                                <p class="card-text">harga: {{ $rumah->amount }}</p>
                                <p class="card-text">status: {{ $rumah->status }}</p>
                                <h3>
                                    <body>
                                    <a href="{{ route('sewa.create', $rumah->id) }}" class="btn btn-sm btn-success">Sewa</a>
                                    <form action="{{ route('datarumah.destroy', $rumah->id) }}" method="POST">
                                @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        delete
                                      </button>
                                </form>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>
        {{ $data->links() }}
    </div>
@endsection