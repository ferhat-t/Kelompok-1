<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Tekfor</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f3ef;
            font-family: "Poppins", sans-serif;
        }
        .navbar {
            background-color: #5c3d2e;
        }
        .navbar-brand, .nav-link, .footer-text {
            color: #fff !important;
        }
        .hero {
            background: url('https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 5px #000;
        }
        .hero h1 {
            color: #fff;
            font-size: 4rem;
            font-weight: bold;
        }
        .menu-card img {
            border-radius: 10px;
        }
        footer {
            background-color: #5c3d2e;
            padding: 20px 0;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark px-4">
        <a class="navbar-brand fw-bold" href="#">CoffeeVibes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <h1>Nikmati Harimu Dengan Kopi Terbaik</h1>
    </section>

    <!-- MENU SECTION -->
    <section id="menu" class="container my-5">
        <h2 class="text-center mb-4 fw-bold">Menu Coffee Favorite</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card menu-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93" class="card-img-top" alt="Latte">
                    <div class="card-body">
                        <h5 class="card-title">Caffè Latte</h5>
                        <p class="card-text">Perpaduan espresso dan susu yang creamy.</p>
                        <p class="fw-bold">Rp 25.000</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card menu-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096" class="card-img-top" alt="Cappuccino">
                    <div class="card-body">
                        <h5 class="card-title">Cappuccino</h5>
                        <p class="card-text">Espresso, susu, dan foam lembut.</p>
                        <p class="fw-bold">Rp 28.000</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card menu-card shadow-sm">
                    <img src="https://images.unsplash.com/photo-1559056199-641a0ac8b55e" class="card-img-top" alt="Mocha">
                    <div class="card-body">
                        <h5 class="card-title">Caffè Mocha</h5>
                        <p class="card-text">Espresso, coklat, dan susu yang manis.</p>
                        <p class="fw-bold">Rp 30.000</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="container my-5">
        <h2 class="text-center fw-bold mb-3">Tentang Kami</h2>
        <p class="text-center px-5">
            Coffetekfor hadir untuk menyuguhkan pengalaman minum kopi terbaik.  
            Kami menggunakan biji kopi pilihan dari petani lokal, diracik oleh barista berpengalaman,  
            dan disajikan dalam suasana yang hangat dan nyaman.
        </p>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="container my-5">
        <h2 class="text-center fw-bold mb-3">Kontak</h2>
        <p class="text-center">Lokasi: Jl. Kedungmundu,Semarang</p>
        <p class="text-center">Email: coffetekfor@gmail.com</p>
        <p class="text-center">Instagram: @Coffetekfor.id</p>
    </section>

    <!-- FOOTER -->
    <footer class="text-center">
        <p class="footer-text mb-0">© 2025 CoffeeVibes. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
