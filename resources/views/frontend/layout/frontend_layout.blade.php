<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title> Feane </title>
    @include('frontend.layout.partials.css')

</head>

<body>

    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ asset('assets/frontend/imgs/hero-bg.jpg') }}" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                @include('frontend.layout.partials.navbar')
            </div>
        </header>
        <!-- end header section -->
       @yield('content')
    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            @include('frontend.layout.partials.footer')
        </div>
    </footer>
    <!-- footer section -->

    @include('frontend.layout.partials.js')

</body>

</html>
