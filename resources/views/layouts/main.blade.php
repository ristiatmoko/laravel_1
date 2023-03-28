<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sileh - {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('../img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('../vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('../vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('../vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('../css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>



<body>

    @include('partials.navbar')

    <div class="home">
        @yield('home');
    </div>

    @include('partials.footer')


    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('../css/main.css') }}"></script>
    <script src="{{ asset('../vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('../vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('../vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('../vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('../vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('../vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('../js/main.js') }}"></script>

</body>

</html>
