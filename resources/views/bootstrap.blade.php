<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <title>BNCC | Bootstrap</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lorem Ipsum</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="body d-flex justify-content-center align-items-center text-white" style="background-image: url({{ asset('assets/wallpaper.jpeg') }})">

        <form class="" action="" method="POST">
            <h1>Formulir</h1>
            <div class="bungkus">
                <div class="name">
                    <label for="nama">Nama</label>
                    <input name="nama" type="text">
                </div>
                <div class="age">
                    <label for="umur">Umur</label>
                    <input name="umur" type="number">
                </div>
                <div class="tanggal">
                    <label for="date-form">Tanggal</label>
                    <input name="date-form" type="date">
                </div>
                <div class="button-submit">
                    <button class="btn-submit">
                        <p>Submit</p>
                    </button>
                </div>
            </div>
        </form>

    </div>

    <div class="d-flex flex-column justify-content-center align-items-center bg-pink text-white position-absolute bottom-0 w-100">
        <div class="d-flex justify-content-center align-items-center gap-2 mt-2">
            <img class="logo-footer" src="{{ asset('assets/logo.png') }}" alt="">
            <p class="fs-2 fw-bold m-0 d-flex justify-content-center">Lorem Ipsum</p>
        </div>
        <div class="footer-info">
            <p>Lorem Ipsum Street</p>
            <div class="d-flex gap-2 justify-content-center">
                <img src="{{ asset('assets/ig.png') }}" alt="">
                <img src="{{ asset('assets/email.png') }}" alt="">
            </div>
            <p class="mb-2 d-flex justify-content-center">Copyright 2022</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
