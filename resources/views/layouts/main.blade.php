<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Eusoft- It Solutions & Software Solution Website Template</title>
    <meta content="" name="Eusoft- It Solutions & Software Solution Website Template">
    <meta content="" name="ZRTHEMES">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link href={{ asset("assets/images/favicon.png")}} rel="icon">
    <link href={{ asset("assets/images/apple-touch-icon.png")}} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset("assets/stylesheets/font-awesome.min.css")}} rel="stylesheet">
    <link href={{ asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
    <link href={{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
    <link href={{ asset("assets/vendor/aos/aos.css")}} rel="stylesheet">
    <link href={{ asset("assets/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
    <link href={{ asset("assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">
    <!-- Main CSS File -->
    <link href={{ asset( "assets/stylesheets/styles.css")}} rel="stylesheet">
</head>

<body class="">
    <div id="preloader"></div>
    @include('layouts.header')
    @yield('main')
    @include('layouts.footer')
    @include('layouts.footer-bottom')
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src={{ asset("assets/javascripts/jquery.min.js") }}></script>
    <script src={{ asset("assets/vendor/glightbox/js/glightbox.min.js") }}></script>
    <script src={{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
    <script src={{ asset("assets/vendor/aos/aos.js") }}></script>
    <script src={{ asset("assets/vendor/swiper/swiper-bundle.min.js") }}></script>
    <script src={{ asset("assets/javascripts/plugins.js") }}></script>
    <script src={{ asset("assets/javascripts/validator.min.js") }}></script>
    <script src={{ asset("assets/javascripts/contactform.js") }}></script>

    <!-- Template Main JS File -->
    <script src={{ asset("assets/javascripts/main.js") }}></script>
</body>

</html>