@extends('layout')

@section('content')
<section class="section-about-us-4">
    <div class="section-about-us-4__section-luxury">
        <h4 class="section-luxury__ultimate">THE ULTIMATE LUXURY</h4>
        <h3 class="section-luxury__us">About Us</h3>
        <div class="section-luxury__container">
        <h5 class="container__span-home"><a class="home">Home</a><span class='span-home__effect'>|</span><span class="span-home__about">Rooms</span></h5>        </div>

    </div>

    <div class="section-about-us-4__present">
        <img alt="check-in" class="present__video" src="/../img/about/check-in.jpg" />


        <h3 class="present__text">Hello. Our hotel has been present for over 20 years. We make the best for all our
            customers.</h3>
    </div>

    <div class="section-about-us-4__options">
        <div class="options__container-options">
            <div class="container-options__img-text">
                <img src="/../img/breakfast.svg" class="img-text__img" />
                <span class="img-text__text">BREAKFAST</span>
            </div>
            <div class="container-options__img-text-plane">
                <img src="/../img/plane.svg" class="img-text__img" />
                <span class="img-text__text-plane">AIRPORT PICKUP</span>
            </div>

            <div class="container-options__img-text">
                <img src="/../img/ubiMap.svg" class="img-text__img" />
                <span class="img-text__text">CITY GUIDE</span>
            </div>
            <div class="container-options__img-text">
                <img src="/../img/bed.svg" class="img-text__img" />
                <span class="img-text__text">LUXURY ROOM</span>
            </div>
        </div>

    </div>
</section>

<section class="section-restaurant">
    <div class="section-restaurant__img-container">
        <img alt="facilities" class="img-container__img-restaurant" src="/../img/about/facilities.jpg">
    </div>

    <div class="section-restaurant__restaurant">
        <h4 class="restaurant__h3">RESTAURANT</h4>
        <h3 class="restaurant__title">Get Restaurant Facilities & Many Other More</h3>
        <p class="restaurant__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip.</p>

        <a class="button restaurant__button"><span class="button__restaurant-text">TAKE A TOUR</span></a>
    </div>
</section>

<section class="section-slider-facilities-no-slider">
    <h4 class="section-slider-facilities__subtitle">FACILITIES</h4>
    <h3 class="section-slider-facilities__title">Core Features</h3>

    <div class="section-slider-facilities__carrusel">
        <div class="carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">01</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/1.goldFinger.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Have High Rating</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">02</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/2.hours.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Quiet Hours</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">03</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/3.location.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Best Locations</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">04</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/4.cancellation.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Free Cancellation</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">05</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/5.payment.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Payment Options</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">06</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/6.offers.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Special Offers</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
    </div>
</section>

<section class="section-slider-facilities">
    <h4 class="section-slider-facilities__subtitle">FACILITIES</h4>
    <h3 class="section-slider-facilities__title">Core Features</h3>

    <div class="swiper facilities">

    <div class="swiper-wrapper section-slider-facilities__carrusel">
        <div class="swiper-slide carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">01</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/1.goldFinger.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Have High Rating</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="swiper-slide carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">02</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/2.hours.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Quiet Hours</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="swiper-slide carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">03</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/3.location.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Best Locations</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="swiper-slide carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">04</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/4.cancellation.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Free Cancellation</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="swiper-slide carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">05</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/5.payment.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Payment Options</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>

        <div class="swiper-slide carrusel__carrusel">
            <div class="carrusel__img4">
                <h3 class="img4__span01">06</h3>
                <div class="img4__container-goldFinger4">
                    <img class="container-goldFinger4" src="/../img/features/6.offers.svg" />
                </div>
            </div>

            <div class="carrusel__container-high4">
                <h3 class="container-high4__title">Special Offers</h3>
                <p class="container-high4__p"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    </div>
</section>

<section class="section-fun-facts">

    <h4 class="sections-fun-facts__subtitle">COUNTER</h4>
    <h3 class="sections-fun-facts__title">Some Fun Facts</h3>
    <div class="sections-fun-facts__container">


        <div class="container__fun-facts">
            <img class="fun-facts__img" src="/../img/1.happyUsers.svg" />
            <div class="fun-facts__text">
                <span class="text__title-details">8000</span>
                <span class="text__subtitle-details">Happy Users</span>
            </div>
            <img class="fun-facts__img" src="/../img/arrowfacts.svg" />
        </div>
        <div class="container__fun-facts">
            <img class="fun-facts__img" src="/../img/2.reviews.svg" />
            <div class="fun-facts__text">
                <span class="text__title-details">10M</span>
                <span class="text__subtitle-details">Reviews & Appreciate</span>
            </div>
            <img class="fun-facts__img" src="/../img/arrowfacts.svg" />
        </div>
        <div class="container__fun-facts">
            <img class="fun-facts__img" src="/../img/3.country.svg" />
            <div class="fun-facts__text">
                <span class="text__title-details">100 </span>
                <span class="text__subtitle-details">Country Coverage</span>
            </div>
            <img class="fun-facts__img" src="/../img/arrowfacts.svg" />
        </div>
    </div>



    <div class="section-fun-facts__carrusel-no-swiper">
        <img alt="indoor-pool" class="carrusel__fun-facts" src="/../img/about/carrusel/indoor-pool.jpg">

        <img alt="patio" class="carrusel__fun-facts" src="/../img/about/carrusel/patio.jpg">
    </div>

    <div class="swiper section-fun-facts__carrusel">
        <div class="swiper-wrapper" style="display: flex;">
            <img alt="indoor-pool" class="swiper-slide carrusel__fun-facts" src="/../img/about/carrusel/indoor-pool.jpg">
            <img alt="patio" class="swiper-slide carrusel__fun-facts" src="/../img/about/carrusel/patio.jpg">
        </div>
        <div class="swiper-pagination" style="margin-top: 20px;"></div>
    </div>


</section>
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

    const facilitiesSwipper = new Swiper('.facilities', {
        loop: false,
        slidesPerView: "auto",
        spaceBetween: 150,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    const funFactsSwipper = new Swiper('.section-fun-facts__carrusel', {
        loop: false,
        slidesPerView: "auto",
        spaceBetween: 150,
        pagination: {
            el: '.swiper-pagination ',
            clickable: true,
        },
    });
</script>
@endsection