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
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            finds The Best Offers
                                        </h1>
                                        <h3>
                                            Search for the best offers from restaurants, and the best meals, at a 15%
                                            lower cost.
                                        </h3>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Order Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Fast Food Restaurant
                                        </h1>
                                        <h3>
                                            "Discover exclusive deals at FOOD FINDS! Enjoy unbeatable prices on
                                            restaurant meals. Start saving on dining adventures today!
                                        </h3>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Order Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Food Offers
                                        </h1>
                                        <h3>
                                            We're available 24/7 for the best service , Contact us at 1919.
                                        </h3>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Order Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ol class="carousel-indicators">
                        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#customCarousel1" data-slide-to="1"></li>
                        <li data-target="#customCarousel1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>

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
    @stack('scripts')
</body>

</html>
