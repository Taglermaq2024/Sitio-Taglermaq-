<?php
/* Template Name: Index */
?>

<?php get_header(); ?>


<?php @include("contactos.php"); ?>


<div class="wrapper-mi-swiper">

   <div class="swiper-carrusel-principal">
      <div class="swiper-wrapper">


         <!-- Banner VC999 -->
         <div class="swiper-slide" style="overflow: hidden">
            <div class="wraper-banner-vc999">
               <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/06/fondo-banner-vc999-3.jpg" alt="Banner VC999">
            </div>

            <div class="wrapper-izq-der">
               <div class="content-txt-izq">
                  <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/titulo-vc999-1.png" alt="">
                  <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/06/sutitle-vc999.png" alt="">
               </div>

               <div class="content-img-der">
                  <a href="https://taglermaq.cl/envasadora-al-vacio-de-doble-campana-k12-s/">
                     <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/06/maquina-vc999.png" alt="">
                  </a>
               </div>
            </div>
         </div>



         <!-- Taglermaq Experience -->
         <div class="swiper-slide">
            <section class="wrapper-tgm-experience">
               <img class="img-banner-top" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/banner-experience.png" />
               <img class="img-fondo" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/fondo-experience.jpg" />
               <img class="wave" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/wave-experience.png" />
               <div class="wrapper-experience">
                  <div class="box-experience">
                     <img class="txt-experience" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/logo-experience.svg" />
                     <h1>TECNOLOGÍAS PARA LA INDUSTRIA CÁRNICA Y EMBUTIDOS</h1>
                     <h2>07. - 08.08.2025 • SANTIAGO</h2>

                     <div class="content-btn-experience">
                        <a href="https://taglermaq.cl/tgm-experience/">
                           <button class="btn-experience">IR AL SITIO WEB EXCLUSIVO</button>
                        </a>
                     </div>

                     <img class="machines" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/machines-experience.png" />
                  </div>
               </div>
            </section>
         </div>


         <!-- Comics Maquito -->
         <div class="swiper-slide">
            <div class="wraper-maquito2025">
               <img src="/wp-content/uploads/2025/05/fondo-maquito.jpg" alt="Maquito Iffa-2025">
            </div>

            <div class="wrapper-dibujo-maquito">
               <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/05/maquito2025-3.png" alt="maquito 2025">
            </div>

            <a class="no-preload" href="<?php bloginfo('url'); ?>/comics-maquito/">
               <img class="btn-maq2025" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/05/btn-new-historia.png" alt="">
            </a>
         </div>



         <!-- Modula Flexibox -->
         <div class="swiper-slide">
            <div class="wrapper-banner-flexibox">
               <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/banner-flexibox.jpg" alt="">

               <a class="no-preload" href="https://taglermaq.cl/logisticmaq/modula/modula-flexibox/" target="_blank">
                  <button>CONOCER MÁS</button>
               </a>
            </div>

            <div class="wrapper-flexibox">
               <img class="block-doble" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/block-doble.png" alt="">

               <div class="content-flexibox">
                  <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/modula-flexibox1.png" alt="">
               </div>
            </div>
         </div>

      </div>


      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next" style="z-index: 3;"></div>

      <!-- <div class="swiper-scrollbar"></div> -->
   </div>



</div>




