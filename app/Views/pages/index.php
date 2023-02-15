<?= $this->extend('layout/sidebar'); ?>

<?= $this->section('content'); ?>
<!-- Navbar -->

<body class="bg">
    
    <!--Css tambahan-->
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
    <!--End CSS-->
    <main class="">
        <div class="px-4 py-5 my-5 mb-8 mt-1 text-center">
            <img class="d-block mx-auto mb-4" src="../images/foto tito.png" alt="" width="240">
            <h1 class="display-5 fw-bold">Tampilan Home</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Sub Judul</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
                <div class="container px-5">
                    <img src="https://img.freepik.com/premium-photo/desktop-source-code-wallpaper-by-computer-language-with-coding-programming_33771-595.jpg?w=2000" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../images/cover6.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Deskripsi dengan gambar</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
                        popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                        extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    </div>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Contact Me</h1>
                    <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each
                        required form group has a validation state that can be triggered by attempting to submit the form without
                        completing it.</p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" id="floatingInput"></textarea>
                            <label for="floatingInput">Komentar Anda</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
                        <hr class="my-4">
                        <small class="text-muted">Terima Kasih atas saran dan masukan Anda</small>
                    </form>
                </div>
            </div>
        </div>

        <div class="b-example-divider"></div>

        <div class="bg-dark text-secondary px-4 py-5 text-center">
            <div class="py-5">
                <h1 class="display-5 fw-bold text-white">Dark mode hero</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                        most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                        extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?= $this->endSection(); ?>