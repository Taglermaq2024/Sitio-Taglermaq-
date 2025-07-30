<!-- CDN Librerias -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/venobox/venobox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/script.js?0.0.7"></script>

<!-- Api Recaptcha -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>




<script>
   // TODO: INICIALIZA VENOBOX.JS
   $(document).ready(function() {
      $('.venobox').venobox();
   });

   // TODO: INICIALIZA AOS.JS 
   AOS.init({
      offset: 200,
      duration: 1000
   });




   // TODO: Mostrar navegación Sub-menu principal
   $("#mostrar-nav").click(function() {
      $(".wrapper--nav--mobile").toggleClass("encender-nav-mobile");
   });

   // Menu vertical principal
   $("#mostrar-menu").click(function() {
      $(".wrapper-menu-principal").addClass("mi-menu");
      $(".fondo-opacidad-menu").addClass("opacidad");
   });

   $("#click-close").click(function() {
      $(".wrapper-menu-principal").removeClass("mi-menu");
      $(".fondo-opacidad-menu").removeClass("opacidad");
   });

   $("#fondo").click(function() {
      $(".wrapper-menu-principal").removeClass("mi-menu");
   });

   $("#fondo").click(function() {
      $(".fondo-opacidad-menu").removeClass("opacidad");
   });



   // TODO: Desplazamiento en dispositivos moviles touchStart - touchEnd
   var element = $("#mobile-envasadora, #mobile-procesamiento, #mobile-cortadoras, #mobile-desposte, #mobile-hornos, #mobile-filtros-sanitarios, #mobile-suelas-botas, #mobile-inspeccion, #mobile-procesamiento-agroindustrial,  #mobile-higiene-inocuidad, #mobile-miscelaneos, #mobile-otras, #mobile-industrias");
   var touchStartY;
   var touchEndY;
   var touchThreshold = 10; // Umbral para distinguir entre clic y desplazamiento (ajusta según tus necesidades)

   element.on('touchstart', function(event) {
      touchStartY = event.changedTouches[0].clientY;
   });

   element.on('touchend', function(event) {
      touchEndY = event.changedTouches[0].clientY;
      if (Math.abs(touchEndY - touchStartY) < touchThreshold) {
         $(".ul-box").addClass("ver-mobile");
      }
   });

   element.on('click', function(event) {
      // Si el evento click se activa en dispositivos móviles, asegúrate de que no se dispare dos veces debido al touchend
      event.stopPropagation();
   });


   $(".volver").on("click", function() {
      setTimeout(function() {
         $(".ul-box").removeClass("ver-mobile");
      }, 100);
   });

   $(".icon-close").on("click", function() {
      setTimeout(function() {
         $(".ul-box").removeClass("ver-mobile");
      }, 100);
   });











   // TODO: SLIDER SPLIDE QUIENES SOMOS - PERSONAS
   document.addEventListener('DOMContentLoaded', function() {
      new Splide('#image-slider', {
         type: 'loop',
         autoplay: true,
      }).mount();
   });
   document.addEventListener('DOMContentLoaded', function() {
      new Splide('#image-slider2', {
         type: 'loop',
         autoplay: true,
      }).mount();
   });







   // TODO: MUESTRA PANTALLA MODAL PARA PDFs
   $(document).ready(function() {
      $("#BtnLogin").click(function() {
         $(".mostrarElemento").toggleClass("mostrar");
      });

      $("#cerrarVentana").click(function() {
         $(".mostrarElemento").removeClass("mostrar");
      });

   });







   // TODO: INICIO MODAL
   $(document).ready(function() {
      function openModal() {
         $("#myModal").css('display', 'flex');
         setTimeout(function() {
            $("#myModal").addClass("show");
            $(".modal-content").addClass("show");
         }, 10); // Pequeño retraso para asegurar que el display se aplique primero
      }

      function closeModal() {
         $(".modal-content").removeClass("show");
         setTimeout(function() {
            $("#myModal").removeClass("show");
            setTimeout(function() {
               $("#myModal").css('display', 'none');
            }, 400); // Coincide con la duración de la transición

         }, 10); // Pequeño retraso para la animación de contenido
      }

      // Abre el modal con animación
      $("#openModalBtn").click(openModal);

      // Cierra el modal cuando se hace clic en la "X"
      $(".close").click(closeModal);

      // Cierra el modal cuando se hace clic fuera del contenido del modal
      $(window).click(function(event) {
         if ($(event.target).is("#myModal")) {
            closeModal();
         }
      });
   });






   // TODO: BÚSQUEDA DE PRODUCTOS (ICONO LUPA)
   $(document).ready(function() {
      $("#openModal").click(function() {
         $("#modal").fadeIn();
         $(".modal-content").fadeIn();
      });

      $(".close").click(function() {
         $(".modal-content").fadeOut();
         $("#modal").fadeOut();
      });

      $(window).click(function(event) {
         if (event.target == $(".wrapper-modal")[0]) {
            $(".modal-content").fadeOut();
            $("#modal").fadeOut();
         }
      });
   });









   // TODO: APlica para los 2 formularios (Genérico y Maquinarias)
   document.addEventListener('DOMContentLoaded', function() {
      var form = document.querySelector('.content-formulario');

      form.addEventListener('submit', function(event) {
         // Evita el envío del formulario por defecto
         event.preventDefault();

         // Verifica si el reCAPTCHA ha sido marcado
         if (grecaptcha.getResponse() === "") {
            alert("Por favor, marca la casilla 'No soy un robot' antes de enviar el formulario.");
            return; // Detiene la ejecución si el reCAPTCHA no está marcado
         }

         // Si el reCAPTCHA está marcado, crea un objeto FormData con los datos del formulario
         var formData = new FormData(form);

         // Envía el formulario de manera asíncrona usando fetch
         fetch(form.action, {
               method: 'POST',
               body: formData
            })
            .then(response => {
               if (response.ok) {
                  return response.text();
               } else {
                  throw new Error('Error en el envío del formulario');
               }
            })
            .then(data => {
               // Muestra el mensaje de éxito
               var mensajeDiv = document.getElementById('mensaje');
               mensajeDiv.innerHTML = 'Mensaje enviado con éxito';

               // Recarga la página después de mostrar el mensaje (opcional)
               setTimeout(function() {
                  location.reload();
               }, 1000); // Recarga la página después de 1 segundo
            })
            .catch(error => {
               console.error('Error:', error);
               var mensajeDiv = document.getElementById('mensaje');
               mensajeDiv.innerHTML = 'Mensaje enviado con éxito.';

               setTimeout(function() {
                  location.reload();
               }, 1000);
            });
      });
   });











   // TODO: OBTENER Y ESTABLECER LA URL ACTUAL EN EL CAMPO OCULTO
   document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('url_referencia').value = window.location.href;
   });






   // TODO: ORGANIZACIÓN
   $('#box__organigram2 li:first-child').addClass('active');
   $('.cubox-content').hide();
   $('.cubox-content:first').show();

   // Click function
   $('#box__organigram2 li').mouseenter(function() {
      $('#box__organigram2 li').removeClass('active');
      // $(this).addClass('active');
      $('.cubox-content').hide();

      var activeTab = $(this).find('a').attr('href');
      $(activeTab).fadeIn();
      return false;
   });






   // TODO: DEJA ACTIVA LAS CATEGORIAS CON UN COLOR
   window.onload = function() {
      const buttons = document.querySelectorAll('#tv-category-image');
      const currentUrl = window.location.href;

      buttons.forEach(indice => {
         if (indice.href === currentUrl) {
            indice.classList.add('active-cat');
         }
      });
   };






   // TODO: SI "NO QUIERES" MOSTRAR EL PRELOADER AGREGA LA CLASE "no-preload" AL ENLACE
   // TODO: ANIMACIÓN PRELOADER PARA TODO EL SITIO WEB (CUANDO SE HACE CLICK EN CUALQUIER ENLACE)
   document.addEventListener('DOMContentLoaded', function() {

      // !Mostrar el preloader al hacer clic en cualquier enlace
      document.querySelectorAll('a').forEach(link => {
         link.addEventListener('click', function(event) {

            // !Verifica si el enlace tiene la clase 'no-preload' antes de activar el preloader 
            if (!link.classList.contains('no-preload')) {
               document.getElementById('loading-overlay').style.display = 'flex';
            }
         });
      });

      // !Ocultar el preloader cuando la página se haya cargado completamente
      window.addEventListener('load', function() {
         document.getElementById('loading-overlay').style.display = 'none';
      });

      // !Detectar si la página fue cargada desde el caché del navegador
      window.addEventListener('pageshow', function(event) {
         if (event.persisted) {
            // !Si se cargó desde el caché, (si se vuelve atras desde el navegador se oculta preload)
            document.getElementById('loading-overlay').style.display = 'none';
         }
      });
   });
</script>