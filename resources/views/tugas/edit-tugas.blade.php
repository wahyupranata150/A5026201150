{{--<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>--}}

    @extends('layout.bahagia')

    @section('title', 'Data Tugas')
    @section('judulhalaman', 'Edit Tugas Pegawai')

    @section('konten')

	{{--<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>--}}
	{{-- <h3>Edit Tugas</h3> --}}

    <a href="/tugas" class="btn btn-info float-left">Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <input type="hidden" name="id" value="{{ $p->tugas_id }}"> <br />
            <label class="col-sm-3 text-right" for="idPegawai">ID Pegawai :</label>
            <input type="text" id="idPegawai" name="idPegawai" class="form-control col-sm-7" value="{{ $p->tugas_idPegawai }}" required="required"><br><br>
            <label class="col-sm-3 text-right" for="tanggal">Tanggal :</label>
            <input type="datetime-local" id="tanggal" name="tanggal" class="form-control col-sm-7" value="{{ $p->tugas_tanggal }}" required="required"><br><br>
            <label class="col-sm-3 text-right" for="namaTugas">Nama Tugas :</label>
            <input type="text" id="namaTugas" name="namaTugas" class="form-control col-sm-7" value="{{ $p->tugas_namaTugas }}" required="required"><br><br>
            <label class="col-sm-3 text-right" for="status">Status :</label>
            <div class="col-sm-7 text-left">
                <input type="radio" id="selesai" name="status" value="S" @if ($p->tugas_status === "S") checked="checked" @endif>
                <label for="selesai">Selesai</label><br>
                <input type="radio" id="Belum" name="status" value="B"@if ($p->tugas_status === "B") checked="checked" @endif>
                <label for="Belum">Belum</label><br>
            </div>
        </div>
        <input type="submit" class="btn btn-info" value="Simpan Data">
		{{-- <input type="hidden" name="id" value="{{ $p->tugas_id }}"> <br/>
		IDPegawai <input type="number" required="required" name="idPegawai" value="{{ $p->tugas_idPegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="tanggal" value="{{ $p->tugas_tanggal }}"> <br/>
		NamaTugas <input type="text" required="required" name="namaTugas" value="{{ $p->tugas_namaTugas }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $p->tugas_status }}"> <br/>
		<input type="submit" value="Simpan Data"> --}}
	</form>
	@endforeach


{{-- </body>
</html> --}}
