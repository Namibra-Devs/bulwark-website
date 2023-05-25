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
// const btns = document.querySelectorAll(".question-btn"); 
// btns.forEach((btn) => {
//  btn.addEventListener("click", (e) => {
//   const question = e.currentTarget.parentElement.parentElement;
//   question.classList.toggle('show-text')
//  })
// })

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

    
AOS.init({
    offSet:400,
    duration:1000
});