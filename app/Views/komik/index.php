<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <h1>Daftar Komik</h1>
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <a href="<?= base_url('/komik/create'); ?>" class="btn btn-primary mb-4">Tambah Komik</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                COBA
            </button>
            <!-- End Button -->

            <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img class="sampul" src="/images/<?= $k['cover']; ?>"></td>
                            <td><?= $k['judul']; ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Edit
                                </button>

                                <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Create-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('/komik/save'); ?>" method="post">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create Komik</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Inputan -->
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user<?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?> " id="judul" name="judul" placeholder="Masukkan Judul Komik" required oninvalid="this.setCustomValidity('Judul tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= old('judul'); ?>">
                            <div class=" invalid-feedback">
                                Komik sudah terdaftar
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="penulis" name="penulis" placeholder="Masukkan Penulis Komik" required oninvalid="this.setCustomValidity('Penulis tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= old('judul'); ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan Penerbit Komik" required oninvalid="this.setCustomValidity('Penerbit boleh kosong')" oninput="setCustomValidity('')" value="<?= old('judul'); ?>">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="cover" name="cover" placeholder="Masukkan Cover Komik">
                        </div>
                    </div>
                    <!-- End Inputan -->
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control " id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- End Modal Create -->

    <!-- Modal Edit -->

    <!-- End Mocal Edit -->
</div>

<?= $this->endSection(); ?>