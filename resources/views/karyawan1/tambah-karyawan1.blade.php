@extends('layout.bahagia')

@section('title', 'Data Karyawan1')
@section('judulhalaman', 'Tambah Karyawan1')

@section('konten')

<a href="/karyawan1" class="btn btn-info float-left">Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan1/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="col-sm-3 text-right" for="NIP">NIP :</label>
            <input type="text" id="NIP" name="NIP" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="Nama">Nama :</label>
            <input type="text" id="Nama" name="Nama" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="Pangkat">Pangkat :</label>
            <input type="text" id="Pangkat" name="Pangkat" class="form-control col-sm-7" required="required"><br><br>
            <label class="col-sm-3 text-right" for="Gaji">Gaji :</label>
            <input type="text" id="Gaji" name="Gaji" class="form-control col-sm-7" required="required"><br><br>
        </div>

        <input type="submit" class="btn btn-info" value="Simpan Data">
    </form>

    @endsection
