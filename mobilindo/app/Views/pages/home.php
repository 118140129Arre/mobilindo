<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
  <link href="/css/sosmed.css" rel="stylesheet">
  <link href="/css/cardhome.css" rel="stylesheet">
</head>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/slide/spfix-00.jpg" class="d-block w-100" alt="slide1">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/slide/spfix-02.jpg" class="d-block w-100" alt="slide2">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/slide/spfix-03.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="py-5 text-center container headline">
  <center>
    <p><a href="#" class="link-primary">Home</a> / BDL Mobilindo</p>
  </center>
  <div class="row py-3">
    <div class="col-lg-10 col-md-8 mx-auto">
      <h1 class="fw- ">Temukan Mobil Second yang tepat untuk anda!</h1>
      <p class="col-12 mx-auto lh-base">Temukan berbagai mobil second pilihan yang sesuai dengan desain stylish sesuai kebutuhan dan gaya Anda. Berkendara bukan hanya sebuah perjalanan, namun kenyaman dan keselamatan.</p>
      <p class="lead text-muted"></p>
    </div>
  </div>
</section>


<center>
  <h1>DAFTAR MOBIL</h1>
</center><br><br>
<div class="container mt-2">
  <!--   <div class="card card-block mb-2">
    <h4 class="card-title">Card 1</h4>
    <p class="card-text">Welcom to bootstrap card styles</p>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>   -->

  <div class="row">
    <div class="col-md-3 col-sm-6">
      <div class="card h-100 card-block" style="border-radius: 12px 12px 12px 12px;">
        <a href="/daftarmobil"><img class="imgcard" src="/img/daftarmobil/honda-mobilio-e-1.5.png" style="border-radius: 12px 12px 0 0;" alt="Photo of sunset"></a>
        <h4 class="card-title mt-3 mb-1">HONDA MOBILIO E 1.5</h4>
        <p class="card-text fw-light text-muted">2015 | MANUAL TRANSMISSION</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card h-100 card-block" style="border-radius: 12px 12px 12px 12px;">
        <a href="/daftarmobil"></a><img class="imgcard" src="/img/daftarmobil/honda-mobilio-e-cvt-2015.png" style="border-radius: 12px 12px 0 0;" alt="Photo of sunset"></a>
        <h4 class="card-title mt-3 mb-1">HONDA MOBILIO E CVT</h4>
        <p class="card-text fw-light  text-muted">2015 | MANUAL TRANSMISSION</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card h-100 card-block" style="border-radius: 12px 12px 12px 12px;">
        <a href="/daftarmobil"><img class="imgcard" src="/img/daftarmobil/honda-mobilio-e-cvt-prestige.png" style="border-radius: 12px 12px 10 0;" alt="Photo of sunset"></a>
        <h4 class="card-title mt-3 mb-1">HONDA MOBILIO E CVT PRESTIGE</h4>
        <p class="card-text fw-light text-muted">2014 | AUTOMATIC TRANSMISSION</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card h-100 card-block" style="border-radius: 12px 12px 12px 12px;">
        <a href="/daftarmobil"><img class="imgcard" src="/img/daftarmobil/xpander-exceed.png" style="border-radius: 12px 12px 0 0;" alt="Photo of sunset"></a>
        <h4 class="card-title mt-3 mb-1">MITSUBISHI XPANDER EXCEED</h4>
        <p class="card-text fw-light  text-muted">2018 | MANUAL TRANSMISSION</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card h-100 card-block" style="border-radius: 12px 12px 12px 12px;">
        <a href="/daftarmobil"><img class="imgcard" src="/img/daftarmobil/balenoHatchback.png" style="border-radius: 12px 12px 0 0;" alt="Photo of sunset"></a>
        <h4 class="card-title mt-3 mb-1">SUZUKI BALENO HATCHBACK</h4>
        <p class="card-text fw-light text-muted">2017 | AUTOMATIC TRANSMISSION</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card h-100 card-block" style="border-radius: 12px 12px 12px 12px;">
        <a href="/daftarmobil"></a><img class="imgcard" src="/img/daftarmobil/toyota-calya-g.png" style="border-radius: 12px 12px 0 0;" alt="Photo of sunset"></a>
        <h4 class="card-title mt-3 mb-1">TOYOTA CALYA G</h4>
        <p class="card-text fw-light text-muted">2016 | MANUAL TRANSMISSION</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card h-100 card-block" style="border-radius: 12px 12px 12px 12px;">
        <a href="/daftarmobil"><img class="imgcard" src="/img/daftarmobil/toyota-innova-2.4-venturer.png" style="border-radius: 12px 12px 0 0;" alt="Photo of sunset"></a>
        <h4 class="card-title mt-3 mb-1">TOYOTA INNOVA 2.4 VENTURER</h4>
        <p class="card-text fw-light text-muted">2019 | MANUAL TRANSMISSION</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="card h-100 card-block" style="border-radius: 12px 12px 12px 12px;">
        <a href="/daftarmobil"><img class="imgcard" src="/img/daftarmobil/toyota-yaris-s.png" style="border-radius: 12px 12px 0 0;" alt="Photo of sunset"></a>
        <h4 class="card-title mt-3 mb-1">TOYOTA YARIS S</h4>
        <p class="card-text fw-light text-muted">2015 | AUTOMATIC TRANSMISSION</p>
      </div>
    </div>
  </div>
