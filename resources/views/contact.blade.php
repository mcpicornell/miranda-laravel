@extends('layout')

@section('content')

<section class="section-rooms-luxury" style="background-image: url('../img/contact/contact.jpg');background-size: cover;background-position: center;">
    <h4 class="section-rooms-luxury__ultimate">THE ULTIMATE LUXURY</h4>
    <h3 class="section-rooms-luxury__room">Contact</h3>
    <div class="section-luxury__container">
    <h5 class="container__span-home"><a class="home">Home</a><span class='span-home__effect'>|</span><span class="span-home__about">Contact</span></h5>    </div>
</section>

<section class="section-contact">
    <div class="section-contact__ways-to-contact">
        <img class="ways-to-contact__img" src="/../img/hotelAddress.svg" />
        <div class="ways-to-contact__container">
            <h5 class="container__name-contact">Hotel Address</h5>
            <span class="container__info-contact">C/ de la Princesa, 31, 2º, 28008 Madrid</span>
        </div>
        <h6 class="ways-to-contact__number">01</h6>
    </div>

    <div class="section-contact__ways-to-contact">
        <img class="ways-to-contact__img" src="/../img/phoneNumber.svg" />
        <div class="ways-to-contact__container">
            <h5 class="container__name-contact">Phone Number</h5>
            <span class="container__info-contact">+97656 8675 78647</span>
            <span class="container__info-contact">+87676 68675 7656</span>
        </div>
        <h6 class="ways-to-contact__number">02</h6>
    </div>

    <div class="section-contact__ways-to-contact">
        <img class="ways-to-contact__img" src="/../img/email.svg" />
        <div class="ways-to-contact__container">
            <h5 class="container__name-contact">Email</h5>
            <span class="container__info-contact">info@webmail.com</span>
            <span class="container__info-contact">jobs.webmail@mail.com</span>
        </div>
        <h6 class="ways-to-contact__number">03</h6>
    </div>

</section>

<section class="section-form-contact">
    <div class="section-form-contact__img-container">
        <img alt="oxygenAcademy-location" class="img-container__img-form" src="/../img/contact/oxygenAcademy-location.jpg" />
    </div>
    <form id="contactForm" class="section-form-contact__form" action="/contact" method="POST">
            
        @csrf
        <div class="form__input-container-contact__form">
            <div class="form__input-container-contact">
                <img class="input-container-contact__img" src="/../img/form/1.fullName.svg" />
                <input class="input-container-contact__input" placeholder="Your full name" name="name" type="text" />
            </div>
            <div class="form__input-container-contact">
                <img class="input-container-contact__img" src="/../img/form/2.addPhone.svg" />
                <input class="input-container-contact__input" placeholder="Add phone number" name="phone" type="number" />
            </div>
            <div class="form__input-container-contact">
                <img class="input-container-contact__img" src="/../img/form/3.emailAddress.svg" />
                <input class="input-container-contact__input" placeholder="Enter email address" name="email" type="email" required />
            </div>
            <div class="form__input-container-contact">
                <img class="input-container-contact__img" src="/../img/form/4.subject.svg" />
                <input class="input-container-contact__input" placeholder="Enter subject" name="subject" type="text" required />
            </div>
        </div>

        <div class="form__input-message-container">
            <img style="position: relative; bottom: 135px;" class="input-container-contact__img" src="/../img/form/5.message.svg" />
            <textarea rows="8" id="contact-message" class="input-container-contact__input" placeholder="Enter message" name="message" type="text" required ></textarea>
        </div>

        <button type="submit" class="button section-form-contact__button">GET FREE QUOTE</button>
    </form>
</section>

@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const locationContactImgTag = document.getElementsByClassName("img-container__img-form")[0];
        locationContactImgTag.addEventListener("click", (event) => {
            const newUrl = "https://www.google.com/maps/place/OXYGEN+Academy+%7C+Full+Stack+Bootcamps/@40.4280583,-3.7159859,18z/data=!3m2!4b1!5s0xd418785496ed96b:0x1b2b7f3b14ba062f!4m6!3m5!1s0xd4229fc15efcb09:0xb0036150b0cd3867!8m2!3d40.4280563!4d-3.7146958!16s%2Fg%2F11q8x79343?entry=ttu";
            window.open(newUrl);
        })
    </script>

    @if(session('success'))
    <script >
        Swal.fire("Success!", "{{ session('success') }}", "success");
    </script>
    @endif
@endsection
