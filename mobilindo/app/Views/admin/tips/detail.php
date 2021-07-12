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
            <p><a href="<?= base_url('/admin'); ?>" class=" link-primary">Admin &nbsp;&nbsp;</a><a href="<?= base_url('/admin/tipsadmin'); ?>">> &nbsp;&nbsp; News Admin&nbsp;&nbsp;</a><a href="<?= base_url('/admin/detailtipsadmin'); ?>">> &nbsp;&nbsp; Detail News Admin&nbsp;&nbsp;</a></p>
        </div>
    </div>
</div>
<!-- akhir link -->
<br>



<div class="container-sm">

    <a class="btn btn-outline-success" href="<?php echo base_url('tips/edit/' . $tips['id']); ?>" role="button"><i class="fas fa-edit"></i>Edit</a>
    <a href="<?php echo base_url('tips/delete/' . $tips['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $tips['judul']; ?> ini?')"><i class="fas fa-trash-alt"></i>Hapus</a>

    <div class="row">
        <div class="col">
            <div class="card mb-3">
                <img src="/img/berita/tips/<?= $tips['gambarindex']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-uppercase"><?= $tips['judul']; ?></h5>
                    <p class="card-text">
                        <?= $tips['deskripsi']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <p><a href="<?= base_url('admin/tips'); ?>" class=" link-primary">Kembali</a></p>
</div>






<?= $this->endSection(); ?>