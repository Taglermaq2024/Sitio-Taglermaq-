<!doctype html>
<html lang="es">

<head>

   <!-- Google Tag Manager -->
   <script>
      (function(w, d, s, l, i) {
         w[l] = w[l] || [];
         w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
         });
         var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
         j.async = true;
         j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
         f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-WWC7744W');
   </script>
   <!-- End Google Tag Manager -->


   <?php
   require "meta.php";
   require "estilos.php";
   ?>


   <?php wp_head(); ?>

</head>


<body>
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWC7744W"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->



   <!-- Preload con animación para categorías -->
   <div id="loading-overlay" style="display: none;">
      <div class="spinner"></div>
   </div>






   <!-- header -->
   <div class="header__content">
      <a href="<?php bloginfo('url'); ?>">
         <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/12/tgm-navidad.png" class="img-vector-logotipo" alt="">
      </a>
      <div class="sub-menu-principal">
         <a href="<?php bloginfo('url'); ?>">
            <li class="txt-sub-menu-principal">Inicio</li>
         </a>
         <a href="<?php bloginfo('url'); ?>/servicio-asistencia-tecnica/">
            <li class="txt-sub-menu-principal">Asistencia Técnica</li>
         </a>
         <a href="<?php bloginfo('url'); ?>/noticias/">
            <li class="txt-sub-menu-principal">Novedades & Tecnología</li>
         </a>
         <a href="<?php bloginfo('url'); ?>/videos/">
            <li class="txt-sub-menu-principal">Videos</li>
         </a>
         <a style="position: relative; justify-content: center; display: flex;" href="<?php bloginfo('url'); ?>/comics-maquito/">
            <span style="
            position: absolute;
            color: #0f0f0f;
            top: -16px;
            font-size: .7em;
            background-color: #8cc63f;
            border-radius: 10px;
            font-weight: bold;
            padding: 0 .8em;
            ">Nueva Edición</span>

            <li class="txt-sub-menu-principal">Historias de Maquito</li>
         </a>
         <a href="<?php bloginfo('url'); ?>/quienes-somos/">
            <li class="txt-sub-menu-principal">Quiénes Somos</li>
         </a>

         <a href="<?php bloginfo('url'); ?>/formulario-de-contacto/">
            <li class="txt-sub-menu-principal">Contacto</li>
         </a>
      </div>


      <div class="contenedor--iconos">

         <div class="banner-mi-menu">
            <h1 class="txt-mostrar-menu" id="mostrar-menu">MENÚ</h1>
         </div>


         <span id="mostrar-nav" class="icons--machines--burger icon-burger">
            <img class="icono-burguer" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/home.png">
         </span>



         <!-- INICIO MODAL SEARCH-->
         <div id="openModal" class="block-search">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/03/search.png" alt="">
         </div>

         <div id="modal" class="modal-search">
            <div class="wrapper-modal">
               <div class="modal-content">
                  <span class="close">&times;</span>

                  <!-- BUSCAR MÁQUINAS -->
                  <div class="search-container">
                     <form role="search" method="get" id="advanced-searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                        <div class="wrapper-input">
                           <label class="screen-reader-text" for="s">Buscar:</label>
                           <input class="input-search" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Ingresa tu búsqueda..." />
                           <input class="btn-search" type="submit" id="searchsubmit" value="Buscar" />
                        </div>
                     </form>
                  </div>

               </div>
            </div>
         </div>
         <!-- FIN MODAL SEARCH-->



         <div id="fondo" class="fondo-opacidad-menu"></div>
         <div class="wrapper-menu-principal">
            <div class="content-menu-principal">

               <div class="box-menu-principal">
                  <div class="block-menu-principal">
                     <h4 class="title-inicio-menu">¡Bienvenido!</h4>
                     <img id="click-close" class="icon-menu-principal" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg" alt="">
                  </div>
               </div>

               <div class="separation-tecnologias"></div>
               <h3 class="titulo-por-sector">INDUSTRIAS</h3>

               <div id="mobile-industrias" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/varios-icon2.svg">
                        </div>
                        Industrias
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">

                     <img class="img-banner" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-industria.jpg">
                     <li class="color-industria titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/varios-icon2.svg">Industrias
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                     </li>


                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/avimaq/">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/avicola-icon.svg">
                           Avícola
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/bakerymaq/">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/bakery-icon.svg">
                           Bakery
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/carnicomaq/">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/carnico-icon.svg">
                           Cárnicos
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/foodservice/">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/01/foodservice-ico-menu.svg">
                           Food Service
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/hortofruticolamaq/">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/horto-icon.svg">
                           Hortofrutícolas
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/logisticmaq/">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/11/intralogistica-icon.svg">
                           Intralogística
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/lactomaq/">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/lacteos-icon.svg">
                           Lácteos
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/aquamaq">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/pescado-icon.svg">
                           Pescados y Mariscos
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/petfoodmaq">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/petfood-icon.svg">
                           Petfood
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/pharma/">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/01/pharma-ico-menu.svg">
                           Pharma
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/vegmaq/">
                        <li class="paint-li">
                           <img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/veggie-icon.svg">
                           Veggie & Vegan
                        </li>
                     </a>

                     <div class="volver">
                        <img class="volver-arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>
                  </ul>
               </div>

               <div class="separation-tecnologias"></div>
               <h3 class="titulo-por-sector">Tecnologias</h3>

               <div id="mobile-envasadora" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/envasado-menu2.svg">
                        </div>
                        Máquinas Envasadoras
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-envasadora.jpg">


                     <li class="color-envasadora titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/envasado-menu2.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Máquinas Envasadoras</h4>
                     </li>


                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=maquinas-envasadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=envasadoras-flow-pack">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/env-flowpack-1.svg">
                           Envasadoras Flow Pack
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=envasadoras-verticales">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/env-verticales-1.svg">
                           Envasadoras Vertical
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=envasadoras-de-campana">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/env-campana-1.svg">
                           Envasadora de Campana
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=tuneles-de-retraccion-bolsas-por-aire">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/env-aire-1.svg">
                           Túneles de Retracción Bolsas por Aire
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=tuneles-de-retraccion-bolsas-por-agua">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/env-agua-1.svg">
                           Túneles de Retracción Bolsas por Agua
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=envasadora-termoselladora-top-seal">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/env-topseal-1-1.svg">
                           Envasadora Termoselladora Top Seal
                        </li>
                     </a>
                     <!-- <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2023/07/env-enfajadora.svg">Envasadoras Retractiles / Enfajadoras</li> -->
                     <!-- <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=desapilador-de-bandejas">
                            <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/env-desapilador-bandejas-1.svg">
                                Desapilador de Bandejas
                            </li>
                        </a> -->
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=termoformadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/env-termoformadoras-1.svg">
                           Termoformadoras
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=envolvedoras-de-film-extensible">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/env-film-extensible-1.svg">
                           Envolvedoras de Film Extensible
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=encajadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/env-encajadoras-1.svg">
                           Encajadoras
                        </li>
                     </a>

                     <div class="volver">
                        <img class="volver-arrow"
                           src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>

                  </ul>
               </div>

               <div id="mobile-procesamiento" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/procesamiento-menu2.svg">
                        </div>
                        Máquinas de Procesamiento
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-procesamiento.jpg">


                     <li class="color-procesamiento titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/procesamiento-menu2.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Máquinas de Procesamiento</h4>
                     </li>


                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=maquinas-de-procesamiento">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría
                        </li>
                     </a>

                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=masajeadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cat-masajeadora1.svg">
                           Masajeadores Tumbler
                        </li>
                     </a>

                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=atadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/04/icon-atadoras.svg">
                           Atadoras
                        </li>
                     </a>

                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=cortadora-separadora-de-embutidos">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/04/icon-separadoras.svg">
                           Cortadora Separadora Embutidos
                        </li>
                     </a>

                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=picado-y-emulsion">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/04/icon-picadoras.svg">
                           Picado y Emulsión
                        </li>
                     </a>

                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=moledoras-mezcladoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/04/icon-moledoras.svg">
                           Moledoras / Mezcladoras
                        </li>
                     </a>

                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=embutidoras-al-vacio">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cat-embutidora1.svg">
                           Embutidoras al vacío
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=formadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cat-formadora1.svg">
                           Máquinas formadoras
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=inyeccion-y-marinado">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cat-marinado1.svg">
                           Inyección y marinado
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=moledoras-carne-congelada">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cat-carne-congelada1.svg">
                           Moledoras de carne congelada
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=torcedoras-de-salchichas">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cat-torcedoras1.svg">
                           Torcedoras de salchichas
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=preparacion-de-salmuera">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cat-salmuera1.svg">
                           Preparación de salmuera
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=linea-de-carne-molida">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cat-carne-molida1.svg">
                           Línea carne molida
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=sistemas-de-dosificacion">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cat-dosificacion1.svg">
                           Sistemas de Dosificación
                        </li>
                     </a>

                     <div class="volver">
                        <img class="volver-arrow"
                           src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>
                  </ul>
               </div>

               <div id="mobile-cortadoras" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cortadora-menu2.svg">
                        </div>
                        Máquinas Cortadoras
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-cortadoras.jpg">


                     <li class="color-cortadora titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cortadora-menu2.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Máquinas Cortadoras</h4>
                     </li>

                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=maquinas-cortadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=cortadora-de-cubos-y-tiras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cor-cortador-de-cubos.svg">
                           Cortadora Cubos y Tiras
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=porcionadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cor-porcionadoras.svg">
                           Porcionadoras
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=rebanadoras-de-laminas">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cor-rebanadoras.svg">
                           Rebanadoras de Láminas
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=sierra-cortadora-de-huesos-manual">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cor-cortadora-de-huesos.svg">
                           Sierras Cortadoras de Huesos Manual
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=sierra-de-corte-automatico">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cor-sierra-de-corte.svg">
                           Sierra de Corte Automático
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=cutter">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cor-cutters.svg">
                           Cutter
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=prensa-de-carne">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cor-prensa-de-carne.svg">
                           Prensa de Carne
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=cortadora-de-pan">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cor-cortador-de-pan.svg">
                           Cortadoras de pan
                        </li>
                     </a>


                  </ul>
               </div>

               <div id="mobile-desposte" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/desposte2.svg">
                        </div>
                        Equipos de Desposte
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-desposte.jpg">


                     <li class="color-desposte titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/desposte2.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Equipos de Desposte</h4>
                     </li>

                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/equipos-de-desposte/?_filter_desposte=equipos-de-desposte">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/equipos-de-desposte/?_filter_desposte=sierra-de-desposte">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/des-sierras-de-desposte1.svg">
                           Sierras de Desposte
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/taglermaq2024/equipos-de-desposte/?_filter_desposte=cuchillos-circulares-quantum-flex">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/des-cuchillos-bettcher1.svg">
                           Cuchillos Circulares Bettcher</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/taglermaq2024/equipos-de-desposte/?_filter_desposte=esterilizadores-de-cuchillos">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/des-esterilizadores1.svg">
                           Esterilizadores de Cuchillos</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/taglermaq2024/equipos-de-desposte/?_filter_desposte=desmembranadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/sheq-tecnologia-uv1.svg">
                           Desmembranadoras</li>
                     </a>
                     <div class="volver">
                        <img class="volver-arrow"
                           src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>
                  </ul>
               </div>

               <div id="mobile-hornos" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/hornos-icon-menu3.svg">
                        </div>
                        Hornos y Marmitas
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-hornos.jpg">


                     <li class="color-hornos titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/hornos-icon-menu3.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Hornos y Marmitas</h4>
                     </li>


                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/hornos-de-coccion/?_filter_hornos=hornos-de-coccion">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/hornos-de-coccion/?_filter_hornos=hornos-de-coccion-y-ahumado-pequena">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/horno-mediana-industria1.svg">
                           Hornos de Cocción y Ahumado Pequeña y Mediana Industria
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/hornos-de-coccion/?_filter_hornos=hornos-de-coccion-y-ahumado-industrial">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/horno-industrial2.svg">
                           Hornos de Cocción y Ahumado Industrial</li>
                     </a>

                     <div class="volver">
                        <img class="volver-arrow"
                           src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>
                  </ul>
               </div>

               <div id="mobile-filtros-sanitarios" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/filtros-menu2.svg">
                        </div>
                        Filtros Sanitarios
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner"
                        src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-filtros-sanitarios.jpg">


                     <li class="color-filtros titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/filtros-menu2.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Filtros Sanitarios</h4>
                     </li>


                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=filtros-sanitarios">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=desinfectante-de-manos">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/desinfectante-de-manos1.svg">
                           Desinfectante de Manos
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=control-de-acceso-y-lavado-de-manos">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/control-de-acceso1.svg">
                           Control de Acceso y Lavado de Manos
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=lavamanos">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/lavamanos1.svg">
                           Lavamanos
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=limpiasuelas">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/fil-limpiasuelas1.svg">
                           Limpiasuelas
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=limpiabotas">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/fil-limpiabotas1.svg">
                           Limpiabotas
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=limpiasuelas-con-limpieza-y-desinfeccion-de-manos">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/fil-limpieza-desinfeccion-manos1.svg">
                           Limpiasuelas con limpieza y desinfección de manos
                        </li>
                     </a>

                     <div class="volver">
                        <img class="volver-arrow"
                           src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>
                  </ul>
               </div>


               <div id="mobile-inspeccion" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/inspeccion-icon-menu2.svg">
                        </div>
                        Sistemas de Inspección
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-inspeccion.jpg">

                     <li class="color-inspeccion titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/inspeccion-icon-menu2.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Sistemas de Inspección</h4>
                     </li>

                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=sistemas-de-inspeccion">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=rayos-x">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/rayos-x.svg">
                           Rayos X
                        </li>
                     </a>
                     <!-- <a class="link-categoria" href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=imagen-quimica">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/imagen-quimica.svg">
                           Imagen Química</li>
                     </a> -->
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=detector-de-metales">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/detector-metal1.svg">
                           Detector de Metales</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=chequeadores-de-peso">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/chequeador-de-peso.svg">
                           Chequeadores de Peso</li>
                     </a>

                     <div class="volver">
                        <img class="volver-arrow"
                           src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>
                  </ul>
               </div>

               <div id="mobile-procesamiento-agroindustrial" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/agroindustrial3-dark2.svg">
                        </div>
                        Procesamiento Agroindustrial
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-agroindustrial.jpg">

                     <li class="color-agroindustrial titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/agroindustrial3-dark2.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Procesamiento Agroindustrial</h4>
                     </li>


                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=procesamiento-agroindustrial">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=calibradoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/calibradoras1.svg">
                           Calibradoras
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=cortadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cortadoras1.svg">
                           Cortadoras
                        </li>
                     </a>
                     <a class="link-categoria"
                        href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=descorazonadora-y-descabezadora">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/descorazonadora1.svg">
                           Descorazonadora y Descabezadora</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=lavadoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/lavadoras1.svg">
                           Lavadoras
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=peladoras">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/peladoras1.svg">
                           Peladoras
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=inspeccion-visual">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/inspeccion-visual1.svg">
                           Inspección Visual
                        </li>
                     </a>

                     <div class="volver">
                        <img class="volver-arrow"
                           src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>
                  </ul>
               </div>

               <div id="mobile-higiene-inocuidad" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/higiene-icon2.svg">
                        </div>
                        Higiene e Inocuidad
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-higiene-inocuidad.jpg">


                     <li class="color-higiene1 titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/higiene-icon2.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Higiene e Inocuidad</h4>
                     </li>

                     <!-- <a class="link-categoria" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=seguridad-industrial">
                            <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/sheq-seguridad-industrial1.svg">
                                Seguridad Industrial
                            </li>
                        </a> -->


                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=higiene-e-inocuidad">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=proteccion-e-higiene-personal">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/sheq-proteccion-e-higiene1.svg">
                           Protección e Higiene Personal</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=control-de-higiene-de-manos">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/sheq-control-de-higiene1.svg">
                           Control de Higiene de Manos</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=montacarga-higienizable">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/sheq-soluciones-higienizables1-1.svg">
                           Montacarga Higienizable</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=tecnologia-uv-desinfectante">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/sheq-tecnologia-uv1.svg">
                           Tecnología UV desinfectante
                        </li>
                     </a>

                     <div class="volver">
                        <img class="volver-arrow"
                           src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>
                  </ul>
               </div>

               <div id="mobile-miscelaneos" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/miscelaneos-icon2.svg">
                        </div>
                        Miscelaneos
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-miscelaneos.jpg">

                     <li class="color-miscelaneos titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/miscelaneos-icon2.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Miscelaneos</h4>
                     </li>


                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=miscelaneos">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=guantes-de-seguridad">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/guantes-de-seguridad1.svg">
                           Guantes de Seguridad</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=cuchillos-manuales">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cuchillos-manuales1.svg">
                           Cuchillos Manuales</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=tecles">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/tecles1.svg">
                           Tecles
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=equipos-rectificadores-de-cuchillos">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/equipo-rectificadores1.svg">
                           Equipos Rectificadores de Cuchillos</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=cuchillos-quantum-flex">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/des-cuchillos-bettcher1-1.svg">
                           Cuchillos Circulares Quantum Flex</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=maquinas-higienizables">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/sheq-soluciones-higienizables1-1.svg">
                           Montacarga Higienizable</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=varios">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/varios1.svg">
                           Varios
                        </li>
                     </a>

                     <div class="volver">
                        <img class="volver-arrow"
                           src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>
                  </ul>
               </div>

               <div id="mobile-otras" class="caja-categorias">
                  <div class="content-titulos-categoria">
                     <h3>
                        <div class="circle-colors">
                           <img class="icon-cat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/automatizacion-dark2.svg">
                        </div>
                        Otras Categorías
                     </h3>
                     <img class="arrow" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png" alt="">
                  </div>
                  <ul class="ul-box">
                     <img class="img-banner"
                        src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/banner-otras.jpg">
                     <li class="color-otras titulos-box-categoria">
                        <img class="icon-colors" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/automatizacion-dark2.svg">
                        <img class="icon-close" class="" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/close-white.svg">
                        <h4>Otras Categorías</h4>
                     </li>


                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/otras-tecnologias/?_filter_otras=otras-tecnologias">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/ver-todo1.svg">
                           Toda la categoría
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/otras-tecnologias/?_filter_otras=fabricadoras-de-hielo-troceado">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/hielo-troceado.svg">
                           Fabricadoras de Hielo Troceado
                        </li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/otras-tecnologias/?_filter_otras=sistemas-de-automatizacion">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/automatizacion1.svg">
                           Sistemas de automatización</li>
                     </a>
                     <a class="link-categoria" href="<?php bloginfo('url'); ?>/otras-tecnologias/?_filter_otras=lavadoras-industriales">
                        <li class="paint-li"><img class="icons-industria" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/lavadoras-industriales.svg">
                           Lavadoras Industriales</li>
                     </a>

                     <div class="volver">
                        <img class="volver-arrow"
                           src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/arrow.png">
                        <h3 class="txt-volver">volver</h3>
                     </div>
                  </ul>
               </div>
            </div>
         </div>



         <!-- Mostrar mega-menú Wordpress -->
         <div class="content_mega_menu">
            <div class="menu_horizontal">
               <?php
               wp_nav_menu(
                  array(
                     'theme_location' => 'menu-footer',
                     'menu_class' => 'menu_footer_class'
                  )
               );
               ?>
            </div>
         </div>
         <!-- Buscador de wordpress -->
         <?php dynamic_sidebar('search-1'); ?>
      </div>


      <!-- Menú Mobile -->
      <div class="wrapper--nav--mobile">
         <div class="content--nav--mobile">
            <a class="color-nav-mobile" href="<?php bloginfo('url'); ?>">
               <div class="">Inicio</div>
            </a>
            <a class="color-nav-mobile" href="<?php bloginfo('url'); ?>/servicio-asistencia-tecnica">
               <div class="">Servicio Asistencia Técnica</div>
            </a>

            <a class="color-nav-mobile" href="<?php bloginfo('url'); ?>/noticias/">
               <div class="">Novedades & Tecnología</div>
            </a>
            <a class="color-nav-mobile" href="<?php bloginfo('url'); ?>/videos/">
               <div class=""><span class="globo">Nuevo</span>Videos</div>
            </a>
            <a class="color-nav-mobile" href="<?php bloginfo('url'); ?>/comics-maquito/">
               <div class="">Historias de Maquito</div>
            </a>
            <a class="color-nav-mobile" href="<?php bloginfo('url'); ?>/quienes-somos/">
               <div class="">Quienes Somos</div>
            </a>

         </div>
      </div>
      <!-- End Menú Mobile -->

   </div>