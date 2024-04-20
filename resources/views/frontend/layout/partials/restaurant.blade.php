<div class="heading_container heading_center mt-4">
    <h2>
        Restaurant
    </h2>
</div>

<style>
    a {
        color: #fff;
    }
    .controll-card{
        display: flex;
        justify-content: space-between;
        align-items: center

    }
</style>

<div class="filters-content">
    <div class="row grid">
        <!--Restaurant card -->
        <div class="col-sm-6 col-lg-4 all restaurant">
            <div class="box">
                <div>
                    <div class="img-box">
                        <img src="{{ asset('assets/frontend/imgs/restaurant/kfc.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            KFC
                        </h5>

                        <p>
                            subsidiary of Yum! Brands, is a global chicken restaurant brand with a rich,
                            decades-long
                            history of success.
                        </p>
                        <!--<button class="display-food-btn">View Offeres</button>-->
                        <div class="controll-card">
                            <button data-offer-id="{{ $offer->id }}" id="display-food-btn" class="display-food-btn btn btn-warning text-white"
                                data-restaurant-id="restaurant_id_here">View Offers</button>
                            <span class="buttons">
                                <a href="#" class="favorite">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 all restaurant">
            <div class="box">
                <div>
                    <div class="img-box">
                        <img src="{{ asset('assets/frontend/imgs/restaurant/burgerking.webp') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Burger King
                        </h5>
                        <p>
                            Our atmosphere is genuine and our fire is real! Read more about the BK legacy,order online
                            for more flavors.
                        </p>
                        <button class="display-food-btn">View Offeres</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 all restaurant">
            <div class="box">
                <div>
                    <div class="img-box">
                        <img src="{{ asset('assets/frontend/imgs/restaurant/macdo.jpg') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Macdonald
                        </h5>
                        <p>
                            An Organized Life. Media labels, color-coded labels, and more to organize and archive
                            projects and collections of all sizes.
                        </p>
                        <button class="display-food-btn">View Offeres</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 all restaurant">
            <div class="box">
                <div>
                    <div class="img-box">
                        <img src="{{ asset('assets/frontend/imgs/restaurant/abdala.jpg') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Al-Abdalla
                        </h5>
                        <p>
                            Al Abdallah Restaurant. The Best BBQ Chicken In Lebanon ,Appetizers. Sandwiches. BBQ
                            Chicken. Since 1999.
                        </p>
                        <button class="display-food-btn">View Offeres</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 all restaurant">
            <div class="box">
                <div>
                    <div class="img-box">
                        <img src="{{ asset('assets/frontend/imgs/restaurant/tawouk.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Malak Al Tawwok
                        </h5>
                        <p>
                            Malak al Tawouk Restaurant is the most popular Tawouk restaurant chain, providing
                            Professional management and offering
                        </p>
                        <button class="display-food-btn">View Offeres</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4 all restaurant">
            <div class="box">
                <div>
                    <div class="img-box">
                        <img src="{{ asset('assets/frontend/imgs/restaurant/pizahut.png') }}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Pizza Hut
                        </h5>
                        <p>
                            Discover classic & new menu items, find deals and enjoy seamless ordering for delivery and
                            carryout.
                        </p>
                        <button class="display-food-btn">View Offeres</button>
                    </div>
                </div>
            </div>
        </div>


        <!--end resto card-->
    </div>
</div>
<div class="btn-box">
    <a href="">
        View More
    </a>
</div>
</div>
</section>
