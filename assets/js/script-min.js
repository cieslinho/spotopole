const navBtn=document.querySelector(".nav__btn"),navOverlay=document.querySelector(".nav__overlay"),menu=document.querySelector(".nav__navbar"),navLinks=document.querySelectorAll(".nav__link"),btns=document.querySelectorAll(".suggested__btn"),handleNav=()=>{menu.classList.toggle("active"),navBtn.classList.toggle("active"),navOverlay.classList.toggle("active"),navLinks.forEach(e=>{e.addEventListener("click",()=>{menu.classList.remove("active"),navBtn.classList.remove("active"),navOverlay.classList.remove("active")})}),navOverlay.addEventListener("click",()=>{menu.classList.remove("active"),navBtn.classList.remove("active"),navOverlay.classList.remove("active")})};navBtn.addEventListener("click",handleNav);var swiper=new Swiper(".header__swiper",{loop:!0,spaceBetween:30,autoplay:{delay:2500,disableOnInteraction:!1}}),swiperGallery=new Swiper(".gallery__swiper",{pagination:{el:".gallery__pagination"},navigation:{nextEl:".gallery__next",prevEl:".gallery__prev"},breakpoints:{568:{slidesPerView:2},768:{slidesPerView:2},992:{slidesPerView:3},1230:{slidesPerView:4}},loop:!0,centeredSlides:!0,autoplay:{delay:2500,disableOnInteraction:!1}});btns.forEach(e=>{e.addEventListener("click",()=>{document.querySelector(".active").classList.remove("active"),e.classList.add("active"),a.forEach(a=>{e.id===a.id?(console.log("to samo id"),a.classList.add("active")):(console.log("inne id"),a.classList.remove("active"))})});const a=document.querySelectorAll(".suggested__box")});const pizzas=document.querySelectorAll("#pizza.suggested__box");function activePizzas(){pizzas.forEach(e=>{e.classList.add("active")})}activePizzas();