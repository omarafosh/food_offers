@extends('frontend.layout.frontend_layout')
@section('title', 'Food Offers | Home Page')


@section('content')
    <!-- food section -->
    <section class="food_section layout_padding-bottom">
        <div class="container">
            @include('frontend.layout.partials.offers')
        </div>
    </section>
@endsection
<!-- end food section -->
