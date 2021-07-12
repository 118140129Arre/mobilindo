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
            <img src="/img/slide/kreditmobil.jpg" class="d-block w-100" alt="slide1">
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
            <p><a href="<?= base_url('/'); ?>" class=" link-primary">Home &nbsp;&nbsp;</a><a href="<?= base_url('/panduan/kredit'); ?>">> &nbsp;&nbsp; Kredit Mobil</a></p>
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
                    <p class="card-title fs-2 text-dark text-uppercase">Dapatkan Mobil Semakin Mudah Dengan Opsi Kredit</p>
                    <p class="card-text"> Untuk mempermudah kamu dalam memiliki mobil impian dari mobil88, kami juga menawarkan pembelian dengan opsi kredit. Kami bekerja sama dengan perusahaan leasing terkemuka dan terpercaya. Proses pengajuan kredit di mobil88 pun mudah dan dapat dilakukan juga secara online via web.</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- end atas -->

    <!-- pembayaran -->
    <p class="card-title text-uppercase text-center fs-2 text-primary">Langkah Mudah Mengajukan Kredit Mobil</p>
    <div class="row row-cols-2 g-1">
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/cekdokumen.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">1. Lengkapi Dokumen</p>
                <p class="card-text">
                    Kamu bisa mengajukan kredit mobil langsung ke showroom kami. Lalu, lengkapi dokumen yang dibutuhkan untuk pengajuan kredit, yaitu: Fotocopy KTP, Kartu keluarga, NPWP,  dan Surat keterangan penghasilan/rekening koran 3 bulan terakhir.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">2. Review</p>
                <p class="card-text">
                    Semua dokumen yang telah kamu siapkan akan direview oleh perusahaan leasing rekanan kami untuk dipastikan apakah dokumen yang kamu ajukan sudah lengkap dan sesuai.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/penilaian.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/kostumer.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">3. Survei</p>
                <p class="card-text">
                    Selanjutnya, perusahaan leasing rekanan kami akan melakukan survei. Proses ini memakan waktu sekitar 3-4 hari kerja sejak data diterima oleh pihak leasing dan sesuai appointment yang dibuat dengan kami.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">4. Approval</p>
                <p class="card-text">
                    Kami akan menyampaikan informasi terkait hasil pengajuan kredit mobilmu. Jika pengajuan kredit disetujui pihak leasing, dalam waktu 2 x 24 jam kerja kamu sudah bisa ambil mobilmu di showroom.
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