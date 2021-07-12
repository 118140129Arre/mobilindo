<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link href="/css/sosmed.css" rel="stylesheet">
    <link href="/css/pediaindex.css" rel="stylesheet">
</head>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <!-- gambar atas -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slide/pedia.jpg" class="d-block w-100" alt="slide1">
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
            <p><a href="<?= base_url('/admin'); ?>" class=" link-primary">Admin &nbsp;&nbsp;</a><a href="<?= base_url('/admin/pediaadmin'); ?>">> &nbsp;&nbsp; Pedia Admin&nbsp;&nbsp;</a></p>
        </div>
    </div>
</div>
<!-- akhir link -->
<br>

<div class="container">
    <div class="row row-cols-2">
        <?php foreach ($pedia as $p) : ?>
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="/admin/detailpediaadmin/<?= $p['slug']; ?>"><img class="imgcard" src="/img/berita/pedia/<?= $p['gambarindex']; ?>" alt="Photo of sunset"></a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase"><?= $p['judul']; ?></h5>
                                <a href="/admin/detailpediaadmin/<?= $p['slug']; ?>" class=" card-link"><?= $p['deskripsiindex']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>






<?= $this->endSection(); ?>