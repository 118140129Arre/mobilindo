<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link href="/css/sosmed.css" rel="stylesheet">
    <link href="/css/detailmobil.css" rel="stylesheet">
    <link href="/css/lainnya.css" rel="stylesheet">
</head>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slide/dfs.jpg" class="d-block w-100" alt="slide1">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <p><a href="<?= base_url('/'); ?>" class=" link-primary">Home&nbsp;&nbsp; </a><a href="<?= base_url('/Daftarmobil'); ?>"> > &nbsp;&nbsp;Daftar Mobil&nbsp;&nbsp;</a><a class="text-capitalize" href="<?= base_url('/Daftarmobil'); ?>"> >&nbsp;&nbsp; <?= $mobil['slug']; ?></a> </p>
        </div>
    </div>
</div>
<br>

<div class="container">
    <!-- atas start -->
    <div class="card border-light">
        <div class="card-body">
            <div class="card border-light">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 3"></button>

                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/img/daftarmobil/<?= $mobil['gambar']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/daftarmobil/<?= $mobil['slide-1']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/daftarmobil/<?= $mobil['slide-2']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/daftarmobil/<?= $mobil['slide-3']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/daftarmobil/<?= $mobil['slide-4']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/daftarmobil/<?= $mobil['slide-5']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/img/daftarmobil/<?= $mobil['slide-6']; ?>" class="d-block w-100" alt="...">
                                    </div>

                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>


                        <div class="col">
                            <h1 class="card-title text-uppercase"><?= $mobil['merek']; ?> <?= $mobil['nama']; ?></h1>
                            <p class="fs-3">Rp <?= $mobil['harga']; ?></p>
                            <p>Kredit | Tunai</p>
                            <br>

                            <div class="card  border-dark">
                                <div class="card-header text-center bg-transparent border-dark">Deskripsi</div>
                                <div class="card-body">
                                    <p class="card-text text-capitalize"><?= $mobil['deskripsi']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- atas end -->


            <!-- atas-bawah start -->
            <div class="card border-light">
                <div class="card-body ">
                    <div class="row atribut">
                        <div class="col">
                            <i class="fas fa-tachometer-alt text-center"></i>
                            <p class="txt1">Kilometer</p>
                            <P class="txt"><?= $mobil['kilometer']; ?></P>
                        </div>
                        <div class="col">
                            <i class="fas fa-car text-center"></i>
                            <p class="txt1">Tahun Pembuatan</p>
                            <p class="txt"><?= $mobil['tahun']; ?></p>
                        </div>
                        <div class="col">
                            <i class="fas fa-cogs text-center"></i>
                            <p class="txt1">Transmisi</p>
                            <p class="text-capitalize txt"><?= $mobil['transmisi']; ?></p>
                        </div>
                        <div class="col">
                            <i class="fas fa-calendar-alt text-center"></i>
                            <p class="txt1">Masa Berlaku</p>
                            <p class="txt"><?= $mobil['berlaku']; ?></p>
                        </div>
                        <div class="col">
                            <i class="fas fa-users text-center"></i>
                            <p class="txt1">Jumlah Kepemilikan</p>
                            <p class="txt"><?= $mobil['kepemilikan']; ?></p>
                        </div>
                        <div class="col">
                            <i class="fas fa-gas-pump text-center"></i>
                            <p class="txt1">Bahan Bakar</p>
                            <p class="text-capitalize txt"><?= $mobil['bahan-bakar']; ?></p>
                        </div>
                        <div class="col">
                            <i class="fas fa-wrench text-center"></i>
                            <p class="txt1">Kapasitas Mesin</p>
                            <p class="txt"><?= $mobil['kapasitas_mesin']; ?></p>
                        </div>
                        <div class="col">
                            <i class="fas fa-sort-numeric-up text-center"></i>
                            <p class="txt1">Plat Nomor</p>
                            <p class="txt"><?= $mobil['platnomor']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- atas-bawah end -->
        </div>
    </div>

    <!-- delet -->
    

    <?php if (!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4>Periksa Entrian Form</h4>
            </hr />
            <?php echo session()->getFlashdata('error'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <br><br>


    <div class="card border-dark">
        <div class="card-header bg-transparent border-dark">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="true">Cek di Showroom</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <h5 class="card-title">Appointment Sekarang</h5>
            <p class="card-text">Tertarik dengan mobil ini? Yuk, buat appointment untuk cek langsung ke showroom kami.</p>
        </div>
    </div>
    <br><br><br><br>


</div>
<?= $this->include('layout/lainnya'); ?>

<br><br>



<?= $this->endSection(); ?>