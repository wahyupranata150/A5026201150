{{--<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>--}}

    @extends('layout.bahagia')
    @section('title', 'Data Pegawai')
    @section('judulhalaman', 'Edit Pegawai')

    @section('konten')

    {{--<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>--}}
	{{-- <h3>Edit Pegawai</h3> --}}

	<a href="/pegawai" class="btn btn-info float-left">Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
            <label class="col-sm-3 text-right" for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" class="form-control col-sm-7" value="{{ $p->pegawai_nama }}"
                required="required"><br><br>
            <label class="col-sm-3 text-right" for="jabatan">Jabatan :</label>
            <input type="text" id="jabatan" name="jabatan" class="form-control col-sm-7" value="{{ $p->pegawai_jabatan }}"
                required="required"><br><br>
            <label class="col-sm-3 text-right" for="umur">Umur :</label>
            <input type="text" id="umur" name="umur" class="form-control col-sm-7" value="{{ $p->pegawai_umur }}"
                required="required"><br><br>
            <label class="col-sm-3 text-right" for="alamat">Alamat :</label>
            <textarea id="alamat" name="alamat" class="col-sm-7" style="height:200px">{{ $p->pegawai_alamat }}</textarea>
        </div>
        <input type="submit" class="btn btn-info" value="Simpan Data">
		{{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}
	</form>
	@endforeach

    @endsection
{{-- </body>
</html> --}}
