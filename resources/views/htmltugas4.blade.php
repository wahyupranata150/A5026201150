<!DOCTYPE html>
<html>

<head>
  <title>Tugas Customisasi Contoh jQuery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $("button").click(function () {
        $("#text").toggleClass("tGelap");
        $("#body").toggleClass("bGelap");
        $("#nav1, #nav2, #nav3").toggleClass("nGelap");
      });
    });
  </script>
  <style>
    .carousel-inner img {
      width: 100%;
      height: 100%;
    }

    .tGelap {
      color: whitesmoke;
      background-color: black;
    }

    .bGelap {
      background-color: black;
    }

    .nGelap {
      color: gold;
    }
  </style>
</head>

<body id="body">

  <div id="demo" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ul>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src=https://d2xjmi1k71iy2m.cloudfront.net/dairyfarm/id/pageImages/page__en_us_1631847040_1_6.jpeg
          alt="slide1" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src=https://d2xjmi1k71iy2m.cloudfront.net/dairyfarm/id/pageImages/page__en_us_1632150863_1_2.jpeg
          alt="slide2" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src=https://d2xjmi1k71iy2m.cloudfront.net/dairyfarm/id/pageImages/page__en_us_1627635082_0_2.jpeg
          alt="slide3" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src=https://d2xjmi1k71iy2m.cloudfront.net/dairyfarm/id/pageImages/page__en_us_1627618786_1_2.jpeg
          alt="slide4" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src=https://d2xjmi1k71iy2m.cloudfront.net/dairyfarm/id/pageImages/page__en_us_1625804589__0.jpeg
          alt="slide15" width="1100" height="500">
      </div>
    </div>

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <div class="card" id="text">
    <h4>Wujudkan rumah impianmu sekarang!</h4>
    <p>Bosan dengan suasana kamar yang itu-itu saja. Kami menyediakan bantal kamar tidur
      hingga dekorasi berupa wallpaper dan bingkai dinding agar dirimu dapat menciptakan kombinasi yang sesuai dengan
      kepribadianmu.</p>
  </div>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="https://www.ikea.co.id/in" id="nav1">Website</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://shopee.co.id/ikeaindonesia" id="nav2">Shopee</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.instagram.com/ikea_id/" id="nav3">Instagram</a>
    </li>
  </ul>
  <button>Mode Gelap/Terang</button>
</body>

</html>
