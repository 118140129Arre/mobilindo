<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link href="/css/sosmed.css" rel="stylesheet">
    <link href="/css/carddaftarmobil.css" rel="stylesheet">
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
            <p><a href="<?= base_url('admin'); ?>" class=" link-primary">Admin &nbsp;&nbsp; </a><a href="<?= base_url('admin/daftarmobiladmin'); ?>"> > &nbsp;&nbsp;Daftar Mobil Admin</a> </p>
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control border-primary" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
                    <button class="btn btn-outline-primary btn-custom" type="submit" id="button-addon2" name="submit">Cari</button>

                    <small id="emailHelp" class="form-text text-muted">Cari berdsarkan : Merek Mobil, Nama Mobil, Tahun Pembuatan, Transmisi, Plat nomor.</small>
                </div>
            </form>
        </div>
    </div>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($mobil as $m) : ?>
            <div class="col">
                <div class="card h-100">
                    <a href="/admin/detailmobiladmin/<?= $m['slug']; ?>"><img src="/img/daftarmobil/<?= $m['gambar']; ?>" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h4 class="card-title text-uppercase"><?= $m['merek']; ?> <?= $m['nama']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                        <p class="card-text fw-light text-muted text-uppercase"><?= $m['tahun']; ?> | <?= $m['transmisi']; ?> TRANSMISSION | <?= $m['kapasitas_mesin']; ?> CC | <?= $m['kilometer']; ?> KM</p>
                        <p class="card-text harga text-primary">RP <?= $m['harga']; ?></p>
                        <a href="/admin/detailmobiladmin/<?= $m['slug']; ?>" class="card-link">Selengkapya ></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <br>
    <?= $pager->links("daftarmobil", "mobil_pagination"); ?>
</div>
<br>
<?= $this->endSection(); ?>