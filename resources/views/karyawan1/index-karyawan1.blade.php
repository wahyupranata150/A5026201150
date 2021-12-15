@extends('layout.bahagia')

@section('title', 'Data Karyawan1')
@section('judulhalaman', 'Data Karyawan1')

@section('konten')

<div class="d-flex align-items-center">
    <div class="p-2">
        <form action="/karyawan1/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Nama Karyawan1" value="{{ old('cari') }}">
    </div>
    <div class="p-2"><input type="submit" class="btn btn-info" value="Cari">
        </form>
    </div>
    <div class="p-2  ml-auto"><a href="/karyawan1/tambah" class="btn btn-info float-right">+ Tambah Karyawan1 Baru</a></div>
</div>

<br/>
<br/>

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th>Hapus Record</th>
        </tr>
    </thead>
    @foreach($karyawan1 as $p)
    <tr>
        <td>{{ $p->NIP }}</td>
        <td>{{ $p->Nama }}</td>
        <td>{{ $p->Pangkat }}</td>
        <td>{{ $p->Gaji }}</td>
        {{-- <td >{{ number_format($k->Gaji, 0, ',', '.') }}</td> --}}
        <td>
            <a href="/karyawan1/hapus/{{ $p->NIP }}">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $karyawan1->links() }}

@endsection
