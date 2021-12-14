@extends('layout.bahagia')

@section('title', 'Data Tas')
@section('judulhalaman', 'Detail Tas')

@section('konten')

<a href="/tas" class="btn btn-info float-left">Kembali</a>

<br />
<br />

@foreach($tas as $p)

<div class="form-group row">
    <label class="col-sm-6 text-right" for="merk">Merk Tas :</label>
    <label class="col-sm-6 text-left" for="merk">{{ $p->merktas }}</label>
    <label class="col-sm-6 text-right" for="stock">Stock Tas :</label>
    <label class="col-sm-6 text-left" for="stock">{{ $p->stocktas }}</label>
    <label class="col-sm-6 text-right" for="tersedia">Tersedia :</label>
    <label class="col-sm-6 text-left" for="tersedia">
    @if ($p->tersedia === "Y") Ya @endif
    @if ($p->tersedia === "T") Tidak  @endif
    </label>
</div>
@endforeach

@endsection
