<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link href="/css/sosmed.css" rel="stylesheet">
    <link href="/css/beli.css" rel="stylesheet">


</head>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <!-- gambar atas -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slide/jualmobil.jpg" class="d-block w-100" alt="slide1">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
    </div>
</div>
<!-- end gambar atas -->
<br>

<!-- link menuju ke -->
<div class="container">
    <div class="row">
        <div class="col">
            <p><a href="<?= base_url('/'); ?>" class=" link-primary">Home &nbsp;&nbsp;</a><a href="<?= base_url('/panduan/jual'); ?>">> &nbsp;&nbsp; Jual Mobil</a></p>
        </div>
    </div>
</div>
<!-- akhir link -->
<br>

<div class="container">

    <!-- atas -->
    <div class="row">
        <div class="col">
            <div class="card border-light">
                <div class="card-body text-center">
                    <p class="card-title fs-2 text-dark text-uppercase">Jual Mobil di bdl mobilindo Kini Semakin Mudah!</p>
                    <p class="card-text"> Ingin jual mobil lama Kamu? BDL Mobilindo siap membeli mobil Kamu dengan proses yang mudah, cepat dan penawaran harga terbaik. Hubungi kami untuk melakukan Appointment.</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- end atas -->

    <!-- pembayaran -->
    <p class="card-title text-uppercase text-center fs-2 text-primary">langkah mudah jual mobil di showroom</p>
    <div class="row row-cols-2 g-1">
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/hubungikami.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">1. Hubungi kami</p>
                <p class="card-text">
                    Hubungi kami melalui nomor whatsapp dibawah yang sudah tertera lalu bisa langsung datang ke showroom kami yang ada di Jl.Putri Balau No.34A, Kedamaian, Bandar Lampung.  .
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">2. Datang ke Showroom</p>
                <p class="card-text">
                    Datang ke showroom kami dengan membawa mobil yang ingin anda jual, kami akan melakukan pengecekkan terhadap kondisi kendaraan anda.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/mobilimpian.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/diskusi.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">3. Tahap Negosiasi</p>
                <p class="card-text">
                    Appraisal kami akan mengajukan penawaran harga terbaik berdasarkan hasil penilain. Dan kamu pun dapat langsung melakukan negosiasi harga. Kami pastikan kami memberikan penawaran harga yang fair sesuai kondisi mobilmu.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">4. Pembayaran</p>
                <p class="card-text">
                    Kami menawarkan tiga opsi pembayaran : bayar tunai (full payment) melalui virtual account atau dengan kartu kredit, pembelian dengan kredit dan reservasi mobil dengan deposit.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/bayar.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- end bayar -->
    <br><br><br>
    <!-- cari mobil -->
    <div class="row border-light text-center">
        <div class="col">
            <div class="card-text fs-4">Cari Mobil</div><br>
            <a href="/daftarmobil"><button type="button" class="btn btn-primary" style="border-radius: 25px 25px 25px 25px;">Cek Daftar Mobil</button></a>
        </div>
    </div>
    <!-- end cari mobil -->
    <br><br><br><br>
</div>

<!-- pertanyaan -->
<div class="containe-fluid">
    <div class="row text-center row-cols-1">
        <div class="col">
            <div class="card-title fs-4">Punya Pertanyaan?</div>
        </div>
        <br><br><br>
        <div class="col bawah">
            <br><br>
            <div class="card-text">
                <i class="fas fa-question-circle">&nbsp;&nbsp;FAQ&nbsp;&nbsp;|&nbsp;&nbsp;</i>
                <i class="fas fa-envelope">&nbsp;&nbsp;Hubungi Kami&nbsp;&nbsp;|&nbsp;&nbsp;</i>
                <i class="fas fa-mobile-alt">&nbsp;&nbsp;0851-5693-6625</i>
            </div>
            <br><br>
        </div>
    </div>
</div>
<!-- end pertanyaan -->
<?= $this->endSection(); ?>