</div>
<br>
<center>
  <p><a href="/daftarmobil" class="link-primary">SELENGKAPNYA</a></p>
</center><br><br>


<!-- Berita -->
<center>
  <H2>KUMPULAN INFORMASI</H2>
</center><br>
<section id="aftersales">
  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-lg">
        <tr>
          <th>
            <div class="row">
              <div class="col">
                <img alt="" src="/img/3footer/news.jpeg" class="berita1" alt="">
                <div class="text">
                  <h1>BDL NEWS</h1>
                  <p class="fw-normal">Dapatkan berita-berita terkini dan terpercaya seputar dunia otomotif</p>
                  <div class="button1">
                    <a class="btn btn-outline-light" href="<?= base_url('/news'); ?>">SELENGKAPNYA</a>
                  </div>
                </div>
              </div>
            </div>
          </th>

          <th>
            <div class="row">
              <div class="col">
                <div class="item">
                  <img alt="" src="/img/3footer/tips.jpeg" class="berita1" alt="">
                  <div class="wrapper">
                    <div class="text">
                      <h1>BDL TIPS</h1>
                      <p class="fw-normal">Dapatkan tips-tips menarik dan bermanfaat seputar dunia otomotif</p>
                      <div class="button1">
                        <a class="btn btn-outline-light" href="/tips">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </th>

          <th>
            <div class="row">
              <div class="col">
                <div class="item">
                  <img alt="" src="/img/3footer/pedia.png" class="berita1" alt="">
                  <div class="wrapper">
                    <div class="text">
                      <h1>BDL PEDIA</h1>
                      <p class="fw-normal">Dapatkan informasi dan pengetahuan terupdate seputar dunia otomotif</p>
                      <div class="button1 ">
                        <a class="btn btn-outline-light" href="/pedia">SELENGKAPNYA</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </th>
        </tr>
      </table>
    </div>
  </div>
</section>

<!-- PRODUCT -->
<div class="bg-dark position-relative overflow-hidden text-center">
  <div class="d-md-flex flex-md-equal w-100 my-md-19 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">DOREMIFA SOLD</h2>
        <p class="lead">Banyak mobil sudah terjual, yuk yang belum mampir ke BDL MOBILINDO, banyak stock mobil fresh siap bawa pulang dengan harga <terjangkau class=""></terjangkau>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 90%; height: 350px; border-radius: 12px 12px 0 0;">
        <img src="/img/ch-so/SOLD-02.jpg" alt="" style="width: 100%; height: 350px; border-radius: 12px 12px 0 0;">
      </div>
    </div>
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">CHEACK AND RE-CHEACK</h2>
        <p class="lead">Review showroom BDL MOBILINDO, yuk yang kepo ada unit apa aja sih di BDL MOBILINDO buruan mampir, harganya murah kualitas mewah.</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 90%; height: 350px; border-radius: 12px 12px 0 0;">
        <img src="/img/ch-so/SOLD-01.jpg" alt="" style="width: 100%; height: 350px; border-radius: 12px 12px 0 0;">
      </div>
    </div>

  </div>
</div>

<?= $this->endSection(); ?>