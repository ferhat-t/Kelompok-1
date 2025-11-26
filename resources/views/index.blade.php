<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NgopiNgab</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my style -->
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}" />
  </head>
  <body>

    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">ngopi<span>ngab.</span></a>

      <div class="navbar-nav">
        <a href="#">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#contact">Kontak</a>
        <a href="#menu">Menu</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="menu-icon"><i data-feather="menu"></i></a>
    </nav>
    <!-- navbar end -->

    <!-- hero section start -->
     <section class="hero" id="home">
      <main class="content">
        <h1>Mari nikmati secangkir <span>kopi</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, voluptas!</p>
        <a href="#" class="cta">Beli sekarang</a>
      </main>
     </section>
    <!-- hero section end   -->

    <!-- about section start -->
     <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="{{url('frontend/img/about-img.jpg')}}" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa memilih kopi kami?</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis itaque sed laborum ipsum dicta. Quo!</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor sunt magni delectus hic porro quaerat minus accusantium excepturi quos commodi.</p>
        </div>
      </div>
     </section>

    </div>
    <!-- about section end -->
    
    <!-- menu section start -->
    <section id="menu" class="menu">
      <h2><span>Menu</span> Kami</h2>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero amet nihil, dolorem voluptate rem mollitia?</p>

      <div class="row">
       <div class="menu-card">
         <img src="{{url('frontend/img/menu/1.jpg')}}" alt="Espresso" class="menu-card-img">
         <h3 class="menu-card-title"> Espresso </h3>
         <p class="menu-card-price"> IDR 15K </p>
       </div>
       <div class="menu-card">
         <img src="{{url('frontend/img/menu/1.jpg')}}" alt="Espresso" class="menu-card-img">
         <h3 class="menu-card-title"> Espresso </h3>
         <p class="menu-card-price"> IDR 15K </p>
       </div>
       <div class="menu-card">
         <img src="{{url('frontend/img/menu/1.jpg')}}" alt="Espresso" class="menu-card-img">
         <h3 class="menu-card-title"> Espresso </h3>
         <p class="menu-card-price"> IDR 15K </p>
       </div>
       <div class="menu-card">
         <img src="{{url('frontend/img/menu/1.jpg')}}" alt="Espresso" class="menu-card-img">
         <h3 class="menu-card-title"> Espresso </h3>
         <p class="menu-card-price"> IDR 15K </p>
       </div>
       <div class="menu-card">
         <img src="{{url('frontend/img/menu/1.jpg')}}" alt="Espresso" class="menu-card-img">
         <h3 class="menu-card-title"> Espresso </h3>
         <p class="menu-card-price"> IDR 15K </p>
       </div>
      </div>
    </section>
    <!-- menu section end -->

    <!-- contact section start -->
     <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero amet nihil, dolorem voluptate rem mollitia?</p>
      <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126715.79661809068!2d110.33466301449366!3d-7.024722607649911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sKota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1763564339485!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        <form action="">
          <div class="input-grup">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama">
          </div>
          <div class="input-grup">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email">
          </div>
          <div class="input-grup">
            <i data-feather="phone"></i>
            <input type="text" placeholder="nohp">
          </div>
          <button type="submit" class="btn">kirim pesan</button>
        </form>
      </div>
     </section>
    <!-- contact section end -->

    <!-- footer start -->
     <footer>
      
       <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
        <a href="#"><i data-feather="tiktok"></i></a>
       </div>
       <div class="links">
        <a href="#">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#contact">Kontak</a>
        <a href="#menu">Menu</a>
       </div>
  
       <div class="credit">
        <p>Created by <a href="">raihandzaky</a>. | &copy; 2025.</p>
       </div>
     </footer>
    <!-- footer end -->
     
    <!-- feather icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js" >
    </script>
  </body>
</html>
