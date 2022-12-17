<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center mb-5">Detail Komik</h2>
            <div class="card" style="width: 18rem;">
                <img src="/images/<?= $komik['cover']; ?>" class="card-img-top" width="300px" height="300px" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $komik['judul']; ?></h5>
                    <p class="card-text"><b>Penulis :</b> <?= $komik['penulis']; ?></p>
                    <p class="card-text"><small class="text-muted"><b>Penerbit :</b> <?= $komik['penerbit']; ?></p> </small>

                    <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>

                    <!-- Menggunakan Form Agar tidak dimanipulasi di URL -->
                    <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apa Anda Yakin ?');">Hapus</button>
                    </form>

                    <br><br>
                    <a href="<?= base_url('/komik'); ?>" class="btn btn-primary btn-sm">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>