@extends('layout')

@section('content')
<section class="section section-perfect-base">
    <div class="section-perfect-base__text">
        <h3 class="h3 text__experience">THE ULTIMATE LUXURY EXPERIENCE</h3>

        <h3 class="h3 text__base">The Perfect Base For You</h3>
    </div>

    <div class="section-perfect-base__button-container">
        <a href="#take-a-tour" class="button button-container__button-gold">
            <h3 class="button-gold__span">TAKE A TOUR</h3>
        </a>
        <a href="/about" class="button button-container__button-black">
            <h3 class="button-black__span">LEARN MORE</h3>
        </a>
    </div>

    <form class="form section-perfect-base__form-check-availability">
        <div class="form-check-availability">
            <h3 class="h3 form-check-availability__span">Arrival Date</h3>
            <div class="form-check-availability__input-container">
                <img class="input-container__img" src="/../img/calendarBlack.jpg" />
                <input class="input form-check-availability__input" type="text" placeholder="24th may 2023" />
            </div>
            <img class="form-check-availability__golden.bar" src="/../img/goldenBar.svg" />
        </div>

        <div class="form-check-availability">
            <h3 class="h3 form-check-availability__span">LeDeparture Date</h3>
            <div class="form-check-availability__input-container">

                <img class="input-container__img" src="/../img/calendarBlack.jpg" />

                <input class="input form-check-availability__input" type="text" placeholder="30th may 2023" />
            </div>

            <img class="form-check-availability__golden.bar" src="/../img/goldenBar.svg" />
        </div>
        <a class="button form-check-availability__button" href="/rooms">Check Availability</a>
    </form>

</section>

<section class="section section-about-us">
    <div class="container__section-about-us">

        <div class="content__section-about-us">
            <h3 class="h3 section-about-us__span">ABOUT US</h3>
            <h3 class="h3 
            section-about-us__title">Discover Our Underground.</h3>
            <p class="p section-about-us__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <a class="button section-about-us__button-gold"><span class="h3 button-gold__text">Book Now</span></a>
        </div>

        <div class="section-about-us__card-container">
            <div class="section__img1-container">
                <img alt="hotel-streets" class="img img1-container__img" src="/../img/home/hotel-streets.jpg" />
            </div>

            <div class="section__strong-team">

                <div class="strong-team__img-container-strong-team">
                    <img alt="team-gold" class="img-container-strong-team__img-team-gold" src="/../img/teamGold.svg">

                    <div class="img-container-strong-team__transparent-img">
                        <img alt="teamTransparent" class="transparent-img__img" src="/../img/teamTransparent.svg">
                    </div>
                </div>

                <h3 class="h3 strong-team__span">Strong Team</h3>
                <p class="p strong-team__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor.</p>
            </div>

            <div class="section-luxury-room__img-container">
                <img alt="relaxing-beds" class="img img2-container__img" src="/../img/home/relaxing-beds.jpg">
            </div>

            <div class="section-luxury-room">


                <div class="section-luxury-room__container-luxury-room">
                    <div class="container-luxury-room__calendar-gold">
                        <img class="calendar-gold__img" src="/../img/calendarGoldWithArrow.svg" />
                    </div>

                    <h3 class="container-luxury-room__span-white">Luxury Room</h3>

                    <p class="container-luxury-room__p-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor.</p>

                </div>


            </div>
        </div>
    </div>
</section>



<section class="section section-hand-picked">
    <div class="section-hand-picked__text">
        <h3 class="h3 text__rooms-grey">ROOMS</h3>
        <h3 class="h3 text__hand-picked">Hand Picked Rooms</h3>
    </div>

    <div class="swiper section-hand-picked__container-hand-picked">
    @if (!empty($rooms))
        @php
            $count = 0;
        @endphp

        <div class="swiper-wrapper wrapper-hand-picked-container">
            @foreach ($rooms as $room)

                @if ($count < 5)

                    <div class="swiper-slide container-hand-picked">
                        <div class="section-hand-picked__rectangle">
                            <div class="rectangle__img">
                                <img class="img rectangle__bed" src="/../img/handPickedRooms/1.bed.svg" />
                            </div>
                            <div class="rectangle__img">
                                <img class="img rectangle__wifi" src="/../img/handPickedRooms/2.wifi.svg" />
                            </div>
                            <div class="rectangle__img">
                                <img class="img rectangle__car" src="/../img/handPickedRooms/3.car.svg" />
                            </div>
                            <div class="rectangle__img">
                                <img class="img rectangle__snow" src="/../img/handPickedRooms/4.snow.svg" />
                            </div>
                            <div class="rectangle__img">
                                <img class="img rectangle__gym" src="/../img/handPickedRooms/5.gym.svg" />
                            </div>
                            <div class="rectangle__img">
                                <img class="img rectangle__noSmoke" src="/../img/handPickedRooms/6.noSmoke.svg" />
                            </div>
                            <div class="rectangle__img">
                                <img class="img rectangle__coctel" src="/../img/handPickedRooms/7.coctel.svg" />
                            </div>
                        </div>

                        <div class="section-hand-picked__carrusel">
                            @if (!empty($room->photos))
                                @php
                                    $photos = json_decode($room->photos, true);
                                @endphp
                                @if (is_array($photos) && count($photos) > 0)
                                    <a href="rooms/{{ $room->roomId }}">
                                        <img class="carrusel__img-hand-picked" src="{{ $photos[0] }}" />
                                    </a>
                                @endif
                            @endif
                            <div class="section-hand-picked__duplex">
                                <h3 class="section-hand-picked__span">{{$room->roomName}}</h3>
                                <p class="p section-hand-picked__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <h3 class="h3 section-hand-picked__price-gold">${{$room->price}}<span class="price-gold__night">/Night</span></h3>
                            </div>
                        </div>
                    </div>

                    @php
                        $count++;
                    @endphp
                @endif
            @endforeach

        </div>
        <div class="swiper-button-prev"><img class="white__button-img" src="/../img/arrow-left.svg" /></div>
        <div class="swiper-button-next"><img class="gold__button-img" src="/../img/arrow-right.svg" /></div>

    @endif
