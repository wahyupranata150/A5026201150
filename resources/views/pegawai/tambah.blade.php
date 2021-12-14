{{--<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>--}}

    @extends('layout.bahagia')
    @section('title', 'Data Pegawai')
    @section('judulhalaman', 'Tambah Pegawai')

    @section('konten')

	{{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3> --}}

	<a href="/pegawai" class="btn btn-info float-left">Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="col-sm-3 text-right" for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="jabatan">Jabatan :</label>
            <input type="text" id="jabatan" name="jabatan" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="umur">Umur :</label>
            <input type="text" id="umur" name="umur" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="alamat">Alamat :</label>
            <textarea id="alamat" name="alamat" class="col-sm-7" style="height:200px"></textarea>
        </div>
        <input type="submit" class="btn btn-info" value="Simpan Data">
		{{-- Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
	</form>

    @endsection
{{-- </body>
</html> --}}
