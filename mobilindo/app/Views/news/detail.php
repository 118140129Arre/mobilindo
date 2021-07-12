<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link href="/css/sosmed.css" rel="stylesheet">
    <link href="/css/layanansim.css" rel="stylesheet">

</head>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <!-- gambar atas -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slide/news.jpg" class="d-block w-100" alt="slide1">
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
            <p><a href="<?= base_url('/'); ?>" class=" link-primary">Home &nbsp;&nbsp;</a><a href="<?= base_url('/berita'); ?>">> &nbsp;&nbsp; Berita&nbsp;&nbsp;</a><a href="<?= base_url('/news'); ?>">> &nbsp;&nbsp; News&nbsp;&nbsp;</a><a href="<?= base_url('/news/layanansim'); ?>">> &nbsp;&nbsp; Layanan SIM</a></p>
        </div>
    </div>
</div>
<!-- akhir link -->
<br>



<div class="container-sm">
    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <img src="/img/berita/news/<?= $news['gambarindex']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-uppercase"><?= $news['judul']; ?></h5>
                    <p class="card-text">
                        <?= $news['deskripsi']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <p><a href="<?= base_url('news'); ?>" class=" link-primary">Kembali</a></p>
</div>






<?= $this->endSection(); ?>