<!-- SECTORES INDUSTRIALES -->
<section class="screen--icons2">

   <h2 class="title--sector-industrial margin--title">SECTORES
      <span class="title--verde">INDUSTRIALES</span>
   </h2>
   <p class="bajada--sector-industrial">Encuentra las tecnologías para optimizar tus líneas de procesamiento, según tu sector</p>


   <div class="grid-container-new-grilla-v1">

      <div class="grid-item column1">
         <a href="<?php bloginfo('url'); ?>/bakerymaq/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/bakery-img.jpg" alt="bakerymaq" />
            <div class="content-grid-color1 color-bakery">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/bakery1.svg" alt="icono-bakerymaq" />
                  <h2 class="title-sector">Bakery</h2>
               </div>
            </div>
         </a>
      </div>


      <div class="grid-item column2">
         <a href="<?php bloginfo('url'); ?>/carnicomaq/">
            <img class="move-carnico" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/carnico-img.jpg" alt="carnicomaq" />
            <div class="content-grid-color2 color-carnico">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/carnico1.svg" alt="icono-carnicomaq" />
                  <h2 class="title-sector">Cárnico</h2>
               </div>
            </div>
         </a>
      </div>

      <div class="grid-item column3">
         <a href="<?php bloginfo('url'); ?>/vegmaq/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/vegano-img.jpg" alt="vegmaq" />
            <div class="content-grid-color3 color-veggie-vegan">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/vegan1.svg" alt="icono-vegmaq" />
                  <h2 class="title-sector">Veggie & Vegan</h2>
               </div>
            </div>
         </a>
      </div>

      <div class="grid-item column4">
         <a href="<?php bloginfo('url'); ?>/aquamaq/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/pescado-y-maricos-img.jpg" alt="aquamaq" />
            <div class="content-grid-color4 color-pesquero">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/pesquera1.svg" alt="icono-aquamaq" />
                  <h2 class="title-sector">Pescados y Mariscos</h2>
               </div>
            </div>
         </a>
      </div>

      <div class="grid-item column5">
         <a href="<?php bloginfo('url'); ?>/avimaq/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/avicola-img.jpg" alt="avimaq" />
            <div class="content-grid-color5 color-avicola">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/grid-avicola.svg" alt="icono-avimaq" />
                  <h2 class="title-sector">Avícola</h2>
               </div>
            </div>
         </a>
      </div>

      <div class="grid-item column6">
         <a href="<?php bloginfo('url'); ?>/hortofruticolamaq/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/Hortofruticola-img.jpg" alt="hortofruticolamaq" />
            <div class="content-grid-color6 color-fruticola">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/fruticola1.svg" alt="icono-hortofruticolamaq" />
                  <h2 class="title-sector">Hortofrutícola</h2>
               </div>
            </div>
         </a>
      </div>

      <div class="grid-item column7">
         <a href="<?php bloginfo('url'); ?>/lactomaq/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/lacteos-img.jpg" alt="lactomaq" />
            <div class="content-grid-color7 color-lacteos">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/lacteos1.svg" alt="icono-lactomaq" />
                  <h2 class="title-sector">Lácteos y Quesos</h2>
               </div>
            </div>
         </a>
      </div>

      <div class="grid-item column8">
         <a href="<?php bloginfo('url'); ?>/petfoodmaq/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/09-petfood.jpg" alt="petfoodmaq" />
            <div class="content-grid-color2 color-pharma">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/petfood1.svg" alt="icono-petfoodmaq" />
                  <h2 class="title-sector">Petfood</h2>
               </div>
            </div>
         </a>
      </div>

      <div class="grid-item column9">
         <a href="<?php bloginfo('url'); ?>/cobotmaq">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/01/robot-colaborativo-industrial2.jpg" alt="cobotmaq" />
            <div class="content-grid-color8 color-petdood">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" style="width: 100px; height: 100px" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/12/robot-colaborativo1.svg" alt="robot-colaborativo" />
                  <h2 class="title-sector">Robot Colaborativo</h2>
               </div>
            </div>
         </a>
      </div>

      <div class="grid-item column10">
         <a href="<?php bloginfo('url'); ?>/logisticmaq/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/intralogistica-img.jpg" alt="logisticmaq" />
            <div class="content-grid-color4 color-intralogistica">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/icon-intralogistica.svg" alt="icono-logisticmaq" />
                  <h2 class="title-sector">Intralogística</h2>
               </div>
            </div>
         </a>
      </div>

      <div class="grid-item column6">
         <a href="<?php bloginfo('url'); ?>/foodservice/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/01/food-service-grid.jpg" alt="Food Service" />
            <div class="content-grid-color6 color-foodservice">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/01/icon-food-service1.svg" alt="food-service" />
                  <h2 class="title-sector">Food Service</h2>
               </div>
            </div>
         </a>
      </div>

      <div class="grid-item column11">
         <a href="<?php bloginfo('url'); ?>/pharma/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/01/pharma-grid.jpg" alt="Pharma" />
            <div class="content-grid-color7 color-pharma">
               <div class="wrapper-content-title-icon">
                  <img class="icon-setor" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/01/icon-pharma1.svg" alt="pharma" />
                  <h2 class="title-sector">Pharma</h2>
               </div>
            </div>
         </a>
      </div>

   </div>
</section>



