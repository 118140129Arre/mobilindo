<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="carousel.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

  <!-- My Css -->
  <link href="/css/home.css" rel="stylesheet">
  <link href="/css/daftarmobil.css" rel="stylesheet">

  <link href="/css/navbar.css" rel="stylesheet">
  <link href="/css/footer.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="/img/favicon/site.webmanifest">


  <!-- <link href="/css/aftersales.css" rel="stylesheet"> -->

  <!-- css carousel -->
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/owl.theme.default.min.css">

  <!-- MY Js -->
  <script src="/js/navbar.js"></script>

  <!-- Bootstrap CSS -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title><?= $title; ?></title>
</head>

<body>
  <main id="product" class="mt-0 product-automobile">
    <div id=" app">

      <?= $this->include('layout/navbar'); ?>
      <?= $this->renderSection('content'); ?>


      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
      <!-- tombol up -->
      <section>

      </section>

      <a class="gotobtn" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>
      <!-- tombol up akhir -->


      <!-- FOOTER -->
      <footer id="footer">
        <div class="container">
          <div class="footer-nav">
            <div class="nav-section">
              <h3>BDL Mobilindo</h3>
              <ul>
                <li><a href="/bantuan/profil">Profil</a></li>
                <li><a href="/bantuan/faq">FAQ</a></li>
                <li><a href="https://goo.gl/maps/m94nynujb5MT58xGA">Lokasi Showroom</a></li>
              </ul>
            </div>
            <div class="nav-section">
              <h3>Layanan</h3>
              <ul>
                <li><a href="/panduan/jual">Jual</a></li>
                <li><a href="/panduan/beli">Beli</a></li>
                <li><a href="/panduan/kredit">Kredit</a></li>
                <li><a href="/panduan/tukartambah">Tukar Tambah</a></li>
              </ul>
            </div>
            <div class="nav-section">
              <h3>Halaman</h3>
              <ul>
                <li><a href="/news">News</a></li>
                <li><a href="/tips">Tips</a></li>
                <li><a href="/pedia">Pedia</a></li>

              </ul>
            </div>
            <div class="nav-section">
              <strong>
                <h3>Hubungi Kami</h3>
              </strong>
              <p class="fs-12 mb-1 text-muted">Telephone / WhatsApp<br><a href="tel:0851-5693-6625">0851-5693-6625</a><br>Klik nomer untuk menghubungi</p>
              <p class="fs-12 text-muted">Jam Kerja 08.00-22.00 WIB</p>
            </div>
          </div>

          <!-- Sosial Media -->
          <div class="footer-nav row">
            <div class="col-6">
              <h3>Sosial Media</h3>
              <div class="fs-24">
                <a href="https://www.facebook.com/bdlmobilindo/" target="_blank" class="mr-5">
                  <i class="fa fa-facebook-square"></i>
                </a>
                <a href="https://www.instagram.com/bdl.mobilindo/" target="_blank" class="mr-5">
                  <i class="fa fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="copyright scbottom">© 2021 BDL Mobilindo. <a href="/admin"> DAP-MN.</a></div>
        </div>
      </footer>
    </div>
  </main>

  <script src="/js/owl.carousel.js"></script>
  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</htl>