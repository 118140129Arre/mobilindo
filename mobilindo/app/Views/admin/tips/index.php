<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link href="/css/sosmed.css" rel="stylesheet">
    <link href="/css/tipsindex.css" rel="stylesheet">
</head>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <!-- gambar atas -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slide/tips.jpg" class="d-block w-100" alt="slide1">
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
            <p><a href="<?= base_url('/admin'); ?>" class=" link-primary">Admin &nbsp;&nbsp;</a><a href="<?= base_url('/admin/tipsadmin'); ?>">> &nbsp;&nbsp; Tips Admin&nbsp;&nbsp;</a></p>
        </div>
    </div>
</div>
<!-- akhir link -->
<br>

<div class="container">

    <div class="row row-cols-2">
        <?php foreach ($tips as $t) : ?>
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="/admin/detailtipsadmin/<?= $t['slug']; ?>"><img class="imgcard" src="/img/berita/tips/<?= $t['gambarindex']; ?>" alt="Photo of sunset"></a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase"><?= $t['judul']; ?></h5>
                                <a class="card-link" href="/admin/detailtipsadmin/<?= $t['slug']; ?>"><?= $t['deskripsiindex']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>






<?= $this->endSection(); ?>