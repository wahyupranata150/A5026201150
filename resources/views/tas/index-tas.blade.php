{{-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body> --}}

@extends('layout.bahagia')

@section('title', 'Data Mouse')
@section('judulhalaman', 'Data Tas')

@section('konten')

	{{-- <h2>www.malasngoding.com</h2> --}}
	{{-- <h3>Data Tas</h3> --}}

	<div class="d-flex align-items-center">
        <div class="p-2">
            <form action="/tas/cari" method="GET">
                <input type="text" class="form-control" name="cari" placeholder="Cari Merk Tas" value="{{ old('cari') }}">
        </div>
        <div class="p-2"><input type="submit" class="btn btn-info" value="Cari">
            </form>
        </div>
        <div class="p-2  ml-auto"><a href="/tas/tambah" class="btn btn-info float-right">+ Tambah Tas Baru</a></div>
    </div>

	<br/>
	<br/>

	<table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Merk Tas</th>
                <th>Stock Tas</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
        </thead>
		@foreach($tas as $p)
		<tr>
			<td>{{ $p->merktas }}</td>
			<td>{{ $p->stocktas }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/tas/view/{{ $p->kodetas }}">View Details</a>
				|
                <a href="/tas/edit/{{ $p->kodetas }}">Edit</a>
				|
				<a href="/tas/hapus/{{ $p->kodetas }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{ $tas->links() }}

    <p>
        Keterangan Tersedia: <br>
        Y : Ya <br>
        T : Tidak <br>
    </p>

    @endsection

{{-- </body>
</html> --}}
