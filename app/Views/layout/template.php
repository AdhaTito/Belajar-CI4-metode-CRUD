<!--Header -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
    <title><?= $title; ?></title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-lg sticky-top ">
        <div class="container-xl">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">Adha Komik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('/pages/about'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('/komik'); ?>">Daftar Komik</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Genre
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Adventure</a></li>
                            <li><a class="dropdown-item" href="#">Shounen</a></li>
                            <li><a class="dropdown-item" href="#">Horor</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light " type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!--Jumbotron-->
    <section class="jumbotron text-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1" d="M0,224L48,192C96,160,192,96,288,96C384,96,480,160,576,176C672,192,768,160,864,133.3C960,107,1056,85,1152,106.7C1248,128,1344,192,1392,224L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
    </section>

    <!-- java Script -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--java script end-->
</body>
<!--Header End -->

<!-- Isi Content -->
<?= $this->renderSection('content'); ?>

<!--Footer-->
<!--Style gelombang 5-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0d6efd" fill-opacity="1" d="M0,192L48,176C96,160,192,128,288,144C384,160,480,224,576,224C672,224,768,160,864,160C960,160,1056,224,1152,224C1248,224,1344,160,1392,128L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>

<footer class="bg-primary text-white text-center pb-3">
    <p>Visit us on my facebook <a href="https://www.facebook.com/zitcheron.zitcheron" class="text-white fw-bold">Adha Mastito</a></p>
</footer>
<!--Footer End -->