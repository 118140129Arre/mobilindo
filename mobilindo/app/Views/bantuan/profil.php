<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link href="/css/sosmed.css" rel="stylesheet">
</head>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

    <!-- gambar atas -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/slide/profil.jpg" class="d-block w-100" alt="slide1">
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
            <p><a href="<?= base_url('/'); ?>" class=" link-primary">Home &nbsp;&nbsp;</a><a href="<?= base_url('/bantuan/profil'); ?>">> &nbsp;&nbsp; Profil</a></p>
        </div>
    </div>
</div>
<!-- akhir link -->
<br>
<!-- atas -->
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-light">
                <div class="card-body text-center">
                    <p class="card-title fs-2 text-dark text-uppercase">Selamat Datang di BDL Mobilindo!</p>
                    <p class="card-text"> BDL Mobilindo adalah perusahaan yang menjual mobil bekas terkemuka di Indonesia dengan pengalaman lebih dari 30 tahun dan merupakan anak usaha Astra. Kami menawarkan pengalaman beli mobil bekas berkualitas dengan proses mudah, aman dan nyaman.

                        BDL Mobilindo menjual mobil bekas yang lebih dari sekedar berkualitas namun juga dielngkapi dengan jaminan buyback guarantee dan benefit after sales service melalui mobicare. Sesuai dengan misinya yaitu memberikan pengalaman beli mobil yang aman dan nyaman.

                        Kami menjual beragam merek dan tipe mobil yang semuanya telah melalui proses quality control yang sangat ketat sehingga siap untuk kamu bawa pulang. Saat ini BDL Mobilindo memiliki 20 jaringan showroom yang ada di kota-kota besar di Indonesia.

                        Kini, tanpa harus datang ke showroom, kamu bisa mencari juga melakukan transaksi pembelian, booking hingga mengajukan kredit secara online. Cari mobil bekas semakin mudah, aman dan nyaman di BDL Mobilindo!</p>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <!-- end atas -->


    <!-- 3atas -->
    <div class="row ">
        <div class="col">
            <div class="card border-light">
                <div class="card-body text-center">
                    <p class="card-title fs-2 text-dark text-uppercase">BDL Mobilindo Menawarkan Solusi Jual Beli Mobil Bekas</p>
                    <p class="card-text"> BDL Mobilindo hadir memberi solusi untuk kebutuhan jual dan beli mobil bekas. Sebagai showroom mobil bekas terbesar kamu dapat melakukan transaksi jual, beli dan tukar tambah dengan proses yang mudah, aman dan nyaman. Selain melayani kebutuhan kamu sebagai perorangan, kami juga dapat membantu korporasi.</p>
                </div>
            </div>
        </div>


        <div class="row row-cols-3 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="/img/profil/jual.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Beli Mobil</h5>
                        <p class="card-text">Di BDL Mobilindo kamu dapat mencari beragam pilihan merek dan tipe mobil. Dan kini melakukan transaksi beli mobil tidak harus datang ke showroom, kamu bisa melakukan transaksi secara online. Untuk mempermudah kamu membeli mobil impian, kami menawarkan opsi pembayaran baik cash maupun kredit yang pastinya dengan proses yang mudah. Seluruh mobil yang kami jual sudah melalui proses quality control dan telah dilengkapi dengan jaminan buyback guarantee.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/profil/beli.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jual Mobil</h5>
                        <p class="card-text">Mau jual mobil? BDL Mobilindo akan membeli kendaraan kamu dengan dengan proses yang mudah serta tanpa pelantara dan tanpa biaya komisi. Staf appraisal kami yang handal akan menilai mobil yang ingin kamu jual dengan penilaian yang fair. Dan tentu dengan jaminan penyelesaian pembayaran mobil yang sudah kamu jual ke kami dengan proses cepat dan aman.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="/img/profil/tt.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tukar Tambah</h5>
                        <p class="card-text">Mau ganti mobil? Tukar tambah saja di BDL Mobilindo. Jual mobil lamamu dan ganti dengan mobil yang lebih baru, tinggal pilih beragam mobil yang ada di showroom kami. Prosesnya cepat dan aman.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 3atas -->
    <br><br><br><br>


    <p class="card-title text-uppercase text-center fs-2 text-primary">Kenapa Beli Mobil di BDL Mobilindo?</p>
    <div class="row row-cols-2 g-1">
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/cekberkas.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">Buyback Guarantee</p>
                <p class="card-text">
                    Seluruh mobil yang kami jual sudah dilengkapi jaminan pembelian kembali atau buyback guarantee jika mobil yang kamu beli tidak memenuhi syaratsyarat mobil bekas berkualitas, yaitu: dokumen lengkap dan asli, bukan bekas tabrak atau banjir, nomor rangka dan mesin sesuai dengan BPKB & STNK, kilometer di odometer tidak diputar balik. Untuk memastikan jaminan ini, kamu akan menerima Buku Garansi.
                </p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">Easy Transaction</p>
                <p class="card-text">
                    Pilih opsi pembayaran yang paling sesuai dengan kebutuhanmu, secara tunai mapun kredit, semuanya mudah, aman, dan tanpa ribet. Kami bekerja sama dengan perusahaan leasing terkemuka dan terpercaya untuk kenyamananmu ketika memilih opsi kredit. Kamu juga bisa pilih, mau transaksi via online atau langsung datang ke showroom BDL Mobilindo terdekat di kotamu.</p>
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/bayar.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <img class="img-fluid" src="/img/ch-so/kostumer.jpg" alt="">
            </div>
        </div>
        <div class="col">
            <div class="card-body">
                <p class="card-title fs-1">Quality Control</p>
                <p class="card-text">
                    Kamu bisa pilih mobil di BDL Mobilindo dengan tenang karena semua mobil kami telah lulus proses seleksi dan quality control yang ketat. Jadi, kamu bisa langsung mengendarai mobil yang kamu beli tanpa rasa khawatir!</p>
            </div>
        </div>
    </div>
    <br><br>

    <div class="row border-light text-center">
        <div class="col">
            <div class="card-text fs-4">Cari Mobil</div><br>
            <button type="button" class="btn btn-primary" style="border-radius: 25px 25px 25px 25px;">Cek Daftar Mobil</button>
        </div>
    </div>
    <!-- end cari mobil -->
    <br>
</div>
<!-- kontainer -->
<?= $this->endSection(); ?>