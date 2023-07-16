<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/mirandaLogo.png" />
    <link rel="stylesheet" href="/styles/styles.css" type="text/css"/>
    <title>Hotel Miranda</title>

</head>

<body>
    <div class="header-container">
        <div class="uptitle-header"></div>
        <header class="header">
            <h5 class="uptitle-header__h5">We Make Your Feel Comfortable</h5>
            <div class="header__inner-li">
                <li class="li inner-li__element"><a href="/about">About Us</a></li>
                <li class="li inner-li__element"><a href="/rooms">Rooms</a></li>
                <li class="li inner-li__element"><a href="/offers">Offers</a></li>
                <li class="li inner-li__element"><a href="/contact">Contact</a></li>
            </div>

            <div class="header__inner">

                <a class="inner__burger">
                    <img class="burger__img" src="/../img/header/line.svg" />
                    <img class="burger__img" src="/../img/header/line.svg" />
                    <img class="burger__img" src="/../img/header/line.svg" />
                </a>
                <a  class="logo" style="text-decoration: none ; cursor: pointer;">
                    <img class="inner__logo" src="/../img/header/H.svg" />
                    <img class="inner__title" src="/../img/header/HotelMiranda.svg" />
                </a>
            </div>

            <div class="header__icons-right">
                <a href="/orders" style="text-decoration: none;">
                    <img style="cursor: pointer; " class="icons-right__img" src="/../img/header/contact.svg" />
                </a>
                <img class="icons-right__img" src="/../img/header/searcher.svg" />
            </div>
        </header>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <section class="footer">
        <div class="footer__info">
            <div class="info__title">
                <h3 class="title__logo-h">H</h3>
                <div class='title__name-h-m'>
                    <h3 class="name-h-m__hotel">HOTEL</h3>
                    <h3 class="name-h-m__miranda">MIRANDA</h3>
                </div>

            </div>

            <p class="footer__text">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco
                laboris nisi.</p>

            <div class="footer__social-media">
                <img class="img social-media__img" src="/../img/socialMedia/1.facebook.svg" />
                <img class="img social-media__img" class="img social-media__img-twitter" src="/../img/socialMedia/2.twitter.svg" />
                <img class="img social-media__img" src="/../img/socialMedia/3.Be.svg" />
                <img class="img social-media__img" src="/../img/socialMedia/4.linkedin.svg" />
                <img class="img social-media__img" src="/../img/socialMedia/5.youtube.svg" />
            </div>
        </div>



        <div class="footer__services">
            <h3 class="services__span">Services.</h3>

            <div class="services__li-container">
                <ul class="li-container__elements">
                    <li class="elements__li">Restaurent & Bar</li>
                    <li class="elements__li">Swimming Pool</li>
                    <li class="elements__li">Wellness & Spa</li>
                    <li class="elements__li">Restaurant</li>
                    <li class="elements__li">Conference Room</li>
                    <li class="elements__li">Coctail Party House</li>
                </ul>

                <ul class="li-container__elements">
                    <li class="elements__li-right">Gaming Zone</li>
                    <li class="elements__li-right">Marrige Party</li>
                    <li class="elements__li-right">Party Planning</li>
                    <li class="elements__li-right">Tour Consultancy</li>
                </ul>
            </div>
        </div>

        <div class="footer__contact-us">
            <h3 class="contact-us__title">Contact Us.</h3>
            <div class="contact-us__phone">
                <div class="phone__img">
                    <img class="img__phone-img" src="/../img/contactUs/1.telephone.svg" />
                    <div class="phone-img__effects">
                        <img class="effects__effect1" src="/../img/contactUs/1.3telephone.svg" />
                        <img class="effects__effect2" src="/../img/contactUs/1.2telephone.svg" />
                        <img class="effects__effect3" src="/../img/contactUs/1.1telephone.svg" />
                    </div>

                </div>
                <div class="phone__contact">
                    <h3 class="contact__title">Phone Number </h3>
                    <h3 class="contact__number">+987 876 765 76 577</h3>
                </div>
            </div>

            <div class="contact-us__mail">
                <div>
                    <img src="/../img/contactUs/2.mail.svg" />

                </div>
                <div class="mail__contact">
                    <h3 class="contact__title">Phone Number </h3>
                    <h3 class="contact__number">+987 876 765 76 577</h3>
                </div>
            </div>

            <div class="contact-us__ubi">
                <div>
                    <img src="/../img/contactUs/3.ubi.svg" />

                </div>
                <div class="ubi__contact">
                    <h3 class="contact__title">Phone Number </h3>
                    <h3 class="contact__number">+987 876 765 76 577</h3>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer__copyright">
        <h3 class="copyright__element">Copyright By@Example - 2020</h3>
        <h3 class="copyright__element">Terms of use | Privacy Environmental Policy</h3>
    </footer>
    <script src="/../scripts/showBurgerMenu.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
    
</body>

</html>