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
        <form action="<?php echo base_url('daftarmobil/update/' . $mobil['id']); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <input type="hidden" name="gambarLama" value="<?= $mobil['gambar']; ?>">
            <input type="hidden" name="slide-1Lama" value="<?= $mobil['slide-1']; ?>">
            <input type="hidden" name="slide-2Lama" value="<?= $mobil['slide-2']; ?>">
            <input type="hidden" name="slide-3Lama" value="<?= $mobil['slide-3']; ?>">
            <input type="hidden" name="slide-4Lama" value="<?= $mobil['slide-4']; ?>">
            <input type="hidden" name="slide-5Lama" value="<?= $mobil['slide-5']; ?>">
            <input type="hidden" name="slide-6Lama" value="<?= $mobil['slide-6']; ?>">
            

            <div class="row">
                <h1 class="text-center mb-5 mt-3">Masukkan data Mobil</h1>
                <div class="col">
                    <div class="mb-3">
                        <label for="merek" class="form-label">Merek</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['merek']; ?>" id="merek" name="merek" autofocus>
                        <small id="emailHelp" class="form-text text-muted">Toyota, Suzuki, Honda, dll.</small>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['nama']; ?>" id="nama" name="nama">
                        <small id="emailHelp" class="form-text text-muted">Moblio, Ayla, Terios, dll.</small>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">slug</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['slug']; ?>" id="slug" name="slug">
                        <small id="emailHelp" class="form-text text-muted">honda-mobilio-(1A..), daihatsu-terios-(1A..), dll.</small>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">tahun</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['tahun']; ?>" id="tahun" name="tahun">
                        <small id="emailHelp" class="form-text text-muted">Tahun Pembuatan.</small>
                    </div>
                    <div class="mb-3">
                        <label for="transmisi" class="form-label">transmisi</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['transmisi']; ?>" id="transmisi" name="transmisi">
                        <small id="emailHelp" class="form-text text-muted">Manual / Automatic.</small>
                    </div>
                    <div class="mb-3">
                        <label for="berlaku" class="form-label">berlaku</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['berlaku']; ?>" id="berlaku" name="berlaku">
                        <small id="emailHelp" class="form-text text-muted">Tanggal pajak berakhir.</small>
                    </div>
                    <div class="mb-3">
                        <label for="kepemilikan" class="form-label">Kepemilikan</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['kepemilikan']; ?>" id="kepemilikan" name="kepemilikan">
                        <small id="emailHelp" class="form-text text-muted">Jumlah kepemilikan mobil (angka : 1,2,3...).</small>
                    </div>
                    <div class="mb-3">
                        <label for="kilometer" class="form-label">Kilometer</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['kilometer']; ?>" id="kilometer" name="kilometer">
                        <small id="emailHelp" class="form-text text-muted">Jumlah kilometer yang sudah ditempuh.</small>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['harga']; ?>" id="harga" name="harga">
                        <small id="emailHelp" class="form-text text-muted">RP 100,000,00.</small>
                    </div>
                    <div class="mb-3">
                        <label for="bahan-bakar" class="form-label">Bahan Bakar</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['bahan-bakar']; ?>" id="bahan-bakar" name="bahan-bakar">
                        <small id="emailHelp" class="form-text text-muted">Premium / Pertalite / Pertamax , dll.</small>
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="kapasitas_mesin" class="form-label">Kapasistas Mesin</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['kapasitas_mesin']; ?>" id="kapasitas_mesin" name="kapasitas_mesin">
                        <small id="emailHelp" class="form-text text-muted">Diisi angka</small>
                    </div>
                    <div class="mb-3">
                        <label for="platnomor" class="form-label">Plat Nomor</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['platnomor']; ?>" id="platnomor" name="platnomor">
                        <small id="emailHelp" class="form-text text-muted">Ganjil / Genap.</small>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" value="<?php echo $mobil['deskripsi']; ?>" id="deskripsi" name="deskripsi">
                        <small id="emailHelp" class="form-text text-muted">Kondisi Mobil.</small>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="gambar1" class="form-label">Gambar</label>
                        <input type="text" class="form-control" value="" id="gambar" name="gambar1">
                        <small id="emailHelp" class="form-text text-muted">Nama file dari gambar : toyota.jpg / honda.png</small>
                    </div> -->

                    <!-- input gambar -->
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control" value="<?php echo  $mobil['gambar']; ?>" type="file" id="gambar" name="gambar">
                        <small id="gambar" class="form-text text-muted">Nama file dari gambar : toyota.jpg / honda.png</small>
                    </div>
                    <!-- input gambar -->


                    <div class="mb-3">
                        <label for="slide-1" class="form-label">Slide-1</label>
                        <input class="form-control" value="<?php echo $mobil['slide-1']; ?>" type="file" id="slide-1" name="slide-1">
                        <small id="slide-1" class="form-text text-muted">Nama file dari gambar : toyota.jpg / honda.png</small>
                    </div>
                    <div class="mb-3">
                        <label for="slide-2" class="form-label">Slide-2</label>
                        <input class="form-control" value="<?php echo $mobil['slide-2']; ?>" type="file" id="slide-2" name="slide-2">
                        <small id="slide-2" class="form-text text-muted">Nama file dari gambar : toyota.jpg / honda.png</small>
                    </div>
                    <div class="mb-3">
                        <label for="slide-3" class="form-label">Slide-3</label>
                        <input class="form-control" value="<?php echo $mobil['slide-3']; ?>" type="file" id="slide-3" name="slide-3">
                        <small id="slide-3" class="form-text text-muted">Nama file dari gambar : toyota.jpg / honda.png</small>
                    </div>
                    <div class="mb-3">
                        <label for="slide-4" class="form-label">Slide-4</label>
                        <input class="form-control" value="<?php echo $mobil['slide-4']; ?>" type="file" id="slide-4" name="slide-4">
                        <small id="slide-4" class="form-text text-muted">Nama file dari gambar : toyota.jpg / honda.png</small>
                    </div>
                    <div class="mb-3">
                        <label for="slide-5" class="form-label">Slide-5</label>
                        <input class="form-control" value="<?php echo $mobil['slide-5']; ?>" type="file" id="slide-5" name="slide-5">
                        <small id="slide-5" class="form-text text-muted">Nama file dari gambar : toyota.jpg / honda.png</small>
                    </div>
                    <div class="mb-3">
                        <label for="slide-6" class="form-label">Slide-6</label>
                        <input class="form-control" value="<?php echo $mobil['slide-6']; ?>" type="file" id="slide-6" name="slide-6">
                        <small id="slide-6" class="form-text text-muted">Nama file dari gambar : toyota.jpg / honda.png</small>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        <br>
    </div>
    <div class="col text-center">
        <a href="<?= base_url('admin/'); ?>"><button type="submit" class="btn btn-primary">Kembali</button></a>
    </div>
    <br>
</div>
<?= $this->endSection(); ?>