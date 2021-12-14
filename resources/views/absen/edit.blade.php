
   @extends('layout.bahagia')

   @section('title', 'Mengedit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

{{-- <h3>{{ $judul }}</h3> --}}

    <a href="/absen" class="btn btn-info float-left"> Kembali</a>

    <br />
    <br />

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <input type="hidden" name="ida" value="{{ $a->ID }}"> <br />
            <label class="col-sm-3 text-right" for="idp">IDPegawai :</label>
            <select class="col-sm-7" id="idp" name="idp">
                @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{
                    $p->pegawai_nama }}</option>
                @endforeach
            </select><br><br>
            <label class="col-sm-3 text-right" for="dtpickerdemo">Tanggal :</label>
            <div class='input-group date col-sm-7' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({
                        format: 'YYYY-MM-DD hh:mm:ss',
                        showTodayButton: true,
                        locale: 'id',
                        "defaultDate": new Date(),
                    });
                });
            </script>
            <label class="col-sm-3 text-right" for="status">Status :</label>
            <div class="col-sm-7 text-left">
                <input type="radio" id="hadir" name="status" value="H" @if ($a->Status === "H") checked="checked" @endif>
                <label for="hadir">Hadir</label><br>
                <input type="radio" id="izin" name="status" value="I" @if ($a->Status === "I") checked="checked" @endif>
                <label for="izin">Izin</label><br>
                <input type="radio" id="sakit" name="status" value="S" @if ($a->Status === "S") checked="checked" @endif>
                <label for="sakit">Sakit</label><br>
                <input type="radio" id="alpha" name="status" value="A" @if ($a->Status === "A") checked="checked" @endif>
                <label for="alpha">Alpha</label><br>
            </div>
        </div>
        <input type="submit" class="btn btn-info" value="Simpan Data">

		{{-- <input type="hidden" name="id" value="{{ $a->ID }}">
        IDPegawai <select name="idpegawai" >
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        <br>
                <div class="form-group">
                    <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                    <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                        <input type='text' class="form-control" name="tanggal" value="{{ $a->Tanggal }}" required="required" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: 'YYYY-MM-DD hh:mm:ss',
                            showTodayButton: false,
                            locale : 'id',
                            "defaultDate": new Date(),
                        });
                    });
                </script>

                Status <br />
                <input type="radio" id="html" name="status" value="H" @if ($a->Status === "H" ) checked="checked" @endif>
                <label for="html">Hadir</label><br>
                <input type="radio" id="html" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                <label for="html">Izin</label><br>
                <input type="radio" id="css" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                <label for="css">Sakit</label><br>
                <input type="radio" id="javascript" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                <label for="javascript">Alpha</label>
        <p><input type="submit" value="Simpan Data"></p> --}}
	</form>
	@endforeach

   @endsection
