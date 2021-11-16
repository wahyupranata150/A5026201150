<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up Now!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
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

    <style>
        body {
            background: url(https://wallpaperaccess.com/full/260185.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h2>REGISTRATION FORM</h2>
        <form action="https://www.geeksforgeeks.org/" class="needs-validation" novalidate>
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter your name" name="name"
                    pattern="[A-Za-z .]{1,}" required>
                <div class="invalid-feedback">Name must be letter</div>
            </div>

            <div class="mb-3">
                <label for="address">Address:</label>
                <input type="address" class="form-control" id="address" placeholder="Enter your address" name="address"
                    pattern="[A-Za-z0-9 .]{1,}" required>
                <div class="invalid-feedback">Use only a combination of letters and numbers for address</div>
            </div>

            <div class="mb-3">
                <label for="email">E-mail Address:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email"
                    pattern="[A-Za-z0-9_._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                <div class="invalid-feedback">Make sure the email format is correct, ex: xxx@gmail.com</div>
            </div>

            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password"
                    name="password" pattern="[A-Za-z0-9 ]{8,16}" required>
                <div class="invalid-feedback">Use a combination of letters and numbers as much as 8-16 digits</div>
            </div>

            <div class="mb-3">
                <label for="telephone">Telephone:</label>
                <input type="telephone" class="form-control" id="telephone" placeholder="Enter your telephone"
                    name="telephone" pattern="\d{7,12}" required>
                <div class="invalid-feedback">Use only 7-12 digit numbers</div>
            </div>

            <div>
                <label for="course" class="form-label">Select your Course</label>
                <select id="course" class="form-select" required pattern="[^/s]">
                    <option value=""> </option>
                    <option value="btech">BTECH</option>
                    <option value="bba">BBA</option>
                    <option value="bca">BCA</option>
                    <option value="bcom">B COM</option>
                    <option value="gfg">GEEKFORGEEKS</option>
                </select>
                <div class="invalid-feedback">Please choose a course</div>
            </div>

            <div class="mb-3">
                <label for="zip">Zip Code:</label>
                <input type="zip" class="form-control" id="zip" placeholder="Enter your zip code" name="zip"
                    pattern="\d{6}" required>
                <div class="invalid-feedback">Use only 6 digit numbers</div>
            </div>

            <div class="form-check mb-3">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</body>

</html>
