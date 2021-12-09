{{--<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>--}}

    @extends('layout.bahagia')

    @section('title', 'Mengedit Data Absensi')
    @section('judulhalaman', 'Edit Absensi Pegawai')

    @section('konten')

	{{--<h2>www.malasngoding.com</h2>--}}
	<h3>Data Tugas</h3>

	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->tugas_idPegawai }}</td>
			<td>{{ $p->tugas_tanggal }}</td>
			<td>{{ $p->tugas_namaTugas }}</td>
			<td>{{ $p->tugas_status }}</td>
			<td>
				<a href="/tugas/edit/{{ $p->tugas_id }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->tugas_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
