// =========================PRELOADER==========================
const preloader = document.querySelector(".preloader");
window.addEventListener("load", () => {
    preloader.classList.add("hide-preloader");
});
// =========================NAVBAR TOGGLE=========================
const toggleBtn = document.querySelector(".toggle .fa-bars"),
      navList = document.querySelector(".navbar-list");

toggleBtn.addEventListener("click", (e) => {
    e.preventDefault();
    //  navList.classList.toggle("navbar-list-show"); 
    //  toggleBtn.classList.replace('fa-bars', 'fa-times');

     if(toggleBtn.classList.contains('fa-bars')) {
        toggleBtn.classList.replace('fa-bars', 'fa-times');
        navList.classList.add("navbar-list-show");
    } else {
        toggleBtn.classList.replace('fa-times', 'fa-bars');
        navList.classList.remove("navbar-list-show");
    }
})

// =========================SCROLL TO BACK TO TOP LINK=========================
const topLink = document.querySelector(".top-link");
window.addEventListener("scroll", () => {
    const scrollHeight = window.pageYOffset;
    if(scrollHeight > 400) {
      topLink.classList.add('show-link');
    } else {
    topLink.classList.remove('show-link');
    }

    // scroll to remove side menu
    if(scrollHeight > 0) {
        navList.classList.remove("navbar-list-show");
        toggleBtn.classList.replace('fa-times', 'fa-bars');
    } 
});

// =========================ACORDION=========================
const questions= document.querySelectorAll(".question"); 

questions.forEach((question) => {
const btn= question.querySelector(".question-btn"); 

     btn.addEventListener("click", () => {
      questions.forEach((item) => {
        if(item !== question) {
           item.classList.remove("show-text");
        }
      });
      question.classList.toggle("show-text");

     });
     });
// =========================PROJECT, DONATION AND VOLUNTEER COUNTUP=========================
  const valueDisplays = document.querySelectorAll(".number"); 
     let interval = 5000; 
     
     valueDisplays.forEach((valueDisplay) => {
         let startValue = 0;
         let endValue = parseInt(valueDisplay.getAttribute("data-val")); 
         let duration = Math.floor(interval / endValue); 
         let counter = setInterval(() => {
             startValue += 1;
             valueDisplay.textContent = startValue; 
             if(startValue == endValue) {
                 clearInterval(counter); 
             }
         }, duration)
     
     });

// =========================ANIMATION ON SCROLL=========================
AOS.init({
    offSet:400,
    duration:1000
});

const date = document.getElementById("date");
date.innerHTML = new Date().getFullYear();

// var swiper = new Swiper(".slide-content", {
//     slidesPerView: 1,
//     spaceBetween: 30,
//     loop: true,
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//     },
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },
//   });