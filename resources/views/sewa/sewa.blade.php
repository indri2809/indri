@extends('layouts.masterlw')
@section('konten')
@livewire('sewa', ['id_rumah' => $id_rumah])
@endsection