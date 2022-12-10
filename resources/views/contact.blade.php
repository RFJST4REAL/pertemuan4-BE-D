<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <title>Lorem Ipsum | Contact</title>
</head>
<body>
    {{-- navbar --}}
    <nav>
        <div class="nav-left">
            <img src="{{ asset('assets/logo.png') }}" alt="">
            <a href="/">Lorem Ipsum</a>
        </div>
        <div class="nav-right">
            <a href="/">Home</a>
            <a href="">Achievement</a>
            <a href="">About Us</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>

    {{-- contact --}}
    <div class="container-form">
        <form action="" method="POST">
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

    {{-- Footer --}}
    <div class="footer">
        <div class="footer-logo">
            <img src="{{ asset('assets/logo.png') }}" alt="">
            <p class="footer-title">Lorem Ipsum</p>
        </div>
        <div class="footer-info">
            <p>Lorem Ipsum Street</p>
            <div class="sosmed-img">
                <img src="{{ asset('assets/ig.png') }}" alt="">
                <img src="{{ asset('assets/email.png') }}" alt="">
            </div>
            <p>Copyright 2022</p>
        </div>
    </div>
</div>
</body>
</html>