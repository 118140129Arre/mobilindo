<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<head>
    <link href="/css/sosmed.css" rel="stylesheet">
    <link href="/css/beritaindex.css" rel="stylesheet">
</head>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slide/berita.jpg" class="d-block w-100" alt="slide1">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container-sm">
    <div class="row">
        <div class="col">
            <p><a href="<?= base_url('/'); ?>" class=" link-primary">Home &nbsp;&nbsp;</a><a href="<?= base_url('/berita'); ?>"> >&nbsp;&nbsp; Berita</a> </p>
        </div>
    </div>
</div>
<br>
<br>
<br>
<div class="container-sm">

    <div class="row">
        <div class="col">
            <div class="card mb-2">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="/news"><img class="imgcard" src="/img/3footer/n.jpg" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">BDL NEWS</h5>
                            <p class="card-text">Dapatkan berita-berita terkini dan terpercaya seputar dunia otomotif</p>
                            <a href="/news" class=" card-link">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card mb-2">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="/tips"><img class="imgcard" src="/img/3footer/t.jpeg" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">BDL TIPS</h5>
                            <p class="card-text">Dapatkan tips-tips menarik dan bermanfaat seputar dunia otomotif</p>
                            <a href="/tips" class=" card-link">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card mb-2">
                <div class="row g-0">
                    <div class="col-md-4">
                        <a href="/pedia"><img class="imgcard" src="/img/3footer/p.jpg" alt="..."></a>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">BDL PEDIA</h5>
                            <p class="card-text">Dapatkan informasi dan pengetahuan terupdate seputar dunia otomotif</p>
                            <a href="/pedia" class=" card-link">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>


<?= $this->endSection(); ?>