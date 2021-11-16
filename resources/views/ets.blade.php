<!DOCTYPE html>

<head>
    <title>Form Input Peserta Vaksinasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: url(https://image.freepik.com/free-vector/elegant-white-background-with-shiny-lines_1017-17580.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        h3 {
            text-align: center;
        }

        h5 {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h5>
            I Kadek Wahyu Dwi Pranatasana<br>
            Wahyu<br>
            5026201150<br>
        </h5><br>
        <h3>Form Input Peserta Vaksinasi</h3>
        <form action="https://www.pedulilindungi.id/" class="needs-validation" novalidate>

            <div class="form-group row">
                <label class="col-sm-3" for="Name">Nama Peserta:</label>
                <div class="col-sm-9">
                    <input type="nama" class="form-control" id="nama" placeholder="Masukkan nama" name="nama"
                        pattern="[A-Za-z .]{10,}" required>
                    <div class="invalid-feedback">Nama harus berupa huruf dan minimal 10 karakter</div><br>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3" for="Name">NIK:</label>
                <div class="col-sm-9">
                    <input type="nik" class="form-control" id="nik" placeholder="Masukkan NIK" name="nik"
                        pattern="\d{16}" required>
                    <div class="invalid-feedback">NIK harus berupa angka sebanyak 16 digit</div><br>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3" for="course" class="form-label">Jenis Vaksin:</label>
                <div class="col-sm-9">
                    <select id="vaksin" class="form-select" required pattern="[^/s]">
                        <option value=""> </option>
                        <option value="btech">AZ</option>
                        <option value="bba">Sinovac</option>
                        <option value="bca">Moderna</option>
                    </select>
                    <div class="invalid-feedback">Pilih jenis vaksin</div><br>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3" for="Name">No. Batch:</label>
                <div class="col-sm-9">
                    <input type="batch" class="form-control" id="batch" placeholder="Masukkan No. Batch" name="batch"
                        pattern="[A-Za-z0-9]{1,}" required>
                    <div class="invalid-feedback">No. Batch berupa kombinasi angka dan huruf tapi tidak boleh ada tanda
                        spasi dan karakter lain</div><br>
                </div>
            </div>

            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>

    <script>
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>