<!-- NUESTRAS MARCAS -->
<div class="wrapper--slider--marcas">
   <h2 class="title--landingv2"><span class="title--dark">NUESTRAS <span class="title--verde">MARCAS</span></h2>
   <p class="bajada--sector-industrial">Descubre todas nuestras marcas representadas y sus tecnologías</p>

   <div class="slider---logotipos">
      <div class="slide-track">
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/admix.jpg" alt="" width="250" height="100" alt="admix" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/6/2025/01/anritsu-slider.png" alt="" width="250" height="100" alt="anritsu" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/astech.png" alt="" width="250" height="100" alt="astech" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/bettcher.jpg" alt="" width="250" height="100" alt="bettcher" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/biro.png" alt="" width="250" height="100" alt="biro" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/boss.png" alt="" width="250" height="100" alt="boss" />
         </div>
         <!-- <div class="slide--img">
                <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/claitec.png" alt="" width="250" height="100" alt="claitec" />
            </div> -->
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/colussi-landing.png" alt="" width="250" height="100" alt="colussi-landing" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/detecto2.png" alt="" width="250" height="100" alt="detecto2" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/dick.png" alt="" width="250" height="100" alt="dick" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/04/efa1.png" alt="" width="250" height="100" alt="efa" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/fessmann.png" alt="" width="250" height="100" alt="fessmann" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/gunther-02.jpg" alt="" width="250" height="100" alt="gunther-02" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/01/handtmann-new.png" alt="" width="250" height="100" alt="handtmann" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/04/inotec.png" alt="" width="250" height="100" alt="inotec" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/insort.png" alt="" width="250" height="100" alt="insort" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/10/itec-frontmatec.png" alt="" width="250" height="100" alt="itec" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/intray.png" alt="" width="250" height="100" alt="intray" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/10/kromer.png" alt="" width="250" height="100" alt="carl-stahl" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/laska-prov-v1.png" alt="" width="250" height="100" alt="laska-prov-v1" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/meatmark.png" alt="" width="250 height=" alt="meatmark" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/mensch.png" alt="" width="250" height="100" alt="mensch" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/multiweigh.jpg" alt="" width="250" height="100" alt="multiweigh" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/munch.png" alt="" width="250" height="100" alt="munch" />
         </div>
         <!-- <div class="slide--img">
                <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/niebling.png" alt="" width="250" height="100" alt="niebling" />
            </div> -->
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/04/niroflex-new.png" alt="" width="250" height="100" alt="niroflex" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/peschl.jpg" alt="" width="250" height="100" alt="peschl" />
         </div>

         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/treif-marel1.png" alt="" width="250" height="100" alt="treif" />
         </div>

         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/10/maja-marel.jpg" alt="" width="250" height="100" alt="treif" />
         </div>

         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/ulma-inoxtruck.png" alt="" width="250" height="100" alt="ulma-inoxtruck" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/ulma.png" alt="" width="250" height="100" alt="ulma" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/zico.png" alt="" width="250" height="100" alt="zico" />
         </div>
         <div class="slide--img">
            <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/06/vc999-new-version.png" alt="" width="250" height="100" alt="vc999" />
         </div>
         <!-- <div class="slide--img">
                <img class="imagen" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/ziegra-1.png" alt="" width="250" height="100" alt="ziegra-1" />
            </div> -->
      </div>
   </div>

   <!-- REVISAR -->
   <a href="<?php bloginfo('url'); ?>/proveedores">
      <button class="btn--noticiasv2">VER TODAS NUESTRAS MARCAS</button>
   </a>
</div>



<!-- HISTORIAS DE MAQUITO -->
<div class="wapper-historias-de-maq">
   <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/screen-maq-scaled.jpg">

   <div class="content-txt-maq">
      <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/txt-maquito-scaled.png">
      <a href="<?php bloginfo('url'); ?>/comics-maquito/">
         <button>CONOCE MI HISTORIA Y MÁS</button>
      </a>
   </div>

   <img class="img-nave" src="<?php bloginfo('url') ?>/wp-content/uploads/2025/07/nave.png" alt="">
   <img class="platillo1" src="<?php bloginfo('url') ?>/wp-content/uploads/2025/07/platillo.svg" alt="">
</div>








<!-- SAT - SERVICIO ASISTENCIA TECNICA -->
<div class="titulo-optimiza">
   <h2 class="txt-optimiza">Optimiza al Máximo la
      <span class="txt-pintar"> Productividad de tu Negocio</span>
   </h2>
</div>

<div class="wrapper-nuevo-sat">
   <img class="number-33" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/33.png" alt="sat-33" />
   <img class="img-optimiza" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/optimiza.png" alt="optimiza" />
   <div class="wrapper-txt-new-sat">
      <img class="svg-new-sat" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/new-sat.svg" alt="new-sat" />

      <!-- REVISAR -->
      <a href="<?php bloginfo('url'); ?>/servicio-asistencia-tecnica/">
         <button class="btn-descubre-mas">Descubre Más</button>
      </a>
   </div>
