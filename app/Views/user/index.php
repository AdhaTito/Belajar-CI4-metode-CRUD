<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>

<link rel="stylesheet" href="../css/style-sidebar.css">

<body background="">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center text-primary mb-5">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Daftar Users</h1>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="d-flex justify-content-between">
                    <!-- button tambah data user -->
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambahkan Data Users
                    </button>
                    <div class="col-3">
                        <!-- Searching -->
                        <form action="" method="post">
                            <div class="input-group mb-2 ">
                                <input type="search" class="form-control" placeholder="Cari Users.." name="keyword">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- table -->
                <table class="table table-primary table-striped border-info ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (10 * ($currentPage - 1)); ?>
                        <?php foreach ($user as $u) : ?>
                            <tr>
                                <td scope="row"><?= $i++; ?></td>
                                <td><?= $u['nama']; ?></td>
                                <td><?= $u['email']; ?></td>
                                <td>
                                    <!-- Button Hapus -->
                                    <form action="/user/<?= $u['id']; ?>" method="post" class="d-inline">
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
                <!-- end table -->
                <?= $pager->links('user', 'pagination_user') ?>
            </div>
        </div>

        <!-- Modal Create-->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="<?= base_url('/user/save'); ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Create Data Users</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama User" required oninvalid="this.setCustomValidity('Nama User tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= old('nama'); ?>">
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email User" required oninvalid="this.setCustomValidity('Penerbit tidak boleh kosong')" oninput="setCustomValidity('')" value="<?= old('email'); ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Data</button>
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