<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link href="<?= base_url('../bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style1.css">
    <title><?= $title; ?></title>
</head>

<body background="../images/bg2.jpg">
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <h1><a href="index.html" class="logo">M.</a></h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a class="nav-link" href="<?= base_url('/'); ?>"> <span class="fa fa-home"></span> Home</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-user"></span> About</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cogs"></span> Services</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url('/'); ?>"">Home</a>
                            </li>
                            <li class=" nav-item">
                                    <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('/komik'); ?>">Table Komik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?= $this->renderSection('content'); ?>
        </div>
    </div>
</body>

</html>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
<!-- Navbar End -->




<!--Header End -->


<!-- java Script -->
<script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!--java script end-->

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