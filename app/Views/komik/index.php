<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>

<link rel="stylesheet" href="<?= base_url('../css/style-sidebar.css'); ?>">

<body background="">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center text-primary">
                    <h1 class="display-5 fw-bold lh-1 mb-5">Daftar Komik</h1>
                    <!-- Untuk Flas Data Berhasil -->
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- Untuk Flas Data Tidak Berhasil -->
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="d-flex justify-content-between">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Komik
                    </button>
                    <!-- Seacrhing -->
                    <div class="col-3">
                        <form action="" method="post">
                            <div class="input-group mb-2">
                                <input type="search" class="form-control" placeholder="Cari Komik.." name="keyword2">
                            </div>
                        </form>
                    </div>
                </div>

                <table class="table table-primary table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                        <?php foreach ($komik as $k) : ?>
                            <tr>
                                <td scope="row"><?= $i++; ?></td>
                                <td><img class="sampul" src="/images/<?= $k['cover']; ?>"></td>
                                <td><?= $k['judul']; ?></td>
                                <td>
                                    <!-- Button Detail -->
                                    <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success btn-sm">Detail</a>
                                    <!-- Button Edit -->
                                    <a href="/komik/edit/<?= $k['slug']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <!-- Button Hapus -->
                                    <form action="/komik/<?= $k['id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apa Anda Yakin ?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tr>
                    </tbody>
                </table>
                <?= $pager->links('komik', 'pagination_komik') ?>
            </div>
        </div>

        <!-- Modal Create-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?= base_url('/komik/save'); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Form Create Komik</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Inputan -->
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?> " id="judul" name="judul" placeholder="Masukkan Judul Komik" required oninvalid="this.setCustomValidity('Judul tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= old('judul'); ?>">
                                <div class=" invalid-feedback">
                                    Komik sudah terdaftar
                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="penulis" name="penulis" placeholder="Masukkan Penulis Komik" required oninvalid="this.setCustomValidity('Penulis tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= old('penulis'); ?>">
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan Penerbit Komik" required oninvalid="this.setCustomValidity('Penerbit tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= old('penerbit'); ?>">
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <textarea type="text" class="form-control form-control-user" id="sinopsis" name="sinopsis" placeholder="Masukkan Sinopsis Komik"></textarea>
                            </div>
                        </div>
                        <!-- End Inputan -->
                        <div class="modal-body">
                            <label for="cover" class="form-label mb-1">Masukan Cover Komik</label>
                            <div class="col-sm-3 mb-2">
                                <img src="/images/thumbnail.png" class="img-thumbnail img-preview">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="cover" name="cover" onchange="previewImg()" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->
    </div>
</body>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0d6efd" fill-opacity="1" d="M0,192L48,176C96,160,192,128,288,144C384,160,480,224,576,224C672,224,768,160,864,160C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>

<?= $this->endSection(); ?>