</div>

<!-- <div class="fondo-buzon">
    <div class="wrapper-buzon">
        <section class="content-txt-buzon">
            <div class="block-txt-buzon">
                <h3 class="subtitle-buzon">Tu nuevo proyecto!</h3>
                <p class="parrafo-buzon">En este espacio tomamos tus ideas y las transformamos en soluciones innovadoras a la medida de tu negocio.</p>
            </div>
        </section>


        <section class="content-img-buzon">
            <div class="box-buzon" data-aos="fade-up" data-aos-delay="100">
                <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/cortesia1.jpg" alt="Visita de cortesía" />
                <div class="boton-buzon-cortesia">
                    <h2>¿Quieres solicitar una visita de cortesía?</h2>
                    <p class="txt-solo-clientes">[ Sólo aplicable para clientes nuevos ]</p>
                    <a href="https://taglermaq.cl/cortesia/index.php" target="_blank" rel="noopener noreferrer">
                        <button>Solicitar</button>
                    </a>
                </div>
            </div>

            <div class="box-cortesia" data-aos="fade-up" data-aos-delay="200"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/buzon1.jpg" alt="buzon" />
                <div class="boton-buzon-cortesia">
                    <h2>¿Quieres realizar alguna consulta?</h2>
                    <a href="https://taglermaq.cl/buzon/index.php" target="_blank" rel="noopener noreferrer">
                        <button>Escríbenos</button>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div> -->




<!-- NOTICIAS -->
<section class="wrapper--noticev3">
   <h2 class="title--landing-v2"><span class="title--dark">NOTICIAS</span>
      <span class="title--verde"> & FERIAS</span>
   </h2>
   <p class="bajada--sector-industrial">Infórmate sobre temas relevantes y tecnologías que son protagonistas en la industria de los alimentos</p>

   <div class="wrapper-box-2024-feb">


      <div class="content-box-2024-feb">
         <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/destacada-control.jpg" alt="Imagen Destacada" />
         <div class="block-color-2024" style="background-color: #085d9e">
            <div class="content-txt-notice-2024">
               <h2>24 JUNIO</h2>
               <h3>GÜNTHER</h3>
               <p>Control microbiológico en el rubro cárnico: El valor sanitario de la inyección industrial</p>
               <hr>
               <a href="<?php bloginfo('url') ?>/contenido_noticias/control-microbiologico-en-el-rubro-carnico/">
                  <button>Leer Noticia</button>
               </a>
            </div>
         </div>
      </div>

      <div class="content-box-2024-feb">
         <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/07/destacada-5claves1.jpg" alt="Imagen Destacada">
         <div class="block-color-2024" style="background-color: #289b7d">
            <div class="content-txt-notice-2024">
               <h2>03 JULIO</h2>
               <h3>ANRITSU</h3>
               <p>5 consideraciones al migrar de detección de metales a inspección por Rayos X</p>
               <hr>
               <a href="<?php bloginfo('url') ?>/contenido_noticias/5-consideraciones-al-migrar-de-deteccion-de-metales/">
                  <button>Leer Noticia</button>
               </a>
            </div>
         </div>
      </div>

      <div class="content-box-2024-feb">
         <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/06/desatacada-irinox1.jpg" alt="Imagen Destacada" />
         <div class="block-color-2024" style="background-color: #182742">
            <div class="content-txt-notice-2024">
               <h2>26 JUNIO</h2>
               <h3>IRINOX</h3>
               <p>Revoluciona la conservación de frutas con tecnología de enfriamiento controlado</p>
               <hr>
               <a href="<?php bloginfo('url') ?>/contenido_noticias/irinox-revoluciona-la-conservacion-de-frutas-con-tecnologia-de-enfriamiento-controlado/">
                  <button>Leer Noticia</button>
               </a>
            </div>
         </div>
      </div>



      <!-- <div class="content-box-2024-feb">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/flex-destacada.jpg">
            <div class="block-color-2024" style="background-color: #ff7d1b">
                <div class="content-txt-notice-2024">
                    <h2>13 JUNIO</h2>
                    <h3>WIDTH-FLEX</h3>
                    <p>Innovación Tecnológia</p>
                    <hr>
                    <a href="https://taglermaq.cl/blog/contenido_noticias/width-flex-innovacion-tecnologica/">
                        <button>Leer Noticia</button>
                    </a>
                </div>
            </div>
        </div> -->
   </div>

   <div class="container-btn--noticias">
      <a href="<?php bloginfo('url'); ?>/noticias" rel="noopener noreferrer">
         <button class="btn--noticiasv2">VER TODAS LAS NOTICIAS</button>
      </a>
   </div>
