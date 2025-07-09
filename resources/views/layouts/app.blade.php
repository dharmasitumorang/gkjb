<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'GKJB IC') - Gereja Kristen Jerusalem Baru Impactful Community </title>
    <meta name="description" content="Gereja Kristen Jerusalem Baru Impactful Community">
    <meta name="keywords" content="GKJB, IC, gereja, kharismatik, medan, selambo">

    <!-- Favicons -->
    <link href="{{ asset('GEREJA.png') }}" rel="icon">
    <link href="{{ asset('GEREJA.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Boldonse&?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Lexend:wght@100..900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Quintessential&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"> --}}

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="starter-page-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-xl-0 p-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img class="img-fluid" src="{{ asset('logo-tr.png') }}" alt="">
                <h1 class="sitename font-brand">GKJB</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a class="{{ Request::routeIs('home') ? 'active':'' }}" href="{{ route('home') }}">Home</a></li>
                    <li><a class="{{ Request::routeIs('jadwalIbadah') ? 'active':'' }}" href="{{ route('jadwalIbadah') }}">Jadwal Ibadah</a></li>
                    <li><a class="{{ Request::routeIs('tentangKami') ? 'active':'' }}" href="{{ route('tentangKami') }}">Tentang Kami</a></li>
                    <li><a class="{{ Request::routeIs('kegiatan') ? 'active':'' }}" href="{{ route('kegiatan') }}">Kegiatan</a></li>
                    <li><a class="{{ Request::routeIs('departemen') ? 'active':'' }}" href="{{ route('departemen') }}">Departemen</a></li>
                    <li><a class="{{ Request::routeIs('kontak') ? 'active':'' }}" href="{{ route('kontak') }}">Kontak Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list text-white"></i>
            </nav>

            {{-- <a class="btn-getstarted" href="index.html#about">
        Form
      </a> --}}

        </div>
    </header>

    <main class="main">
        @yield('konten')
    </main>

    <footer id="footer" class="footer light-background">

        <div class="container footer-top">
            <div class="row gy-3">
                <div class="col-lg-6 col-md-6 footer-about">
                    <a href="{{ route('home') }}" class="logo d-flex justify-content-between gap-4 flex-column">
                        <img class="img-fluid" width="50px" src="{{ asset('./logo-tr.png') }}" alt="" srcset="">
                        <div class="d-block">
                            <h4 class="sitename d-block font-brand p-0">Gereja Kristen Jerusalem Baru</h4>
                            <h6 class="sitename font-brand">Impactful Community</h6>
                        </div>
                    </a>
                    <div class="footer-contact">
                        <p>Jalan Pasar 4 Selambo Desa Marindal II, </p>
                        <p>Kec. Patumbak, Kabupaten Deli Serdang,</p>
                        <p>Sumatera Utara 20149</p>
                        <p class="mt-3"><strong><i class="bi bi-phone" aria-hidden="true"></i> </strong> <span><a
                                    href="tel:+6285270967084">Hubungi Kami</a></span></p>
                        <p><strong> <i class="bi bi-envelope" aria-hidden="true"></i> </strong> <span><a
                                    href="mailto:gkjbici@gmail.com">Kirim Email</a> </span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="https://www.facebook.com/profile.php?id=100081426955078"><i
                                class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/gkjbic/"><i class="bi bi-instagram"></i></a>

                    </div>
                </div>

                <div class="col-lg col-md">
                    {{-- <h4>Topik Doa</h4>
            <form action="{{ route('kirimdoa') }}" method="post">
                @csrf
                <div class="form-floating">
                    <textarea name="doa" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Comments</label>
                  </div>
                  <button class="btn btn-primary mt-3" type="submit">send</button>
            </form> --}}
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            {{-- <p>© <span>Copyright</span> <strong class="px-1 sitename">iLanding</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> --}}
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
