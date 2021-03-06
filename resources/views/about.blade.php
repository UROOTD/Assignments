<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('image\logo.png') }}" type="x-icon">
    <title>UROOTD</title>
    <!-- custom css file link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

    <!-- header section starts  -->
    <header>
        <!-- awal navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffeee3;">
            <div class="container">
                <a class="navbar-brand" style="color:#f36b60;" href="{{ route('landing') }}">
                    <img src="{{ asset('image\logoss.png') }}" alt="" width="70" class="d-inline-block "
                        id=beranda>#UROOTD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}">Beranda</a>
                        </li>
                    </ul>
                    @auth
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Halo, {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-dark" href="" style="float:left;">Logout</button>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    @endauth
                    @guest
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}"><button
                                    class="btn btn-1">Masuk</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('regist') }}"><button
                                    class="btn btn-3">Daftar</button></a>
                        </li>
                    </ul>
                    @endguest
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->
    </header>
    <!-- header section ends -->

    <!-- about section starts  -->
    <section class="about" id="about" style="background:url('{{ asset('image/bnr.png') }}'); background-repeat: no-repeat; display: flex;
    align-items: center;
    min-height: 100vh;  background-size: cover;
    background-position: center;">
        <div class="content">
            <br><br><br>
            <h3>Apa itu UROOTD?</h3>
            <p>UROOTD adalah sebuah website yang memberi rekomendasi outfit untuk menunjang kebutuhan pengguna.</p>
            <h3>Bagaimana UROOTD bekerja?</h3>
            <p>Rekomendasi outfit yang diberikan oleh UROOTD terbagi menjadi beberapa kategori yaitu teratas, terbaru,
                wanita, dan pria. kamu dapat dengan mudah menggunakannya hanya dengan memilih kategori sesuai
                kebutuhanmu.</p>
            <h3>Mengapa harus pilih UROOTD?</h3>
            <p>Karena UROOTD dapat membantu mempermudah kamu dalam menentukan Outfit Of The Day kapanpun dan dimanapun
                yang berbasis website sehingga dapat diakses dengan mudah melalui smartphone maupun komputer.</p>
            <br><br><br>
        </div>
    </section>
    <!-- about section ends -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <div class="credit"> Copyright &copy; 2021 - <span> UROOTD </span> | All Rights Reserved </div>


</body>

</html>
