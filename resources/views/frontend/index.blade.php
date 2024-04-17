@extends('frontend.layout.frontend_layout')
@section('title', 'Food Offers | Home Page')
@section('content')
    <!-- slider section -->
    <section class="slider_section ">
        @include('frontend.layout.partials.slider')
    </section>
    <!-- end slider section -->
    </div>

    <!-- offer section -->

    <section class="offer_section layout_padding-bottom">
        <div class="offer_container">
            <div class="container ">
                @yield('content')
            </div>
        </div>
    </section>

    <!-- end offer section -->

    <!-- food section -->

    <section class="food_section layout_padding-bottom">
        <div class="container">
            @include('frontend.layout.partials.filter')
        </div>
    </section>

    <!-- end food section -->

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            @include('frontend.layout.partials.about')
        </div>
    </section>

    <!-- end about section -->

    <!-- book section -->
    <section class="book_section layout_padding">
        <div class="container">
            @include('frontend.layout.partials.book')
        </div>
    </section>
    <!-- end book section -->

    <!-- client section -->

    <section class="client_section layout_padding-bottom">
        <div class="container">
            @include('frontend.layout.partials.clients')
        </div>
    </section>

    <!-- end client section -->

@endsection