</section>















<!-- INICIO CATALOGO-->
<!-- <div class="wrapper-catalogo-iffa">
    <div class="content-img-catalogo">
        <img class="img-catalogo img-catalogo-desktop" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/catalogo-iffa-010.png" alt="catálogo iffa desktop" />
        <img class="img-catalogo img-catalogo-mobile" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/catalogo-iffa-03.png" alt="catálogo iffa mobile" />
    </div>
    <div class="content-img-iffa"></div>
    <div class="contenedor-textos-iffa">
        <div class="content-texto-iffa">
            <h2>REVISA NUESTRO<span class="tono">  CATÁLOGODIGITAL</span></h2>
            <h3 class="subtitle-text-iffa">Descubre todas las soluciones tecnológicas industriales que tenemos para ti.</h3>
            <a href="<?php bloginfo('url'); ?>/catalogo/index.html" target="_blank" rel="noopener noreferrer">
                <button class="btn-catalogo">VER CATÁLOGO</button>
            </a>
        </div>
    </div>
</div> -->



<!-- MAQUINAS DESTACADAS -->
<div class="wrapper--maquinasv2">
   <h2 class="title--landing-v2"><span class="title--dark">MÁQUINAS</span>
      <span class="title--verde">DESTACADAS</span>
   </h2>
   <p class="bajada--sector-industrial">Tecnologías e innovaciones para optimizar procesos productivos</p>

   <div class="wrapper--green--dark">
      <div class="wrapper--green--nuevo-03">
         <img class="img--position1" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/embutidora-vf810-1.png" alt="Embutidora VF810" />
         <h3 class="title--soluciones">EMBUTIDORA AL VACÍO</h3>
         <p class="parrafo--soluciones" style="color: #ff7400">⎯ HANDTMANN ⎯</p>
         <a href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=embutidoras-al-vacio">
            <button class="btn--soluciones3">VER PRODUCTO</button>
         </a>
      </div>

      <div class="wrapper--orange-03">
         <img class="img--position2" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/detector-metales.png" alt="Detector de Metales" />
         <h3 class="title--dispensador">DETECTOR DE METALES</h3>
         <p class="parrafo--soluciones" style="color: #00acb3">⎯ ANRITSU ⎯</p>
         <a href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=detector-de-metales">
            <button class="btn--cortadora3">VER PRODUCTO</button>
         </a>
      </div>

      <div class="wrapper--green--red-03">
         <img class="img--position3" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/11/desolladora-desveladora-esb-4434.png" alt="Centrifugadora" />
         <h3 class="title--dispensador">DESOLLADORA ESB-4434</h3>
         <p class="parrafo--dispensador" style="color: #2a4fbd">⎯ MAJA ⎯</p>
         <a href="<?php bloginfo('url'); ?>/desolladora-desveladora-maja-esb-4434/">
            <button class="btn--dispensador3">VER PRODUCTO</button>
         </a>
      </div>

   </div>
</div>



<!-- MAQUINAS DESTACADAS -->
<section class="background--machine--gpa">
   <div class="wrapper--machine--txt--two">
      <div class="content--machine--vf848">
         <img class="svg--handtmann" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/12/maja-marel.svg" alt="Maja" />
         <h2 class="title--machine-vf848">DESMEM -<br>BRANADORA<span style="font-family: 'Rajdhani', sans-serif; color: #d50b2f;">
               EVM-5006</span></h2>
         <p class="txt--machine--vf848">La gama MAJA EVM está diseñada para el desvelado con membrana de abertura de llenado superior de cualquier tipo de corte de carne fresca. Está disponible en dos anchos de corte para ofrecer la solución ideal de desvelado tanto para los procesadores pequeños y medianos como para los industriales.</p>

         <div class="text--handtmann--opacity">MAJA</div>
         <a href="<?php bloginfo('url'); ?>/desmembranadora-desveladora-evm-5006/">
            <button class="btn--vf848v2" style="background-color: #e52329">Ver Tecnología</button>
         </a>
      </div>
   </div>
   <div class="wrapper--machine--two--ulma">
      <img class="img-machine--two-gpa" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/12/maja_evm_5006.png" alt="Maja" />
      <img class="vector-machine-two-gpa" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/12/maja-evm-5006-2_animated.svg" alt="Maja evm" />
   </div>
