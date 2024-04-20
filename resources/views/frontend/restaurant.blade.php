@extends('frontend.layout.frontend_layout')
@section('title', 'Food Offers | Home Page')


@section('content')
    <!-- food section -->
    <section class="food_section layout_padding-bottom">
        <div class="container">
            @include('frontend.layout.partials.restaurant')
        </div>
    </section>
@endsection

<!-- end food section -->


@push('scripts')
<script>
    $(document).ready(function() {
      $("#favorite-button").click(function() {
        var offerId = $(this).data('offerId');

        $.ajax({
          url: '/add-favorite',
          method: 'POST',
          data: { offer_id: offerId },
          success: function(response) {
            if (response.success) {
              $("#favorite-button").text("Remove from Favorites");
            } else {
              alert(response.message);
            }
          },
          error: function(error) {
            console.error(error);
          }
        });
      });
    });
    </script>
@endpush
