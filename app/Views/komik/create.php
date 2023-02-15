<!--Pemanggilan template-->
<?= $this->extend('layout/sidebar'); ?>

<!--ISI CONTENT-->
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="mb-4 badge bg-primary text-warning fs-2" style="width: 30rem;">Form Tambah Komik</div>
            <form action="<?= base_url('/komik/save'); ?>" method="post" >
                <?= csrf_field(); ?>
                <div class="mb-2">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" required oninvalid="this.setCustomValidity('Judul tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= old('judul'); ?>">
                    <div class="invalid-feedback">
                        Komik sudah terdaftar
                    </div>
                </div>
                <div class="mb-2">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control <?= ($validation->hasError('penulis')) ? 'is-invalid' : ''; ?>" id="penulis" name="penulis" required oninvalid="this.setCustomValidity('Penulis tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= old('penulis'); ?>">
                </div>
                <div class="mb-2">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit'); ?>">
                </div>
                <div class="mb-4">
                    <label for="cover" class="form-label">Cover</label>
                    <input type="text" class="form-control" id="cover" name="cover" value="<?= old('cover'); ?>">
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-outline-warning" type="button" id="inputGroupFileAddon03">Button</button>
                    <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                </div>
                <button type="submit" class="btn btn-primary">Tambahkan</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>