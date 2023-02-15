<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>

<link rel="stylesheet" href="<?= base_url('../css/style-sidebar.css'); ?>">

<body background="">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-primary mb-5">Detail Komik</h1>
                <div class="card" style="width: 18rem;">
                    <img src="/images/<?= $komik['cover']; ?>" class="card-img-top" width="300px" height="300px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $komik['judul']; ?></h5>
                        <p class="card-text"><b>Penulis :</b> <?= $komik['penulis']; ?></p>
                        <p class="card-text"><small class="text-muted"><b>Penerbit :</b> <?= $komik['penerbit']; ?></p> </small>
                        <p class="card-text"><small class="text-muted"><b>Sinopsis :</b>
                                <P><?= $komik['sinopsis']; ?></P>
                            </small></p>
                        <br><br>
                        <a href="<?= base_url('/komik'); ?>" class="btn btn-primary btn-sm">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0d6efd" fill-opacity="1" d="M0,192L48,176C96,160,192,128,288,144C384,160,480,224,576,224C672,224,768,160,864,160C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>
<?= $this->endSection(); ?>