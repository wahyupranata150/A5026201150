@extends('layout.bahagia')

@section('title', 'Data Tugas Pegawai')
@section('judulhalaman', 'Detail Tugas Pegawai')

@section('konten')

<a href="/tugas" class="btn btn-info float-left">Kembali</a>

<br />
<br />

@foreach($tugas as $p)

<div class="form-group row">
    <label class="col-sm-6 text-right" for="idPegawai">ID Pegawai :</label>
    <label class="col-sm-6 text-left" for="idPegawai">{{ $p->tugas_idPegawai }}</label>
    <label class="col-sm-6 text-right" for="tanggal">Tanggal :</label>
    <label class="col-sm-6 text-left" for="tanggal">{{ $p->tugas_tanggal }}</label>
    <label class="col-sm-6 text-right" for="namaTugas">Nama Tugas :</label>
    <label class="col-sm-6 text-left" for="namaTugas">{{ $p->tugas_namaTugas }}</label>
    <label class="col-sm-6 text-right" for="status">Status :</label>
    <label class="col-sm-6 text-left" for="status">
    @if ($p->tugas_status === "S") Selesai @endif
    @if ($p->tugas_status === "B") Belum  @endif
    </label>
</div>
@endforeach

@endsection
