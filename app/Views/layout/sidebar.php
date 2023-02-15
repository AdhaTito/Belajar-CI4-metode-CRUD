<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="<?= base_url('../css/style-sidebar.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('../css/style1.css'); ?>">
    <link href="<?= base_url('../bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title><?= $title; ?></title>

</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="<?= base_url('../images/Logo AM.png'); ?>" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Adha Manga</span>
                    <span class="profession">Web CRUD (CI4)</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <li class="nav-link">
                    <a href=" <?= base_url('/'); ?>">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="<?= base_url('/komik'); ?>">
                        <i class='bx bx-table icon'></i>
                        <span class="text nav-text">Table Komik</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="<?= base_url('/user'); ?>">
                        <i class='bx bx-pie-chart-alt icon'></i>
                        <span class="text nav-text">Table Users</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="<?= base_url('/pages/about'); ?>">
                        <i class='bx bx-info-circle icon'></i>
                        <span class="text nav-text">About Me</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-heart icon'></i>
                        <span class="text nav-text">Likes</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-wallet icon'></i>
                        <span class="text nav-text">Wallets</span>
                    </a>
                </li>

            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>
    </nav>



    <section class="jumbotron text-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1" d="M0,224L48,192C96,160,192,96,288,96C384,96,480,160,576,176C672,192,768,160,864,133.3C960,107,1056,85,1152,106.7C1248,128,1344,192,1392,224L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
    </section>

    <!-- Isi Content -->
    <?= $this->renderSection('content'); ?>


    <!-- java Script -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--java script end-->
    <!-- java script gambar inputan -->
    <script>
        function previewImg() {
            const cover = document.querySelector('#cover');
            const coverLabel = document.querySelector('.form-control');
            const imgPreview = document.querySelector(".img-preview");

            coverLabel.textContent = cover.files[0].name;

            const fileCover = new FileReader();
            fileCover.readAsDataURL(cover.files[0]);
            fileCover.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>

    <footer class="bg-primary text-white text-center pb-3">
        <p>Visit us on my facebook <a href="https://www.facebook.com/zitcheron.zitcheron" class="text-white fw-bold">Adha Mastito</a></p>
    </footer>
</body>

</html>