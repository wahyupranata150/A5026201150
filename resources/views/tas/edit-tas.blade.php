{{-- <!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body> --}}

@extends('layout.bahagia')

@section('title', 'Data Tas')
@section('judulhalaman', 'Edit Tas')

@section('konten')

	{{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
	{{-- <h3>Edit Tas</h3> --}}

    <a href="/tas" class="btn btn-info float-left">Kembali</a>

	<br/>
	<br/>

	@foreach($tas as $p)
	<form action="/tas/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <input type="hidden" name="id" value="{{ $p->kodetas }}"> <br />
            <label class="col-sm-3 text-right" for="merk">Merk Tas:</label>
            <input type="text" id="merk" name="merk" class="form-control col-sm-7" value="{{ $p->merktas }}" required="required"><br><br>
            <label class="col-sm-3 text-right" for="stock">Stock Tas:</label>
            <input type="number" id="stock" name="stock" class="form-control col-sm-7" value="{{ $p->stocktas }}" required="required"><br><br>
            <label class="col-sm-3 text-right" for="tersedia">Tersedia:</label>
            <div class="col-sm-7 text-left">
                <input type="radio" id="ya" name="tersedia" value="Y" @if ($p->tersedia === "Y") checked="checked" @endif>
                <label for="ya">Ya</label><br>
                <input type="radio" id="tdk" name="tersedia" value="T"@if ($p->tersedia === "T") checked="checked" @endif>
                <label for="tdk">Tidak</label><br>
            </div>
        </div>
        <input type="submit" class="btn btn-info" value="Simpan Data">
		{{-- <input type="hidden" name="id" value="{{ $p->kodetas }}"> <br/>
		Merk Tas <input type="text" required="required" name="merk" value="{{ $p->merktas }}"> <br/>
		Stock Tas <input type="number" required="required" name="stock" value="{{ $p->stocktas }}"> <br/>
		Tersedia <br/>
        <input type="radio" required="required" name="tersedia" value="Y" value="{{ $p->tersedia }}">
        <label for="tersedia">Ya</label><br>
        <input type="radio" required="required" name="tersedia" value="T" value="{{ $p->tersedia }}">
        <label for="tersedia">Tidak</label><br>
		<input type="submit" value="Simpan Data"> --}}
	</form>
	@endforeach

@endsection

{{-- </body>
</html> --}}