</section>


<section class="background--machine">
   <div class="wrapper--machine-one-campana">
      <img class="img--machine-one-campana" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/doble-camp.png" alt="Máquina doble campana" />
      <img class="vector-machine-one-doble-campana" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/doble-campana01_animated.svg" alt="vector doble campana" />
   </div>
   <div class="wrapper--machine-txt">
      <div class="content--machine--txt">
         <img class="logotipo--vector--divider2" style="width: 100px;" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/06/vc999-new.svg" alt="VC999" />
         <h2 class="title--machine--dividerv3">ENVASADORA
            <span class="color--divider2" style="color: #FF2100">DOBLE CAMPANA</span>
         </h2>
         <p class="txt--machine--divider">La VC999 K12 es una máquina de alta velocidad gracias al manejo paralelo de dos cámaras. Además, el cierre automático de las cámaras aumenta el rendimiento de envasado. K12 es ideal para volúmenes de producción medios y grandes.</p>
         <div class="text--divider--opacity">ENVASADORA</div>
         <a href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=envasadoras-de-campana">
            <button class="btn--divider2" style="background-color: #FF2100; color: white">Ver Tecnología</button>
         </a>
      </div>
   </div>
</section>


<section class="background--machine--two" style="background: radial-gradient(circle, #3f404c, #21323c)">
   <div class="wrapper--machine--txt--two">
      <div class="content--machine--vf848">
         <img class="svg--ulma--tsa875" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/ulma-packaging-white.svg" alt="Ulma TSA 875" />
         <h2 class="title--machine-vf848" style="color: white;">TERMO -<br>SELLADORA<span style="font-family: 'Rajdhani', sans-serif; color: #e20420;"> TSA-875</span></h2>
         <p class="txt--machine--vf848" style="color: white;">La envasadora TSA 850 es una termoselladora automática para todo tipo de bandejas de formas regulares. Puede realizar hasta 22 ciclos/min en corte sellado y 19 ciclos/min en MAP. Además se puede integrar en líneas automáticas y en producciones medias-altas.</p>
         <div class="text--handtmann--opacity--opacidad">TOP-SEAL</div>
         <a href="<?php bloginfo('url'); ?>/envasadoras/?_filter_envasadoras=envasadora-termoselladora-top-seal">
            <button class="btn--vf848v2" style="background-color: #e20420;">Ver Tecnología</button>
         </a>
      </div>
   </div>
   <div class="wrapper--machine--two--ulma">
      <img class="img-machine--two-ulma" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/tsa875-ht.png" alt="Ulma TSA 875" />
      <img class="vector-machine-two-ulma" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/tsa875-ht1_animated02.svg" alt="vector ulma tsa" />
   </div>
</section>



<!-- LINKEDIN -->
<div class="fondo-linkedin-v2">
   <div class="wrapper-linkedin-banner">
      <h2 class="title--landingv2" style="margin: 0"><span class="title--dark">LINKEDIN</h2>
      <p class="bajada--sector-industrial">Encuentra las mejores soluciones en tecnología para la industria de alimentos.</p>
      <div class="content-img-linkedin">
         <a href="https://www.linkedin.com/company/taglermaq-spa/mycompany/">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/08/linkedin-agosto.png" alt="Linkedin Taglermaq" />
         </a>
      </div>
   </div>
</div>




<!-- TECNOLOGIAS ULMA  -->
<section class="wrapper--img--content" style="margin: 0">
   <div class="wrapper--cuchillos">

      <video class="video-modula" muted="" loop="loop" autoplay="autoplay" controlslist="nodownload" playsinline="playsinline">
         <source src="https://taglermaq.cl/wp-content/themes/taglermaq/videos/modula.mp4" type="video/mp4">
      </video>

      <div class="logos-cuchillos">
         <img class="img--dick" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/modula1.png" alt="Tecnologías para tu proyecto" />
      </div>
      <h2 class="title--cuchillos-v2">SOLUCIONES DE ALMACENAJE VERTICAL QUE OPTIMIZAN TAREAS LOGÍSTICAS </h2>
      <a href="https://taglermaq.cl/logisticmaq/modula/" target="_blank" rel="noopener noreferrer">
         <button class="btn--cuchillos">CONOCE MÁS</button>
      </a>
   </div>
</section>











<?php get_footer(); ?>