{{-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body> --}}

@extends('layout.bahagia')

@section('title', 'Data Tas')
@section('judulhalaman', 'Tambah Tas')

@section('konten')

	{{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
	{{-- <h3>Data Tas</h3> --}}

	<a href="/tas" class="btn btn-info float-left">Kembali</a>

	<br/>
	<br/>

	<form action="/tas/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="col-sm-3 text-right" for="merk">Merk Tas :</label>
            <input type="text" id="merk" name="merk" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="stock">Stock Tas :</label>
            <input type="number" id="stock" name="stock" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="tersedia">Tersedia :</label>
            <div class="col-sm-7 text-left">
                <input type="radio" id="ya" name="tersedia" value="Y" checked>
                <label for="ya">Ya</label><br>
                <input type="radio" id="tdk" name="tersedia" value="T">
                <label for="tdk">Tidak</label><br>
            </div>
        </div>

        <input type="submit" class="btn btn-info" value="Simpan Data">
		{{-- Merk Tas <input type="text" name="merk" required="required"> <br/>
		Stock Tas <input type="number" name="stock" required="required"> <br/>
		Tersedia <br>
        <input type="radio" name="tersedia" value="Y" required="required">
        <label for="tersedia">Ya</label><br>
        <input type="radio" name="tersedia" value="T" required="required">
        <label for="tersedia">Tidak</label><br>
		<input type="submit" value="Simpan Data"> --}}
	</form>

    @endsection
{{-- </body>
</html> --}}