</div>
</section>

<section class="section-intro-video" id="take-a-tour">
    <div class="section-intro-video__container">
        <h3 class="h3 section-intro-video__sub-title-gold">Intro Video</h3>
        <h3 class="h3 section-intro-video__title">Meet With Our Luxury Place.</h3>
        <p class="p section-intro-video__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
    </div>

    <div class="section-intro-video__video">
        <video class="video video__video" controls>
            <source src="../img/videos/homeVideo.mp4" type="video/mp4"/>
            Your browser does not support this video tag.
        </video>
    </div>

    <a href="/rooms" class="button section-intro-video__button">
        <h3 class="button button-gold">BOOK NOW</h3>
    </a>

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



<section class="section-menu">
    <div class="section-menu__donut">
        <img class="donut__img" src="/../img/goldDonut.svg" />
    </div>

    <div class="section-menu__donut-complete">
        <img class="donut-complete__img" src="/../img/completeDonut.svg" />
    </div>


    <h3 class="section-menu__menu">MENU</h3>
    <h3 class="h3 section-menu__our-food">Our Foods Menu</h3>


<div class="swiper section-menu__all-options-swiper" style=" overflow-y: hidden;">
    <div class="swiper-wrapper" style="display: flex; margin-left: 30px;">
        <div class="swiper-slide">
            <div class="all-options__options">
                <img class="options__img" alt="eggs-and-bacon" src="/../img/home/menu/eggs-bacon.jpg" />
                <div class="options__text">
                    <h3 class="text__name">Eggs & Bacon</h3>
                    <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                        eiusmod tempor.</p>
                </div>
                <div class="options__golden-arrow-container">
                    <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
                </div>
            </div>
            <div class="all-options__options">
                <img alt="tear-caffe" class="options__img" src="/../img/home/menu/tear-caffe.jpg" />
                <div class="options__text">
                    <h3 class="text__name">Tea or Coffee</h3>
                    <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                        eiusmod tempor.</p>
                </div>
                <div class="options__golden-arrow-container">
                    <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
                </div>
            </div>
            <div class="all-options__options">
                <img alt="chia-oatmeal" class="options__img" src="/../img/home/menu/chia-oatmeal.jpg" />
                <div class="options__text">
                    <h3 class="text__name">Chia Oatmeal</h3>
                    <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                        eiusmod tempor.</p>
                </div>
                <div class="options__golden-arrow-container">
                    <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
                </div>
            </div>   
        </div>
        <div class="swiper-slide">
            <div class="all-options__options">
                <img alt="fruit-parfait" class="options__img" src="/../img/home/menu/fruit-parfait.jpg" />
                <div class="options__text">
                    <h3 class="text__name">Fruit Parfait</h3>
                    <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                        eiusmod tempor.</p>
                </div>
                <div class="options__golden-arrow-container">
                    <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
                </div>
            </div>

            <div class="all-options__options">
                <img alt="marmalade-selection" class="options__img" src="/../img/home/menu/marmalade-selection.jpg" />
                <div class="options__text">
                    <h3 class="text__name">Marmalade Selection</h3>
                    <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                        eiusmod tempor.</p>
                </div>
                <div class="options__golden-arrow-container">
                    <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
                </div>
            </div>
            <div class="all-options__options" >
                <img alt="chees-plate" class="options__img" src="/../img/home/menu/chees-plate.jpg" />
                <div class="options__text">
                    <h3 class="text__name">Chees Plate</h3>
                    <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                        eiusmod tempor.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-menu__buttons" style="position: absolute; z-index: 5; top: 100px; display: flex; right: 10px; bottom: -300px;">
        <div class="swiper-button-prev buttons__white" style="position: relative; ">
            <img class="white__button-img" style="position: absolute; bottom: 10px;" src="/../img/arrow-left.svg" />
        </div>
        <div class="swiper-button-next buttons__gold" style="position: relative; margin-left: 30px;">
            <img class="gold__button-img" style="position: absolute; bottom: 10px;" src="/../img/arrow-right.svg" />
        </div>
    </div>

