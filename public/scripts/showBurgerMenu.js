

const header = document.querySelector('.header')
const menu = document.getElementsByClassName("header__inner-li")[0];
const burger = document.getElementsByClassName("inner__burger")[0];
const subtitleNavbar = document.getElementsByClassName('uptitle-header__h5')[0];
let lastScrollTop;
navbar = document.getElementsByClassName('header')[0];
document.onmousemove= mouseCoordinates;

burger.addEventListener("click", (event) => {
    if (menu.style.visibility == "visible") {
        menu.style.visibility = "hidden";

    }
    else {
        menu.style.visibility = "visible";

    }
});

const headerTag = document.getElementsByClassName("logo")[0];


headerTag.addEventListener("click", (event) => {
    const newUrl = "/";
    window.location.href = newUrl;
})

window.addEventListener('scroll',function(){
    let scrollTop = window.scrollY || document.documentElement.scrollTop;
    if(scrollTop > lastScrollTop){
        navbar.style.top='-180px';
    }
    lastScrollTop = scrollTop;
});


function mouseCoordinates(event) {
    let yPos= event.clientY;
    if (yPos < 200  || window.scrollY <= 50) {
        navbar.style.top='60px';
        if(window.scrollY <= 50){
            subtitleNavbar.style.visibility= "visible";
        }
    } else {
        navbar.style.top='-180px';
        subtitleNavbar.style.visibility= "hidden";
    }
}


