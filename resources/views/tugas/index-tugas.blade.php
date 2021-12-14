{{--<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>--}}

    @extends('layout.bahagia')

    @section('title', 'Data Tugas Pegawai')
    @section('judulhalaman', 'Data Tugas Pegawai')

    @section('konten')

	{{--<h2>www.malasngoding.com</h2>--}}
	{{-- <h3>Data Tugas</h3> --}}

	<div class="d-flex align-items-center">
        <div class="p-2">
            <form action="/tugas/cari" method="GET">
                <input type="text" class="form-control" name="cari" placeholder="Cari Tugas" value="{{ old('cari') }}">
        </div>
        <div class="p-2"><input type="submit" class="btn btn-info" value="Cari">
            </form>
        </div>
        <div class="p-2  ml-auto"><a href="/tugas/tambah" class="btn btn-info float-right">+ Tambah Tugas Baru</a></div>
    </div>
	<br/>
	<br/>

	<table class="table table-hover table-bordered">
		<thead>
            <tr>
                <th>Nama Pegawai</th>
                <th>Tanggal</th>
                <th>Nama Tugas</th>
                <th>Status</th>
                <th>Opsi</th>
            </tr>
        </thead>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->tugas_tanggal }}</td>
			<td>{{ $p->tugas_namaTugas }}</td>
			<td>{{ $p->tugas_status }}</td>
			<td>
                <a href="/tugas/view/{{ $p->tugas_id }}">View Details</a>
				|
				<a href="/tugas/edit/{{ $p->tugas_id }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->tugas_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

{{ $tugas->links() }}

<p>
    Keterangan Status: <br>
    S : Selesai <br>
    B : Belum <br>
</p>

@endsection
{{-- </body>
</html> --}}
