


const menu = document.getElementsByClassName("header__inner-li")[0];
const burger = document.getElementsByClassName("inner__burger")[0];


burger.addEventListener("click", (event) => {
    if (menu.style.visibility == "visible") {
        menu.style.visibility = "hidden";

    }
    else {
        menu.style.visibility = "visible";

    }
});

const headerTag = document.getElementsByClassName("logo")[0];
const homeTag = document.getElementsByClassName("home")[0];
const locationContactImgTag = document.getElementsByClassName("img-container__img-form")[0];


headerTag.addEventListener("click", (event) => {
    const newUrl = "/";
    window.location.href = newUrl;
})

homeTag.addEventListener("click", (event) => {
    const newUrl = "/";
    window.location.href = newUrl;
})

locationContactImgTag.addEventListener("click", (event) => {
    const newUrl = "https://www.google.com/maps/place/OXYGEN+Academy+%7C+Full+Stack+Bootcamps/@40.4280583,-3.7159859,18z/data=!3m2!4b1!5s0xd418785496ed96b:0x1b2b7f3b14ba062f!4m6!3m5!1s0xd4229fc15efcb09:0xb0036150b0cd3867!8m2!3d40.4280563!4d-3.7146958!16s%2Fg%2F11q8x79343?entry=ttu";
    window.open(newUrl);
})

document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); 
    
    Swal.fire("Success!", "We will contact you shortly!", "success");
});
