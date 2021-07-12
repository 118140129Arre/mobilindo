<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link href="/css/sosmed.css" rel="stylesheet">
</head>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
</svg>


<!-- flashdata -->
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    </div>
<?php endif; ?>
<!-- end flashdata -->

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

<div class="container-fluid">
    <div class="card-body">
        <form action="/admin/savet" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row">
                <h1 class="text-center mb-5 mt-3">Masukkan Data Tips</h1>
                <div class="col">

                    <!-- input gambar -->
                    <div class="mb-3">
                        <label for="gambarindex" class="form-label">Gambar</label>
                        <input class="form-control" value="<?= old('gambarindex'); ?>" type="file" id="gambarindex" name="gambarindex">
                        <small id="gambarindex" class="form-text text-muted">Nama file dari gambar : ban.jpg / baut.png . Minimal 700x700.</small>
                    </div>
                    <!-- input gambar -->

                    <div class="mb-3">
                        <label for="deskripsiindex" class="form-label">Deskripsi Awal</label>
                        <input type="text" class="form-control" value="<?= old('deskripsiindex'); ?>" id="deskripsiindex" name="deskripsiindex">
                        <small id="deskripsiindex" class="form-text text-muted">Penggalan deskripsi.</small>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" value="<?= old('judul'); ?>" id="judul" name="judul">
                        <small id="judul" class="form-text text-muted">Judul News.</small>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" value="<?= old('deskripsi'); ?>" id="deskripsi" name="deskripsi">
                        <small id="deskripsi" class="form-text text-muted">Deskripsi lengkap.</small>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" class="form-control" value="<?= old('slug'); ?>" id="slug" name="slug">
                        <small id="slug" class="form-text text-muted">Pemasangan-baut-(1A..), pencopotan-ban-(1A..), dll.</small>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <br>
    </div>
    <div class="col text-center">
        <a href="<?= base_url('/admin'); ?>"><button type="submit" class="btn btn-primary">Kembali</button></a>
    </div>
    <br>
</div>
<?= $this->endSection(); ?>