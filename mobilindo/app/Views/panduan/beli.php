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
            <img src="/img/slide/belimobil.jpg" class="d-block w-100" alt="slide1">
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
            <p><a href="<?= base_url('/'); ?>" class=" link-primary">Home &nbsp;&nbsp;</a><a href="<?= base_url('/panduan/beli'); ?>">> &nbsp;&nbsp; Beli Mobil</a></p>
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
                    <p class="card-title fs-2 text-dark text-uppercase">Beli Mobil di bdl mobilindo Kini Semakin Mudah!</p>
                    <p class="card-text"> Beli mobil kini semakin mudah dengan cheack online via website BDL Mobilndo. Kamu bisa pilih opsi pembayaran tunai (full payment) dengan pembayaran melalui virtual account atau dengan kartu kredit dan kamu juga bisa membeli mobil dengan opsi kredit.
                        Kami sudah bekerja sama dengan perusahaan leasing terkemuka dan terpercaya demi kenyamanmu saat memilih opsi kredit. Kamu juga bisa menghitung cicilan mobil menggunakan fitur kalkulator kelayakan kredit dan dapat langsung megajukan kredit mobil.
                        Ketika sudah melihat mobil dan mantap membeli, kamu bisa melanjutkan transaksi di showroom.
                        Namun kalau masih ingin lihat-lihat, kamu bisa buat appointment untuk datang ke showroom kami terlebih dahulu, semua bisa dilakukan via chat whatsApp.</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- end atas -->

    <!-- pembayaran -->
    <p class="card-title text-uppercase text-center fs-2 text-primary">langkah mudah beli mobil di showroom</p>
    <div class="row row-cols-2 g-1">
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/mobilimpian.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">1. Temukan Mobil Impian</p>
                <p class="card-text">
                    Gunakan fitur pencarian kami yang komprehensif : kamu bisa melakukan pencarian berdasarkan merek, harga, tahun, transmisi, serta plat mobil.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">2. Pilih Opsi Pembayaran</p>
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
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/cekdokumen.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">3. Lengkapi Detail Informasi</p>
                <p class="card-text">
                    Lengkapi data diri dan dokumen yang diminta. Setelah itu, kamu dapat menjadwalkan appointment untuk melakukan pengambilan atau pengiriman mobil.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">4. Bawa Pulang Mobil Impianmu</p>
                <p class="card-text">
                    Ambil mobilmu langsung ke showroom sesuai dengan jadwal appointment. Atau, kami bisa antarkan mobil impianmu langsung ke alamat yang kamu inginkan.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/deal.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- end bayar -->
    <br><br><br>
    <!-- cari mobil -->
    <div class="row border-light text-center">
        <div class="col">
            <div class="card-text fs-4">Cari Mobil</div><br>
            <a href=""></a><button type="button" class="btn btn-primary" style="border-radius: 25px 25px 25px 25px;">Cek Daftar Mobil</button>
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