
import Swiper from 'swiper';
import 'swiper/css';



 const handPickedSwipper = new Swiper('.section-hand-picked__carrusel', {
    loop: true,
    slidesPerView: 1,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        1000: {
            slidesPerView: 1,
            spaceBetween: 100,
            centeredSlides: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            }
        }
    }
});

// document.addEventListener('DOMContentLoaded', function() {
//     // Tu código de inicialización del slider
//     $('.slick-container').slick({
//       slidesToShow: 3,
//       slidesToScroll: 1,
//       prevArrow: '<button type="button" class="slick-prev">Anterior</button>',
//       nextArrow: '<button type="button" class="slick-next">Siguiente</button>'
//     });
//   });
//   $(function() {
//     // Tu código de inicialización del slider
//     $('.slick-container').slick({
//       slidesToShow: 3,
//       slidesToScroll: 1,
//       prevArrow: '<button type="button" class="slick-prev">Anterior</button>',
//       nextArrow: '<button type="button" class="slick-next">Siguiente</button>'
//     });
//   });

// new Swiper('.popular__rooms__card__slider__mobile', {
//     loop: true,
//     slidesPerView: 1,
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });

// new Swiper('.menu__section__slider', {
//     loop: true,
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
//     breakpoints: {
//         1000: {
//             slidesPerView: 2
//         }
//     }
// });