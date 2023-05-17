<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SINAU | BERANDA</title>
  <link rel="shortcut icon" type="image/png" href="/image/logo2.png" />
  <!--Css-->
  <link rel="stylesheet" href="/css/landingpage.css">
  <link rel="stylesheet" href="/css/navbar.css">
  <link rel="stylesheet" href="/css/riview.css">
  <link rel="stylesheet" href="/css/materi.css">
  <link rel="stylesheet" href="/css/team.css">
  <!--SwiperCss-->
  <link rel="stylesheet" href="/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!--CDN Boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
  <!--CDN Icon Boostrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
  <!--Cdn BoxIcon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">



</head>

<body>
  <!--Awal Navbar-->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand logo" href="#">
        <img src="/image/logo2.png" alt="logo">
      </a>
      <div class="nama-logo text-light pt-2">
        <h6>SINAU</h6>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item down">
            <a class="nav-link active text-white" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item down">
            <a class="nav-link active text-white" aria-current="page" href="/materi">Materi</a>
          </li>
          <li class="nav-item down">
            <a class="nav-link text-white" href="/team">Team</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Akhir Navbar-->

    @yield('section')

  <!--Awal Footer-->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#000000" fill-opacity="1"
      d="M0,128L48,106.7C96,85,192,43,288,58.7C384,75,480,149,576,181.3C672,213,768,203,864,181.3C960,160,1056,128,1152,128C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
  <footer id="footer">
    <div class="container">
      <div class="row">
        <h3>ITATS | Pemrograman Web Lanjut <i class="bi bi-c-circle text-white"></i> 2023</h3>
      </div>
    </div>
  </footer>
  <!--Akhir Footer-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
  <!--Swiper Script-->
  <script src="/js/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="/js/script.js"></script>
</body>

</html>