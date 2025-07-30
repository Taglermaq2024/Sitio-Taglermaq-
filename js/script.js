// TODO: Barra de progreso para la búsqueda
window.onscroll = function () {
   scrollProgress();
};

function scrollProgress() {
   var winScroll =
      document.body.scrollTop || document.documentElement.scrollTop;
   var height =
      document.documentElement.scrollHeight -
      document.documentElement.clientHeight;
   var scrolled = (winScroll / height) * 100;
   document.getElementById("progressBar").style.width = scrolled + "%";
}

// TODO: Para crear otro SWIPER: const swiper nuevoNombre = new Swiper
// INICIALIZACIÓN SWIPER - Carrusel Slider principal
const swiper1 = new Swiper(".swiper-carrusel-principal", {
   loop: true,

   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },

   autoplay: {
      delay: 6000,
      disableOnInteraction: false,
   },

   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },

   scrollbar: {
      el: ".swiper-scrollbar",
   },
});

// Swiper SAT - SERVICIOS Y ASISTENCIAS
var sat_servicios = new Swiper(".sat-servicios", {
   slidesPerView: 1,
   spaceBetween: 30,
   loop: true,
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },

   autoplay: {
      delay: 2500,
      disableOnInteraction: false,
   },

   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },

   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },
});

// Swiper CAPACITACIONES
var capacitaciones = new Swiper(".capacitaciones", {
   slidesPerView: 3,
   spaceBetween: 30,
   loop: true,

   autoplay: {
      delay: 2500,
      disableOnInteraction: false,
   },

   navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
   },

   breakpoints: {
      380: {
         slidesPerView: 1,
         spaceBetween: 40,
      },
      640: {
         slidesPerView: 2,
         spaceBetween: 40,
      },
      768: {
         slidesPerView: 2,
         spaceBetween: 40,
      },
      1024: {
         slidesPerView: 3,
         spaceBetween: 50,
      },
   },
});

// TODO: Slider Detalle - Productos Relacionados
document.addEventListener("DOMContentLoaded", function () {
   new Splide("#destacados", {
      type: "loop",
      keyboard: "global",
      pagination: "true",
      arrows: "false",
      drag: true,
      perPage: 4,
      perMove: 1,
      autoplay: true,
      interval: 1000,

      breakpoints: {
         1200: {
            perPage: 3,
         },
         1024: {
            perPage: 2,
         },
         768: {
            perPage: 1,
         },
         480: {
            perPage: 1,
         },
      },
   }).mount();
});

// TODO: Slick para Galería de imagenes
$(document).ready(function () {
   $(".slider-for").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: ".slider-nav",
   });

   $(".slider-nav").slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      vertical: true,
      asNavFor: ".slider-for",
      dots: false,
      arrows: false,
      focusOnSelect: true,
      verticalSwiping: true,
      responsive: [
         {
            breakpoint: 992,
            settings: {
               vertical: true,
            },
         },
         {
            breakpoint: 580,
            settings: {
               vertical: true,
               slidesToShow: 3,
            },
         },
         {
            breakpoint: 380,
            settings: {
               vertical: true,
               slidesToShow: 2,
            },
         },
      ],
   });

   // FORZAR ACTUALIZACIÓN DEL SLIDER
   setTimeout(function () {
      $(".slider-for").slick("setPosition");
      $(".slider-nav").slick("setPosition");
   }, 500);
});
