<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="stylesheet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymou
      s" />
    <link rel="shortcut icon" href="{{ asset('image\logo.png') }}" type="x-icon">
    <title>UROOTD</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/492fc916a9.js" crossorigin="anonymous"></script>
    <title>UROOTD</title>
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
                            <a class="nav-link" href="#beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->
    </header>
    <br>
    <br>

    <section class="bgg">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-white text-dark" style="border-radius: 1rem">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <img src="{{ asset('image/logo.png') }}" style="width: 150px; height: auto" />
                                <br />
                                <br />
                                <form action="{{ route('login.store') }}" method="post">
                                    @csrf
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    @if (session('status'))
                                    <h5>
                                        {{ session('status') }}
                                    </h5>
                                    @endif
                                    <div class="form-outline form-dark mb-4">
                                        <input type="email" id="email" class="form-control form-control-lg"
                                            name="email" />
                                        <label class="form-label" for="email"
                                            style="font-family: Poppins, sans-serif"><strong>Email</strong></label>
                                        @error('email')
                                        <div>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-outline form-dark mb-4">
                                        <input type="password" id="password" name="password"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="password"
                                            style="font-family: Poppins, sans-serif"><strong>Password</strong></label>
                                        @error('password')
                                        <div>
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <button class="btn btn-outline-dark btn-lg px-5" type="submit">
                                        Login
                                    </button>
                                </form>
                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="{{ route('google.login') }}"
                                        class="text-white btn btn-lg btn-block btn-primary" type="submit"
                                        style="background-color: #000; font-size: 16px"><i
                                            class="fab fa-google fa-lg">&nbsp;&nbsp;</i>Login Dengan
                                        Google</a>
                                </div>
                                <br>
                                <div>
                                    <p class="mb-0" style="color:black">
                                        Belum Punya Akun?
                                        <a href="{{ route('regist') }}" class="text-dark-50 fw-bold"
                                            style="color:black">Registrasi
                                            Sekarang</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
