@extends('layout')

@section('content')



<section class="section-rooms-luxury">
    <h4 class="section-rooms-luxury__ultimate">THE ULTIMATE LUXURY</h4>
    <h3 class="section-rooms-luxury__room">Ultimate Room</h3>
    <div class="section-luxury__container">
    <h5 class="container__span-home"><a class="home">Home</a><span class='span-home__effect'>|</span><span class="span-home__about">Room Details</span></h5>    </div>
</section>

<section class="section-room-availability">

@if (!empty($room))


    <div class="section-room-availability__container">
        <div class="container__section-room-availability">
            <h4 class="subtitle section-room-availability__subtitle">{{$room->roomType}}</h4>
            <h3 class="title section-room-availability__title">{{$room->roomName}}</h3>
            <h3 class="section-hand-picked__price-gold section-room-availability__price-gold" style="margin-right: 15px;">${{$room->price}}<span class="price-gold__night">/Night</span></h3>
        </div>


        <div class="section-room-avaliability__img">
        @if (!empty($room->photos))
            @php
                $photos = json_decode($room->photos, true);
            @endphp
            @if (is_array($photos) && count($photos) > 0)
            <img class="img__room-details" style="max-width: 600px;" src="{{ $photos[0] }}" alt="room-photo">
            @endif
            @endif
        </div>
    </div>

    <div class="form__section-room-availability">
        <h4 class="section-room-availability__check">Check Availability</h4>

        <form class="check__check-in-out-container">
            <span class="check__check-in-out-container__span">Check In</span>
            <input type="date" class="check__check-in-out-container__input" placeholder="Fri, 14th June 2023" />
            <span class="check__check-in-out-container__span">Check Out</span>
            <input type="date" class="check__check-in-out-container__input" placeholder="Sun, 16th June 2023" />
            <button class="button check-in-out-container__button" type="submit">CHECK AVAILABILITY</button>

        </form>
    </div>
    <p class="text check-in-out-container__text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
        ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
        labore et dolore magnam aliquam quaerat voluptatem.
    </p>
</section>

<section class="section-amenities">
    <h3 class="section-amenities__title">Amenities</h3>

    <hr class="hr section-amenities__hr" />

    <div class="section-amenities__amenities">

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
        <div class="amenities__amenities-container">
            <img class="amenities-container__img" src="/../img/amenities/1.6onlineSupport.svg" />
            <span class="amenities-container__span">24/7 Online Support</span>
        </div>
        <div class="amenities__amenities-container">
            <img class="amenities-container__img" src="/../img/amenities/1.7smartSecurity.svg" />
            <span class="amenities-container__span">Smart Security</span>
        </div>



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
        <div class="amenities__amenities-container">
            <img class="amenities-container__img" src="/../img/amenities/2.6locker.svg" />
            <span class="amenities-container__span">Strong Locker</span>
        </div>
        <div class="amenities__amenities-container">
            <img class="amenities-container__img" src="/../img/amenities/2.7expertTeam.svg" />
            <span class="amenities-container__span">Expert Team</span>
        </div>

    </div>

</section>

@else
<strong>No rooms found.</strong>

@endif

<section class="section-founder">
    <div class="section-founder__img-container">
        <img alt="Rosalina D. William" class="img-container__founder-img" src="/../img/roomDetails/rosalina.jpg" />
        <div class="img-container__check-container">
            <img class="check-container__circle" src="/../img/checkCircle.svg" />

            <div class="check-container__check">
                <img class="check__img-check" src="/../img/check.svg" />
            </div>

        </div>
    </div>

    <h3 class="section-founder__name">Rosalina D. William</h3>
    <h5 class="section-founder__position">Founder, Qux Co.</h5>
    <p class="section-founder__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore.</p>

</section>

<section class="section-cancellation">
    <h3 class="title section-cancellation__title">Cancellation</h3>
    <hr class="hr section-cancellation__hr" />
    <p class="text section-cancellation__text">
        Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat
        metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full
        refund.
    </p>

</section>

<section class="section-related-rooms">
    <h3 class="title section-related-rooms__title">Related Rooms</h3>
    <hr class="hr section-related-rooms__hr" />

    <div class="swiper section-related-rooms__container">

    <div class="swiper section-hand-picked__container-hand-picked">
    @if (!empty($rooms))
        @php
            $count = 0;
        @endphp

        <div class="swiper-wrapper wrapper-hand-picked-container">
            @foreach ($rooms as $element)
            @if($element->roomType == $room->roomType)
                @if ($count < 2)

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
                            @if (!empty($element->photos))
                                @php
                                    $photos = json_decode($element->photos, true);
                                @endphp
                                @if (is_array($photos) && count($photos) > 0)
                                    <a href="/rooms/{{ $element->roomId }}">
                                        <img class="carrusel__img-hand-picked" src="{{ $photos[0] }}" />
                                    </a>
                                @endif
                            @endif
                            <div class="section-hand-picked__duplex">
                                <h3 class="section-hand-picked__span">{{$element->roomName}}</h3>
                                <p class="p section-hand-picked__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                <h3 class="h3 section-hand-picked__price-gold">${{$element->price}}<span class="price-gold__night">/Night</span></h3>
                            </div>
                        </div>
                    </div>

                    @php
                        $count++;
                    @endphp
                @endif
            @endif
            @endforeach

        </div>

        <div class="swiper-button-prev"><img class="white__button-img" src="/../img/arrow-left.svg" /></div>
        <div class="swiper-button-next"><img class="gold__button-img" src="/../img/arrow-right.svg" /></div>

    @endif
    </div>
    </div>
</section>

<section class="section-related-rooms-no-swiper">
    <h3 class="title section-related-rooms__title">Related Rooms</h3>
    <hr class="hr section-related-rooms__hr" />

    <div class="section-related-rooms__container-related-rooms">

    @if(!empty($rooms))

    @php
    $count = 0;
    @endphp

    @foreach($rooms as $element)
    @if($element->roomType == $room->roomType)
        @if($count < 2)

        <div class='section-selection-rooms__rooms' class="container-related-rooms__container-img">

        @if (!empty($element->photos))
            @php
                $photos = json_decode($element->photos, true);
            @endphp
            @if (is_array($photos) && count($photos) > 0)
            
            <a href="{{ $element->roomId }}">
                <img class="rooms__img" src="{{ $photos[0] }}" />
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
                <h4 class="details__title">{{$element->roomName}}</h4>
                <p class="details__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                    tempor.</p>
                <div class="details__price-room-option">
                    <span class="price-room-oprion__price">${{$element->price}}/Night</span>
                    <a href="rooms/{{ $room->roomId }}" class="price-room-option_link">
                        <span class="price-room-oprion__option">Booking Now</span>                        
                    </a>
                </div>
            </div>
        </div>
            @php
                $count++;
            @endphp
        @endif
        @endif
    @endforeach
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
                spaceBetween: 100,
                loop: true,
            }
        }
    });


</script>

@endsection