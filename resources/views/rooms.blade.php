@extends('layout')

@section('content')

<section class="section-rooms-luxury">
    <h4 class="section-rooms-luxury__ultimate">THE ULTIMATE LUXURY</h4>
    <h3 class="section-rooms-luxury__room">Ultimate Room</h3>
    <div class="section-luxury-room__container">
        <h5 class="container__span-home"><a class="home">Home</a><span class='span-home__effect'>|</span><span class="span-home__about">Rooms</span></h5>
    </div>
</section>

@if (!empty($rooms))
<section class="section-selection-rooms">
    @foreach ($rooms as $room)
        @if ($room->isAvailable == true)
            <div class='section-selection-rooms__rooms'>
            @if (!empty($room->photos))
                    @php
                        $photos = json_decode($room->photos, true);
                    @endphp
                    @if (is_array($photos) && count($photos) > 0)
                    <a href="roomDetails/{{ $room->roomId }}">
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
                    <h4 class="details__title">{{ $room->roomName }}</h4>
                    <p class="details__text">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod
                        tempor.</p>
                    <div class="details__price-room-option">
                        <span class="price-room-oprion__price">${{ $room->price }}/Night</span>
                        <span class="price-room-oprion__option">Booking Now</span>
                    </div>
                </div>
            </div>            
        @endif
    @endforeach



    <img class="pagination" src="/../img/Pagination.svg" />

</section>

@else

<strong>No rooms found.</strong>
@endif


@endsection