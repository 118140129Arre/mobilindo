<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link href="/css/sosmed.css" rel="stylesheet">
</head>

<br><br>
<div class="container text-center">
    <div class="row text-center row-cols-2 row-cols-md-1 g-4">
        <div class="col border border-primary border-5 mt-5 mb-5">
            <h1 class="text-center">Menu Input</h1>
            <br><br>
            <a href="/admin/adminmobil" class="btn btn-primary">Mobil</a>
            <a href="/admin/adminnews" class="btn btn-primary">News</a>
            <a href="/admin/admintips" class="btn btn-primary">Tips</a>
            <a href="/admin/adminpedia" class="btn btn-primary">Pedia</a><br><br>
        </div>
        <div class="col border border-danger border-5 mt-5 mb-5">
            <h1 class="text-center">Menu Edit & Delete</h1>
            <br><br>
            <a href="/admin/daftarmobiladmin" class="btn btn-danger">Mobil</a>
            <a href="/admin/newsadmin" class="btn btn-danger">News</a>
            <a href="/admin/tipsadmin" class="btn btn-danger">Tips</a>
            <a href="/admin/pediaadmin" class="btn btn-danger">Pedia</a><br><br>
        </div>

    </div>
    <br><br><br>
    <a class="btn btn-warning text-center" href="<?= base_url('login/logout'); ?>" role="button">Logout</a>
</div>
<br><br><br><br>
<?= $this->endSection(); ?>