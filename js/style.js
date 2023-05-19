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

AOS.init({
    offSet:400,
    duration:1000
});