<?= $this->extend('layout/sidebar'); ?>

<!-- Isi Content -->
<?= $this->section('content'); ?>

<link rel="stylesheet" href="<?= base_url('../css/style-sidebar.css'); ?>">

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="mb-4 badge bg-primary text-warning fs-2" style="width: 30rem;">Form Edit Komik</div>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form action="/komik/update/<?= $komik['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                <input type="hidden" name="coverLama" value="<?= $komik['cover']; ?>">
                <div class="mb-2">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" required oninvalid="this.setCustomValidity('Judul tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= $komik['judul']; ?>">
                    <div class="invalid-feedback">
                        Komik sudah terdaftar
                    </div>
                </div>
                <div class="mb-2">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" required oninvalid="this.setCustomValidity('Penulis tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= $komik['penulis']; ?>">
                </div>
                <div class="mb-2">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control <?= ($validation->hasError('penerbit')) ? 'is-invalid' : ''; ?>" id="penerbit" name="penerbit" required oninvalid="this.setCustomValidity('Penerbit tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= $komik['penerbit']; ?>">
                </div>
                <div class="mb-4">
                    <label for="cover" class="form-label">Sinopsis</label>
                    <textarea type="text" class="form-control" id="sinopsis" name="sinopsis"><?= $komik['sinopsis']; ?></textarea>
                </div>
                <div class="mb-4">
                    <label for="cover" class="form-label mb-1">Masukan Cover Komik</label>
                    <div class="col-sm-3 mb-2">
                        <img src="/images/<?= $komik['cover']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="cover" name="cover" onchange="previewImg()" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                    </div>
                </div>
                <button type=" submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0d6efd" fill-opacity="1" d="M0,192L48,176C96,160,192,128,288,144C384,160,480,224,576,224C672,224,768,160,864,160C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>

<?= $this->endSection(); ?>