</div>

    <div class="section-menu__all-options">
        <div class="all-options__options">

            <img class="options__img" alt="eggs-and-bacon" src="/../img/home/menu/eggs-bacon.jpg" />

            <div class="options__text">
                <h3 class="text__name">Eggs & Bacon</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>

            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>

        </div>

        <div class="all-options__options">
            <img alt="tear-caffe" class="options__img" src="/../img/home/menu/tear-caffe.jpg" />

            <div class="options__text">
                <h3 class="text__name">Tea or Coffee</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>
            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>
        </div>

        <div class="all-options__options">
            <img alt="chia-oatmeal" class="options__img" src="/../img/home/menu/chia-oatmeal.jpg" />
            <div class="options__text">
                <h3 class="text__name">Chia Oatmeal</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>
            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>
        </div>



        <div class="all-options__options">

            <img alt="fruit-parfait" class="options__img" src="/../img/home/menu/fruit-parfait.jpg" />

            <div class="options__text">
                <h3 class="text__name">Fruit Parfait</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>

            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>

        </div>

        <div class="all-options__options">

            <img alt="marmalade-selection" class="options__img" src="/../img/home/menu/marmalade-selection.jpg" />

            <div class="options__text">
                <h3 class="text__name">Marmalade Selection</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>

            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>

        </div>

        <div class="all-options__options">

            <img alt="chees-plate" class="options__img" src="/../img/home/menu/chees-plate.jpg" />

            <div class="options__text">
                <h3 class="text__name">Chees Plate</h3>
                <p class="text__description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                    eiusmod tempor.</p>
            </div>

            <div class="options__golden-arrow-container">
                <img class="golden-arrow-container__img" src="/../img/golden-arrow.svg" alt="golden-arrow">
            </div>
        </div>
    </div>

    <div class="section-menu__carrusel-no-swiper">
        
            <img alt="breakfast" class="img carrusel__img" src="/../img/home/menu/slider/breakfast.jpg" />
            <img alt="dessert" class="img carrusel__img" src="/../img/home/menu/slider/dessert.jpg" />
            <img alt="cake" class="img carrusel__img" src="/../img/home/menu/slider/cake.jpg" />
    </div>

    <div class="swiper section-menu__carrusel" style="margin-top: 60px;">
        <div class="swiper-wrapper section-menu__carrusel-container">
            <div class="swiper-slide img-container-menu">
                <img alt="breakfast" class=" img carrusel__img" src="/../img/home/menu/slider/breakfast.jpg" />
            </div>
            <div class="swiper-slide img-container-menu">            
                <img alt="dessert" class="img carrusel__img" src="/../img/home/menu/slider/dessert.jpg" />
            </div>
            <div class="swiper-slide img-container-menu">            
                <img alt="cake" class="img carrusel__img" src="/../img/home/menu/slider/cake.jpg" />
            </div>
            
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="section-objectives">
    <div class="section-objectives__container">
        <img class="img container__img-objective" src="/../img/1.goldHornet.svg" />
        <h3 class="h3 container__objective-white">84k<span class="objective-white__plus">+</span></h3>
        <h3 class="h3 container__objective-grey"> Projects are Completed</h3>
    </div>
    <div class="section-objectives__container">
        <img class="img container__img-objective" src="/../img/2.teamsGold.svg" />
        <h3 class="h3 container__objective-white">10M<span class="objective-white__plus">+</span></h3>
        <h3 class="h3 container__objective-grey">Active Backers Around World</h3>
    </div>
    <div class="section-objectives__container">
        <img class="img container__img-objective" src="/../img/3.graphicRises.svg" />
        <h3 class="h3 container__objective-white">02k<span class="objective-white__plus">+</span></h3>
        <h3 class="h3 container__objective-grey">Categories Served</h3>
    </div>
    <div class="section-objectives__container">
        <img class="img container__img-objective" src="/../img/4.books.svg" />

        <h3 class="span container__objective-white">100M<span class="objective-white__plus">+</span></h3>
        <h3 class="h3 container__objective-grey">Idea Raised Funds</h3>
    </div>

</section>


<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

    const handPickedSwiper = new Swiper('.section-hand-picked__container-hand-picked', {
        loop: true,
        centeredSlides: true, 
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            1000: {
                slidesPerView: "auto",
                spaceBetween: 100,
                loop: true,
            }
        }
    });

    const facilitiesSwiper = new Swiper('.facilities', {
        loop: false,
        slidesPerView: "auto",
        spaceBetween: 150,
        pagination: {
            el: '.swiper-pagination',
        },
    });

    const menuSwiper = new Swiper('.section-menu__all-options-swiper', {
        loop: false,
        centeredSlides: true, 
        slidesPerView: "1",
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

    });

    const menuDessertsSwiper = new Swiper('.section-menu__carrusel', {
        loop: false,
        slidesPerView: "auto",
        spaceBetween: 10,
        centeredSlides: true, 
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>
@endsection
