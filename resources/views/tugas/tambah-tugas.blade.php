{{--<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>--}}

    @extends('layout.bahagia')

    @section('title', 'Data Tugas Pegawai')
    @section('judulhalaman', 'Tambah Tugas Pegawai')

    @section('konten')

	{{--<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>--}}
	{{-- <h3>Data Tugas</h3> --}}

	<a href="/tugas" class="btn btn-info float-left">Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="col-sm-3 text-right" for="idPegawai">ID Pegawai :</label>
            <input type="text" id="idPegawai" name="idPegawai" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="tanggal">Tanggal :</label>
            <input type="datetime-local" id="tanggal" name="tanggal" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="namaTugas">Nama Tugas :</label>
            <input type="text" id="namaTugas" name="namaTugas" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="status">Status :</label>
            <div class="col-sm-7 text-left">
                <input type="radio" id="selesai" name="status" value="S" checked>
                <label for="selesai">Selesai</label><br>
                <input type="radio" id="belum" name="status" value="B">
                <label for="belum">Belum</label><br>
            </div>
        </div>

        <input type="submit" class="btn btn-info" value="Simpan Data">
		{{-- IDPegawai <input type="number" name="idPegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" name="tanggal" required="required"> <br/>
		NamaTugas <input type="text" name="namaTugas" required="required"> <br/>
		Status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data"> --}}
	</form>

    @endsection
{{-- </body>
</html> --}}
