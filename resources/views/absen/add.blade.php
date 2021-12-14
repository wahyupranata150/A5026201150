
    @extends('layout.bahagia')

    @section('title', 'Data Absensi Pegawai')
    @section('judulhalaman', 'Tambah Absensi Pegawai')

    @section('konten')

    <a href="/absen" class="btn btn-info float-left"> Kembali</a>

    <br />
    <br />

    <form action="/absen/store" method="post">
        {{ csrf_field() }}

        IDPegawai <select name="idpegawai" >
    @foreach($pegawai as $p)
     <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
    @endforeach
</select>
<br>
        <div class="form-group">
            <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" required="required" />
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

<label class="col-sm-3 text-right" for="status">Status :</label>
<div class="col-sm-7 text-left">
    <input type="radio" id="hadir" name="status" value="H" checked>
    <label for="hadir">Hadir</label><br>
    <input type="radio" id="izin" name="status" value="I">
    <label for="izin">Izin</label><br>
    <input type="radio" id="sakit" name="status" value="S">
    <label for="sakit">Sakit</label><br>
    <input type="radio" id="alpha" name="status" value="A">
    <label for="alpha">Alpha</label><br>
</div>
</div>

<input type="submit" class="btn btn-info" value="Simpan Data">
    </form>

@endsection
