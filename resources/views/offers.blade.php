@extends('layout')

@section('content')


<section class="section-rooms-luxury" style="background-image: url('../img/offers/offers.jpg');background-size: cover;background-position: center;">
    <h4 class="section-rooms-luxury__ultimate">THE ULTIMATE LUXURY</h4>
    <h3 class="section-rooms-luxury__room">Our Offers</h3>
    <div class="section-luxury__container">
    <h5 class="container__span-home"><a class="home">Home</a><span class='span-home__effect'>|</span><span class="span-home__about">Offers</span></h5>    </div>
</section>

@php
$count = 0;
@endphp

@if(!empty($rooms))

    @foreach($rooms as $room)
        @if($count < 5)
    <section class="section-offer-rooms">
    <div class="section-offer-rooms__img">
    @if (!empty($room->photos))
            @php
                $photos = json_decode($room->photos, true);
            @endphp
            @if (is_array($photos) && count($photos) > 0)
            <a href="rooms/{{ $room->roomId }}">
                <img class="img__offer-rooms" src="{{ $photos[3] }}" />
            </a>
            @endif
    @endif
        <div class="img__prices-offer">
            <div class="prices-offer__container">
                <span class="prices-offer__gold">${{$room->price}}</span>
                <span class="gold__night">/Night</span>
            </div>

            <span class="prices-offer__red">${{$room->offerPrice}}<span class="red__night">/Night</span></span>
        </div>
    </div>

    <div class="section-offer-rooms__details-room-offer">
        <div class="details-room-offer__title-box">
            <h4 class="subtitle details-room-offer__subtitle">{{$room->roomType}}</h4>

            <h3 class="title details-room-offer__title">{{$room->roomName}}</h3>

        </div>


        <div class="details-room-offer__text-and-amenities">

            <p class="text details-room-offer__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

            <div class="section-amenities__amenities-offers">
                <div class="amenities__left" class="amenities__element-offers">
                    <div class="amenities__amenities-container">
                        <img class="amenities-container__img" src="/../img/amenities/1.1airConditioner.svg" />
                        <span class="amenities-container__span">Air Conditioner</span>
                    </div>
                    <div class="amenities__amenities-container">
                        <img class="amenities-container__img" src="/../img/amenities/1.2breakfast.svg" />
                        <span class="amenities-container__span">Breakfast</span>
                    </div>
                    <div class="amenities__amenities-container">
                        <img class="amenities-container__img" src="/../img/amenities/1.3cleaning.svg" />
                        <span class="amenities-container__span">Cleaning</span>
                    </div>
                    <div class="amenities__amenities-container">
                        <img class="amenities-container__img" src="/../img/amenities/1.4grocery.svg" />
                        <span class="amenities-container__span">Grocery</span>
                    </div>
                    <div class="amenities__amenities-container">
                        <img class="amenities-container__img" src="/../img/amenities/1.5shopNear.svg" />
                        <span class="amenities-container__span">Shop near</span>
                    </div>
                </div>

                <div class="amenities__right">
                    <div class="amenities__amenities-container">
                        <img class="amenities-container__img" src="/../img/amenities/2.1wifi.svg" />
                        <span class="amenities-container__span">Hight speed WiFi</span>
                    </div>
                    <div class="amenities__amenities-container">
                        <img class="amenities-container__img" src="/../img/amenities/2.2kitchen.svg" />
                        <span class="amenities-container__span">Kitchen</span>
                    </div>
                    <div class="amenities__amenities-container">
                        <img class="amenities-container__img" src="/../img/amenities/2.3shower.svg" />
                        <span class="amenities-container__span">Shower</span>
                    </div>
                    <div class="amenities__amenities-container">
                        <img class="amenities-container__img" src="/../img/amenities/2.4singleBed.svg" />
                        <span class="amenities-container__span">Single Bed</span>
                    </div>
                    <div class="amenities__amenities-container">
                        <img class="amenities-container__img" src="/../img/amenities/2.5towels.svg" />
                        <span class="amenities-container__span">Towels</span>
                    </div>

                </div>
            </div>
        </div>
        <a href="rooms/{{ $room->roomId }}" class="button details-room-offer__button"><span class="button__text-offer">Book Now</span></a>
    </div>
    @php
        $count++;
    @endphp
    </section>
    @endif
    @endforeach
    @endif



<section class="section-popular-rooms">

    <h4 class="subtitle section-popular-rooms__subtitle">POPULAR LIST</h4>
    <h3 class="title section-popular-rooms__title">Popular Rooms</h3>

    <div class="section-popular-rooms__img-container-slider">

    
        @php
        $count = 0;
        @endphp

        @if(!empty($rooms))

            @foreach($rooms as $room)
                @if($count < 3)
    
                <div class='section-selection-rooms__rooms' id="rooms-card" style="margin: 0 auto; width: 90%; padding-bottom: 35px; border-radius: 5px; overflow-y: hidden;">

                @if (!empty($room->photos))
                    @php
                        $photos = json_decode($room->photos, true);
                    @endphp
                    @if (is_array($photos) && count($photos) > 0)
                    <a href="rooms/{{ $room->roomId }}">
                        <img class="rooms__img" src="{{ $photos[$count] }}" alt="room-photo">
                    </a>
                    @endif
                @endif

                <div class="rooms section-hand-picked__rectangle">
                    <div class="rectangle__img">
                        <img class="img rectangle__bed" src="/../img/handPickedRooms/1.bed.svg" />
                    </div>
                    <div class="rooms rectangle__img">
                        <img class="img rectangle__wifi" src="/../img/handPickedRooms/2.wifi.svg" />
                    </div>
                    <div class="rooms rectangle__img">
                        <img class="img rectangle__car" src="/../img/handPickedRooms/3.car.svg" />
                    </div>
                    <div class="rooms rectangle__img">
                        <img class="img rectangle__snow" src="/../img/handPickedRooms/4.snow.svg" />
                    </div>
                    <div class="rooms rectangle__img">
                        <img class="img rectangle__gym" src="/../img/handPickedRooms/5.gym.svg" />
                    </div>
                    <div class="rooms rectangle__img">
                        <img class="img rectangle__noSmoke" src="/../img/handPickedRooms/6.noSmoke.svg" />
                    </div>
                    <div class="rooms rectangle__img">
                        <img class="img rectangle__coctel" src="/../img/handPickedRooms/7.coctel.svg" />
                    </div>
                </div>

                <div class="rooms__details">
                    <h4 class="details__title">{{ $room->roomName }}</h4>
                    <p class="details__text" >Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                        tempor.</p>
                    <div class="details__price-room-option">
                        <span class="price-room-oprion__price">${{ $room->price }}/Night</span>
                        <span class="price-room-oprion__option">Booking Now</span>
                    </div>
                </div>
        </div>
        @php
            $count++;
        @endphp
        @endif
        @endforeach
        @endif
        
    </div>

</section> 

<section class="section-popular-rooms-swiper">
    <h4 class="subtitle section-popular-rooms__subtitle">POPULAR LIST</h4>
    <h3 class="title section-popular-rooms__title">Popular Rooms</h3>

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
                                    <a href="/rooms/{{ $room->roomId }}">
                                        <img style="width: 100%;" class="carrusel__img-hand-picked" src="{{ $photos[0] }}" />
                                    </a>
                                @endif
                            @endif
                            <div class="section-hand-picked__duplex" style="text-align: center; width: 90%; height: 170px;">
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

<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js'

    const handPickedSwipper = new Swiper('.section-hand-picked__container-hand-picked', {
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
                spaceBetween: 300,
                loop: true,
            }
        }
    });


</script>

@endsection