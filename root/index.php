<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- logo in link  -->
    <link rel="shortcut icon" href="img/logo.png" type="x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="stylesheett.css">
    <title>UROOTD</title>
</head>

<body>
    <header>
        <!-- awal navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffeee3;">
            <div class="container">
                <a class="navbar-brand" style="color:#f36b60;" href="index.php">
                    <img src="img/logoss.png" alt="" width="70" class="d-inline-block " id=beranda>#UROOTD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kategori">Kategori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#kontak">Kontak</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login.html"><button class="btn btn-1">Masuk</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="regist.html"><button class="btn btn-3">Daftar</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->
    </header>

    <!-- awal slider -->
    <section class="beranda" id="beranda">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner" data-aos="fade-up" data-aos-duration="1000">
                <div class="carousel-item active" style="background-image: url('img/bnr.png');">
                    <div class="container-first">
                        <div class="carousel-caption first d-md-block">
                            <h3>#UROOTD</h3>
                            <span>Your Outfit Of The Day</span>
                            <p>Website yang menyediakan berbagai rekomendasi outfit</p>
                            <p>untuk menunjang penampilan terbaikmu setiap harinya.</p>
                            <br>
                            <div class="slider-btn">
                                <a href="about.html"><button class="btn btn-3">Pelajari Lebih Lanjut</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item next" style="background-image: url(img/crsl1.jpg);">
                    <div class="container">
                        <h5>#UROOTD</h5>
                        <p class="txt">Rekomendasi pakaian setiap saat.</p>
                        <br>
                        <div class="slider-btn">
                            <a href="login.html" class="btn btn-1">Masuk</a>
                            <a href="regist.html" class="btn btn-2">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item next" style="background-image: url(img/crsl2.jpg);">
                    <div class="container">
                        <h5>#UROOTD</h5>
                        <p class="txt">Rekomendasi terkini untukmu.</p>
                        <br>
                        <div class="slider-btn">
                            <a href="login.html" class="btn btn-1">Masuk</a>
                            <a href="regist.html" class="btn btn-2">Daftar</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item next" style="background-image: url('img/crsl3.jpg');">
                    <div class="container">
                        <h5>#UROOTD</h5>
                        <p class="txt">Beragam variasi pakaian.</p>
                        <br>
                        <div class="slider-btn">
                            <a href="login.html" class="btn btn-1">Masuk</a>
                            <a href="regist.html" class="btn btn-2">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- akhir slider -->

    <!-- awal kategori -->
    <section class="kategori" id="kategori">
        <h1 class="heading"> Rekomendasi Berdasarkan <span>Kategori</span> </h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6 box-1">
                    <div class="box" data-aos="fade-in">
                        <img src="img/fit4.png" class="img-fluid category-image" alt="">
                        <div class="content">
                            <h3>Wanita</h3>
                            <a href="woman.php" class="btn btn-3">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 box-2">
                    <div class="box" data-aos="fade-in">
                        <img src="img/fit2.png" class="img-fluid category-image" alt="">
                        <div class="content">
                            <h3>Pria</h3>
                            <a href="man.php" class="btn btn-3">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 box-3">
                    <div class="box" data-aos="fade-in">
                        <img src="img/fit.png" class="img-fluid category-image" alt="">
                        <div class="content">
                            <h3>Terbaru</h3>
                            <a href="latest.php" class="btn btn-3">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 box-4">
                    <div class="box" data-aos="fade-in">
                        <img src="img/fit3.png" class="img-fluid category-image" alt="">
                        <div class="content">
                            <h3>Teratas</h3>
                            <a href="top.php" class="btn btn-3">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir kategori -->

    <!-- footer -->
    <section class="kontak" id="kontak">
        <h1 class="heading"> <span> Kontak </span> Kami </h1>
        <footer class="footer">
            <div class="container" data-aos="fade-up" data-aos-duration="1000">
                <div class="row">
                    <div class="footer-col">
                        <h4 id=tentangKami>Akses Cepat</h4>
                        <ul>
                            <li><a href="#beranda">Beranda</a></li>
                            <li><a href="about.html">Tentang Kami</a></li>
                            <li><a href="#kategori">Kategori</a></li>
                            <li><a href="#kontak">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4 id=kontak>Kontak</h4>
                        <ul>
                            <li><a href="#">Jakarta, Indonesia</a></li>
                            <li><a href="#">urootd@gmail.com</a></li>
                            <li><a href="#">+6285308530853</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">

                    </div>
                    <div class="footer-col">
                        <img src="img/logo.png" width="100%">
                    </div>
                </div>
            </div>
        </footer>
        <div class="credit"> Copyright &copy; 2021 - <span> UROOTD </span> | All Rights Reserved </div>
    </section>
    <!-- n footer -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- AOS Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="jsfile.js"></script>

</body>

</html>