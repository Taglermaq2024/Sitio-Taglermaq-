<?php
/*
  Template Name: Quienes Somos
  Template Post Type: post, page
*/
?>


<?php get_header(); ?>



<style>
   .fondo__organigram .box__organigram2 {
      width: 50%;
      height: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      background-color: #eee;
      cursor: move;
      position: relative;
      background: #313542;
      gap: 1rem;
   }

   .box__organigram2 ul {
      width: 80%;
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
      align-items: center;
      height: 60%;
      margin: 0;
   }

   .fondo__organigram .box__organigram2 ul li {
      width: 30.3%;
      height: 25%;
      float: left;
      list-style: none;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      position: relative;

   }

   .fondo__organigram .box__organigram2 ul li .card-a {
      position: absolute;
      width: 100%;
      height: 200px;
      perspective: 500px;
      border-radius: 5px;
   }

   .fondo__organigram .box__organigram2 ul li .card-a .content {
      position: absolute;
      width: 100%;
      height: 100%;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      transition: transform 1s;
      transform-style: preserve-3d;
      background: none;
   }

   .fondo__organigram .box__organigram2 ul li .card-a:hover .content {
      transform: rotateY(180deg);
      transition: transform 0.5s;
   }

   .fondo__organigram .box__organigram2 ul li .card-a .front,
   .fondo__organigram .box__organigram2 ul li .card-a .back {
      position: absolute;
      height: 100%;
      width: 100%;
      background: white;
      line-height: 300px;
      color: #03446A;
      text-align: center;
      font-size: 2.3em;
      border-radius: 5px;
      backface-visibility: hidden;
      line-height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      text-transform: uppercase;
      font-weight: bold;
   }

   .fondo__organigram .box__organigram2 ul li .card-a .front {
      font-size: 0;
      background-size: 100%;
      background-repeat: no-repeat;
   }

   .fondo__organigram .box__organigram2 ul li .card-1 .front,
   .fondo__organigram .box__organigram2 ul li .card-2 .front,
   .fondo__organigram .box__organigram2 ul li .card-3 .front {
      background-position: left bottom;
   }

   .fondo__organigram .box__organigram2 ul li .card-a .back {
      background: #525151;
      color: white;
      transform: rotateY(180deg);
   }

   .fondo__organigram .box__deptos2 {
      width: 50%;
      height: 100%;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      background-image: url(https://www.taglermaq.cl/wp-content/uploads/2021/08/future-overlay.jpg);
      background-size: cover;
      background-position: center;
      position: relative
   }

   .fondo__organigram .box__deptos2 .img-hexagon3 {
      width: 100%;
      position: absolute;
      top: 0;
      opacity: .2;
   }

   @media(max-width: 1198px) {
      .fondo__organigram {
         width: 100%;
         height: 500px
      }
   }

   @media(max-width: 991px) {
      .fondo__organigram {
         height: 100%;
      }

      .fondo__organigram .box__deptos2,
      .fondo__organigram .box__organigram2 {
         width: 100%;
      }

      .fondo__organigram .box__organigram2 {
         display: none;
      }
   }


   @media(max-width: 600px) {
      .fondo__organigram .box__deptos2 {
         -webkit-box-align: start;
         -ms-flex-align: start;
         align-items: flex-start;
         padding: 1em 0
      }
   }

   .fondo__organigram .box__deptos2:before {
      content: "";
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: rgba(15, 19, 31, .8117647059);
      -webkit-backdrop-filter: blur(50px);
      backdrop-filter: blur(50px)
   }

   .fondo__organigram .box__deptos2 .wrapper__deptos {
      margin: 2em 6em;
      position: relative;
      -webkit-transition: all ease .5s;
      transition: all ease .5s
   }

   .fondo__organigram .box__deptos2 .wrapper__deptos .title__deptos {
      font-family: rajdhani, sans-serif;
      font-weight: 700;
      margin: 0;
      font-size: 5em;
      line-height: .85;
      color: #fff
   }

   @media(max-width: 600px) {
      .fondo__organigram .box__deptos .wrapper__deptos .title__deptos {
         font-size: 3em
      }
   }

   .fondo__organigram .box__deptos .wrapper__deptos .title__deptos .color-depto {
      color: #9acd32
   }

   .fondo__organigram .box__deptos2 .wrapper__deptos .parrafo__deptos {
      font-family: rajdhani, sans-serif;
      font-size: 1.2em;
      width: 400px;
      color: #fff
   }

   @media(max-width: 600px) {
      .fondo__organigram .box__deptos2 .wrapper__deptos .parrafo__deptos {
         width: 90%;
         font-size: 1em
      }
   }

   .fondo__organigram .box__deptos .ocultar-textos {
      opacity: 0;
      -webkit-transform: translateY(100px);
      transform: translateY(100px)
   }

   .fondo__organigram .box__deptos .mostrar-info {
      opacity: 1;
      -webkit-transform: translateY(0);
      transform: translateY(0)
   }

   @media(max-width: 600px) {
      .fondo__organigram .box__deptos2 .mostrar-info {
         width: 90%
      }
   }

   .fondo__organigram .box__deptos2 .wrapper__cards {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin-top: 60px;
      position: absolute
   }

   @media(max-width: 1198px) {
      .fondo__organigram .box__deptos2 .wrapper__cards {
         width: 100%
      }
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .desaparecer {
      width: 600px;
      opacity: 0;
      -webkit-transform: translateY(100px);
      transform: translateY(100px);
      -webkit-transition: all ease .5s;
      transition: all ease .5s
   }

   @media(max-width: 1198px) {
      .fondo__organigram .box__deptos2 .wrapper__cards .desaparecer {
         width: 100%
      }
   }

   .fondo__organigram .box__deptos .wrapper__cards .mostrar {
      opacity: 1;
      -webkit-transform: translateY(0);
      transform: translateY(0)
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos {
      width: 100%
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--oscuro {
      width: 100%;
      padding: .5em 0;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      border-radius: 10px;
      background-color: #131419;
      position: relative
   }

   @media(max-width: 600px) {
      .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--oscuro {
         padding: 0
      }
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--oscuro .img-circle-persons {
      width: 90px;
      height: 90px;
      -webkit-box-shadow: 0 0 0 5px #8cc63f;
      box-shadow: 0 0 0 5px #8cc63f;
      border-radius: 50%;
      position: absolute;
      top: -45px
   }

   @media(max-width: 600px) {
      .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--oscuro .img-circle-persons {
         width: 70px;
         height: 70px
      }
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--oscuro .title--cargos {
      font-family: rajdhani, sans-serif;
      font-size: .9em;
      text-transform: uppercase;
      font-weight: 600;
      margin: 0;
      color: #8cc63f
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--oscuro .title--personas {
      font-family: rajdhani, sans-serif;
      font-size: 1.3em;
      color: #fff;
      margin: 2.8em 0 0
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--oscuro .title1--personas {
      font-family: rajdhani, sans-serif;
      width: 450px;
      margin: 1.5em 0;
      font-size: 1.2em;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      text-align: center;
      font-weight: 600;
      color: #bfbfbf;
      position: relative
   }

   @media(max-width: 1198px) {
      .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--oscuro .title1--personas {
         width: 80%
      }
   }

   @media(max-width: 600px) {
      .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--oscuro .title1--personas {
         width: 90%;
         font-size: .9em
      }
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--oscuro .title1--personas:before {
      content: "";
      width: 30px;
      height: 2px;
      position: absolute;
      top: -12px;
      background: #9df031
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .title--areas {
      font-family: rajdhani, sans-serif;
      font-size: 1.7em;
      margin: 1.3em 0 0;
      text-align: center;
      color: #fff
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .sub--title--areas {
      font-family: rajdhani, sans-serif;
      width: 500px;
      font-size: 1.2em;
      line-height: 1.3;
      margin: .5em 0 1.5em;
      text-align: center;
      font-weight: 100;
      color: #bfbfbf
   }

   @media(max-width: 1198px) {
      .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .sub--title--areas {
         width: 80%
      }
   }

   @media(max-width: 600px) {
      .fondo__organigram .box__deptos .wrapper__cards .content--elementos .block--claro .sub--title--areas {
         width: 90%;
         font-size: .9em
      }
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .wrapper--areas {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .wrapper--areas .box--areas {
      margin: .7em;
      text-align: center
   }

   @media(max-width: 600px) {
      .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .wrapper--areas .box--areas {
         margin: .2em
      }
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .wrapper--areas .box--areas .icon--areas {
      width: 60px;
      border-radius: 50%
   }

   @media(max-width: 600px) {
      .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .wrapper--areas .box--areas .icon--areas {
         width: 40px
      }
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .wrapper--areas .box--areas .icon--areas2 {
      width: 70px;
      border-radius: 50%
   }

   @media(max-width: 600px) {
      .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .wrapper--areas .box--areas .icon--areas2 {
         width: 40px
      }
   }

   .fondo__organigram .box__deptos2 .wrapper__cards .content--elementos .block--claro .wrapper--areas .box--areas .tit-industrias {
      font-family: rajdhani, sans-serif;
      font-size: .8em;
      margin: .3em 0;
      font-weight: 400;
      color: #fff
   }

   .fondo__organigram .box__organigram2 ul li .card-1 .front {
      background-image: url(http://www.taglermaq.cl/wp-content/uploads/2024/01/qs-01.jpg);
   }

   .fondo__organigram .box__organigram2 ul li .card-2 .front {
      background-image: url(http://www.taglermaq.cl/wp-content/uploads/2024/01/qs-02.jpg);
   }

   .fondo__organigram .box__organigram2 ul li .card-3 .front {
      background-image: url(http://www.taglermaq.cl/wp-content/uploads/2024/01/qs-03.jpg);
   }

   .fondo__organigram .box__organigram2 ul li .card-4 .front {
      background-image: url(http://www.taglermaq.cl/wp-content/uploads/2024/01/qs-04.jpg);
   }

   .fondo__organigram .box__organigram2 ul li .card-5 .front {
      background-image: url(http://www.taglermaq.cl/wp-content/uploads/2024/01/qs-05.jpg);
   }

   .fondo__organigram .box__organigram2 ul li .card-6 .front {
      background-image: url(http://www.taglermaq.cl/wp-content/uploads/2024/01/qs-06.jpg);
   }


   .wrapper__cards .title__deptos {
      font-family: rajdhani, sans-serif;
      font-weight: 700;
      margin: 0;
      font-size: 5em;
      line-height: .85;
      color: #fff;
      margin-bottom: 10px;
   }

   .wrapper__cards .title__deptos .color-depto {
      color: #9acd32;
   }

   .wrapper__cards .parrafo__deptos {
      font-family: rajdhani, sans-serif;
      font-size: 1.2em;
      width: 400px;
      color: #fff;
   }
</style>



<section class="wrapper__somos">
   <div class="container__title__somos" data-aos="fade-right" data-aos-delay="100">
      <h1 class="title__somos">QUIÉNES SOMOS</h1>
   </div>
</section>
<div class="div wrapper__torre" data-aos="fade-in">

   <img class="img__torre" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/04/torre1.jpg" data-aos="fade-up" data-aos-delay="100" />
   <div class="caja__torre1" data-aos="fade-right" data-aos-delay="600"></div>
   <div class="caja__torre2" data-aos="fade-up" data-aos-delay="1500"></div>
   <div class="caja__torre3" data-aos="fade-down" data-aos-delay="800"></div>
   <div class="caja__torre4" data-aos="fade-left" data-aos-delay="900"></div>
   <div class="caja__torre__azul" data-aos="fade-up" data-aos-delay="1000"></div>
   <div class="torre__line" data-aos="fade-up" data-aos-delay="1300"></div>
</div>
<div class="wrapper__bluedark">
   <div class="content__bluedark" data-aos="fade-right" data-aos-delay="500">
      <h2 class="title___taglermaq">TAGLER<span class="color__building">MAQ</span></h2>
      <h3 class="txt__building2">Con más de 30 años de trayectoria, sigue siendo manejada por la familia Linzmayer, Schwartz, con el claro objetivo de continuar siendo una empresa familiar. Con este concepto en mente, se han tomado las decisiones que nos llevaron donde estamos y nos encaminarán hacia el futuro.</h3>
      <h3 class="txt__building2">Todos nuestros proveedores son un pilar fundamental para nuestra empresa, ya que proveen equipos y maquinarias de gran importancia para la industria.</h3>
      <h3 class="txt__building2">En Taglermaq apuntamos a perfeccionar una trilogía eficiente entre Proveedores, Clientes y nuestra empresa.</h3>
   </div>
</div>
<section class="wrapper-futuro"><!-- <svg class="onda-furturo" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 320" style="enable-background:new 0 0 1440 320;" xml:space="preserve">
<path class="st0" d="M0,246h30c30,0,90,0,150-16s120-48,180-58.7C420,161,480,171,540,198s120,69,180,58.7C780,246,840,182,900,182 s120,64,180,74.7c60,10.3,120-31.7,180-32c60,0.3,120,42.3,150,64l30,21.3v10h-30c-30,0-90,0-150,0s-120,0-180,0s-120,0-180,0 s-120,0-180,0s-120,0-180,0s-120,0-180,0s-120,0-180,0s-120,0-150,0H0V246z"/>
    </svg> -->
   <!--<img class="img-futuro" src="https://www.taglermaq.cl/wp-content/uploads/2021/08/tecnicos1.jpg" />-->
   <img class="img-futuro" src="<?php bloginfo('template_url'); ?>/img-temporal/sat01.jpg" />
</section>
<div class="wrapper--title--futuro" data-aos="fade-up">
   <h2 class="title__futuro">EL FUTURO DEPENDE DE LO QUE<span class="color_hacemos"> HACEMOS HOY</span></h2>
</div>
<section class="mision-vision"></section>
<section class="wrapper-mision2">
   <div class="content-mision2">

      <img class="img-mision2" src="<?php bloginfo('template_url'); ?>/img-temporal/mision.jpg" />
      <div class="box-mision2">
         <div class="contenedor2">

            <img class="svg__mision2" src="<?php bloginfo('template_url'); ?>/img-temporal/machine.svg" />
            <h2 class="title__small2">LO QUÉ HACEMOS</h2>
            <h3 class="title__mision2">MISIÓN</h3>
            <p class="parrafo__mision2">Somos una empresa que hace suyos los desafíos de estar presente aportando en las necesidades de nuestros clientes, con el claro objetivo de perfeccionar una trilogía eficiente entre proveedores, Clientes y nuestros colaboradores.</p>
            <p class="parrafo__mision2">Para cumplir con esta tarea contamos con proveedores de alto nivel mundial, fundamentales para nuestra empresa, proveyendo equipos y maquinarias de gran importancia para la industria en Chile y que mejoran la vida de todas las personas.</p>

         </div>
      </div>
   </div>
</section>
<section class="wrapper-mision3"><img class="image-hexagon1" src="https://www.taglermaq.cl/wp-content/uploads/2021/08/image-hexagon1.svg" />
   <div class="content-mision3">

      <!--<img class="img-mision3" src="https://www.taglermaq.cl/wp-content/uploads/2021/07/vision1.jpg" />-->
      <img class="img-mision3" src="<?php bloginfo('template_url'); ?>/img-temporal/vision-2023-06.jpg" />
      <div class="box-mision3">
         <div class="contenedor3">

            <img class="svg__mision3" src="<?php bloginfo('template_url'); ?>/img-temporal/liderazgo.svg" />
            <h2 class="title__small3">HACIA DONDE VAMOS</h2>
            <h3 class="title__mision3">VISIÓN</h3>
            <p class="parrafo__mision3">Queremos liderar en el mercado de equipamiento tecnológico para la industria, distinguiéndonos por la excelencia de nuestros productos y servicios, creciendo e innovando en armonía con la comunidad y el medio ambiente, contribuyendo de esta forma al logro de la misión de nuestros clientes.</p>

         </div>
      </div>
   </div>
</section>
<section class="nuestros__valores">
   <h2 class="title__nuestros__valores">NUESTROS VALORES</h2>
   <div class="wrapper__box__valores">
      <div class="box__valores" data-aos="fade-up" data-aos-delay="100">

         <img class="img__valores" src="<?php bloginfo('template_url'); ?>/img-temporal/integridad.jpg" alt="" />
         <div class="content__textos">
            <h3 class="title__box__valores">INTEGRIDAD</h3>
            <h4 class="parrafo__valores"><span class="texto--bold">Nos interesa inculcar en todo nuestro equipo la integridad como valor fundamental, manteniéndonos fieles a nuestros principios.</span></h4>
            <p style="font-size: .9em; font-family: rajdhani,sans-serif; margin: 0 1em; color: #8e8e8e;">Queremos hacer siempre lo correcto buscando construir relaciones de confianza, duraderas y en beneficio mutuo entre todas las personas que componemos el grupo, con nuestros clientes, socios de negocios y con la comunidad.</p>

         </div>
      </div>
      <div class="box__valores" data-aos="fade-up" data-aos-delay="300">

         <img class="img__valores" src="<?php bloginfo('template_url'); ?>/img-temporal/trabajo-en-equipo.jpg" alt="" />
         <div class="content__textos">
            <h3 class="title__box__valores">TRABAJO EN EQUIPO</h3>
            <h4 class="parrafo__valores"><span class="texto--bold">Respetamos a las personas y valoramos el aporte de cada miembro de nuestro equipo.</span></h4>
            <p style="font-size: .9em; font-family: rajdhani,sans-serif; margin: 0 1em; color: #8e8e8e;">Sabemos que al trabajar unidos avanzamos con mayor eficiencia y llegamos más alto, para ello nos exigimos, cumplimos y llevamos a cabo cada acción con ánimo, diligencia y rapidez.</p>

         </div>
      </div>
      <div class="box__valores" data-aos="fade-up" data-aos-delay="500">

         <img class="img__valores" src="<?php bloginfo('template_url'); ?>/img-temporal/excelencia2.jpg" alt="" />
         <div class="content__textos">
            <h3 class="title__box__valores">EXCELENCIA</h3>
            <h4 class="parrafo__valores"><span class="texto--bold">Nos mueve el siempre mejorar, siendo nuestro sello distintivo la rigurosidad y entusiasmo por un trabajo correctamente realizado.</span></h4>
            <p style="font-size: .9em; font-family: rajdhani,sans-serif; margin: 0 1em; color: #8e8e8e;">Somos líderes en la industria alimentaria, porque desafiamos nuestras capacidades, para ello es necesario ser exigentes con nuestras metas, y eficientes e innovadores en la forma de conseguirlas.</p>

         </div>
      </div>
      <div class="box__valores" data-aos="fade-up" data-aos-delay="700">

         <img class="img__valores" src="<?php bloginfo('template_url'); ?>/img-temporal/compromiso-clientes.jpg" alt="Compromiso con nuestros clientes" />
         <div class="content__textos">
            <h3 class="title__box__valores">COMPROMISO CON NUESTROS CLIENTES</h3>
            <h4 class="parrafo__valores"><span class="texto--bold">Nuestros clientes son la razón fundamental de nuestras actividades, entendemos sus necesidades, superamos sus expectativas y conseguimos que tengan éxito.</span></h4>
            <p style="font-size: .9em; font-family: rajdhani,sans-serif; margin: 0 1em; color: #8e8e8e;">Por ello brindarles una atención de calidad es esencial para seguir contando con su preferencia de manera sostenida.</p>

         </div>
      </div>
      <div class="box__valores" data-aos="fade-up" data-aos-delay="900">
         <!--<img class="img__valores" src="https://www.taglermaq.cl/wp-content/uploads/2021/07/innovacion4.jpg" alt="" />-->
         <img class="img__valores" src="<?php bloginfo('template_url'); ?>/img-temporal/innovacion-2023.jpg" alt="" />
         <div class="content__textos">
            <h3 class="title__box__valores">INNOVACIÓN</h3>
            <h4 class="parrafo__valores"><span class="texto--bold">Nos mueve la búsqueda permanente de nuevas soluciones tecnológicas aplicadas para los mercados en donde trabajamos.</span></h4>
            <p style="font-family: rajdhani,sans-serif; margin: 0 1em; color: #8e8e8e;">Dedicamos gran parte de nuestro quehacer a conocer, estudiar y evaluar las opciones presentes alrededor del mundo, para ofrecer las mejores opciones a nuestros clientes.</p>

         </div>
      </div>
   </div>
</section>


<section class="manuales__conducta"><img class="image-hexagon2" src="<?php bloginfo('template_url'); ?>/img-temporal/line-hexagon.svg" />
   <h2 class="title__manuales__conducta">MANUALES DE CONDUCTA</h2>



   <div class="wrapper__manuales__conducta">
      <div class="content__img__organic1"><img class="img__organic1" src="<?php bloginfo('template_url'); ?>/img-temporal/cod_etica.png" />
         <img class="vector_organic1" src="<?php bloginfo('template_url'); ?>/img-temporal/vector_organic1.svg" />
         <img class="trazo_organic1" src="<?php bloginfo('template_url'); ?>/img-temporal/trazo_vector_organic1.svg" />
      </div>
      <div class="content__txt__manuales">
         <div class="content__title__manuales">
            <h2 class="title__manual">DOCUMENTO</h2>
            <h3 class="title__codigo">CÓDIGO DE ÉTICA</h3>
            <p class="parrafo__manuales">Para reafirmar los principios de nuestra cultura corporativa, este Manual de Conducta devela nuestro compromiso por mantener los más altos niveles éticos en el desempeño del equipo.</p>
            <p class="parrafo__manuales">Confluyen principios morales, las leyes de nuestro país, la normativa aplicable a nuestra Compañía, y se difunde con la certeza de que todos quienes colaboramos en ella, hemos adquirido una convicción que nos permite comprometernos con una conducta ética ejemplar, convirtiéndose por ello en el documento más importante que conduce nuestro actuar.</p>
            <a class="no-preload" href="https://www.taglermaq.cl/wp-content/themes/taglermaq/img-temporal/manual-codigo-etica.pdf" target=”_blank”>
               <button class="btn_manuales">VER DOCUMENTO</button>
            </a>
         </div>
      </div>
   </div>


   <div class="wrapper__manuales__conducta">
      <div class="content__txt__manuales">
         <div class="content__title__manuales">
            <h2 class="title__manual">DOCUMENTO</h2>
            <h3 class="title__codigo">MANUAL DE PREVENCIÓN DE DELITOS</h3>
            <p class="parrafo__manuales">Asimismo, y con el compromiso adquirido de velar por la integridad y prevenir el uso de la estructura institucional de Taglermaq para la comisión de delitos y en base a lo dispuesto en la Ley N°20.393 de 2009 y sus modificaciones, hemos adoptado un Modelo de Prevención de Delitos, cuyo manual incluye además, conductas que si bien pueden no constituir delitos, son calificadas como intolerables e incompatibles con la filosofía de nuestra empresa.</p>

            <hr style="margin: 1em 0; border: 1px solid #f0f0f0;">

            <h2 class="reglamento-interno">MANUAL DE PREVENCIÓN DE DELITOS:</h2>
            <a class="no-preload" href="https://www.taglermaq.cl/wp-content/themes/taglermaq/img-temporal/manual-prevencion.pdf" target=”_blank”>
               <button class="btn_manuales">VER DOCUMENTO</button>
            </a>

            <a class="no-preload" href="https://forms.gle/CVv8XBPxCQHQf1QM9" target=”_blank”>
               <button class="denuncia">FORMULARIO DE DENUNCIA</button>
            </a>

            <hr style="margin: 1em 0; border: 1px solid #f0f0f0;">

            <h2 class="reglamento-interno">ANEXO CONTRATO PROVEEDORES:</h2>
            <a class="no-preload" href="https://www.taglermaq.cl/wp-content/themes/taglermaq/img-temporal/anexo-contrato-proveedores.pdf" target=”_blank”>
               <button class="btn_manuales">VER DOCUMENTO</button>
            </a>




         </div>
      </div>
      <div class="content__img__organic1"><img class="fondo2" src="https://www.taglermaq.cl/wp-content/themes/taglermaq/img-temporal/delito2.png" alt="" />
      </div>
   </div>





   <!-- <div class="wrapper__manuales__conducta">
<div class="content__img__organic1"><img class="img__organic1" src="<?php bloginfo('template_url'); ?>/img-temporal/reglamento-interno.png" />
<img class="vector_organic1" src="<?php bloginfo('template_url'); ?>/img-temporal/vector_organic1.svg" />
<img class="trazo_organic1" src="<?php bloginfo('template_url'); ?>/img-temporal/trazo_vector_organic1.svg" /></div>
<div class="content__txt__manuales">
<div class="content__title__manuales">
<h2 class="title__manual">REGLAMENTO INTERNO 2024</h2>
<h3 class="title__codigo">REGLAMENTO INTERNO</h3>
<p class="parrafo__manuales">Reglamento Interno de Orden, Higiene y Seguridad de Taglermaq SpA, un documento esencial para garantizar el bienestar y la seguridad de todos nuestros colaboradores. Este reglamento establece las normas que rigen nuestra convivencia laboral, abordando aspectos clave como el ingreso, las obligaciones, los derechos laborales y las medidas de seguridad. Su cumplimiento es obligatorio para todos los empleados, asegurando así un entorno de trabajo seguro y respetuoso. Para más detalles, recomiendo su lectura completa.</p>

<h2 class="reglamento-interno">REGLAMENTO INTERNO DE ORDEN, HIGIENE Y SEGURIDAD:</h2>
<a href="https://www.taglermaq.cl/wp-content/themes/taglermaq/img-temporal/reglamento-interno.pdf">
    <button class="btn_manuales">VER DOCUMENTO</button>
</a>

<h2 class="reglamento-interno">PROTOCOLO DE PREVENCIÓN DEL ACOSO SEXUAL, ACOSO LABORAL Y VIOLENCIA EN EL TRABAJO:</h2>
<a href="https://www.taglermaq.cl/wp-content/themes/taglermaq/img-temporal/anexo-reglamento.pdf">
    <button class="btn_manuales">VER DOCUMENTO</button>
</a>


</div>
</div>
</div> -->




</section>



<div class="caja__testimonios">
   <h2 class="title_principal_testimonios">PERSONAS</h2>
</div>
<section id="image-slider" class="splide">
   <div class="splide__track">
      <ul class="splide__list alto--slider">

         <!-- <li class="splide__slide">
    <div class="overlay--box">
        <img class="persons-img" style="height: fit-content; object-position: inherit;" src="<?php bloginfo('template_url'); ?>/img-temporal/cristian-diaz.png" alt="Cristian Díaz" /><img class="hexagono1" src="https://www.taglermaq.cl/wp-content/themes/taglermaq/img-temporal/mi-hexagono-2.svg" alt="Cristian Díaz" />
        <div class="wrapper--testimonios">
            <h2 class="title--testimonio">Cristian Díaz</h2>
            <h3 class="title--cargos">Gerente de Desarrollo de Negocios</h3>
            <h4 class="subtitle--testimonio">“En Taglermaq hay una genuina preocupación por las personas, un gran espíritu de equipo y la innovación está en nuestro ADN”.</h4>
        </div>
    </div>
</li> -->

         <li class="splide__slide">
            <div class="overlay--box">
               <img class="persons-img" style="height: fit-content; object-position: inherit;" src="<?php bloginfo('template_url'); ?>/img-temporal/daniel-fernandez.png" alt="Daniel Fernández" />
               <img class="hexagono1" src="<?php bloginfo('template_url'); ?>/img-temporal/mi-hexagono-2.svg" alt="" />
               <div class="wrapper--testimonios">
                  <h2 class="title--testimonio">Daniel Fernández</h2>
                  <h3 class="title--cargos">Coordinador de Marketing</h3>
                  <h4 class="subtitle--testimonio">"Más que un lugar de trabajo, Taglermaq ha sido una gran oportunidad para desarrollar nuevas capacidades que me han hecho crecer como profesional."</h4>
               </div>
            </div>
         </li>

         <li class="splide__slide">
            <div class="overlay--box"><img class="persons-img" style="height: fit-content; object-position: inherit;" src="<?php bloginfo('template_url'); ?>/img-temporal/marco-alvarez-02.png" alt="Marco Alvarez" />
               <img class="hexagono1" src="<?php bloginfo('template_url'); ?>/img-temporal/mi-hexagono-2.svg" alt="" />
               <div class="wrapper--testimonios">
                  <h2 class="title--testimonio">Marco Álvarez</h2>
                  <h3 class="title--cargos">Jefe de Servicios Generales</h3>
                  <h4 class="subtitle--testimonio">“27 años trabajando en una empresa con gran ambiente laboral y donde encontré oportunidad de crecimiento, desempeñando labores en distintas áreas. Agradezco la confianza.”</h4>
               </div>
            </div>
         </li>
      </ul>
   </div>
</section>





<!--Quienes somos nuevo-->
<!-- <h2 class="title__organizacion">ORGANIZACIÓN</h2>

<div class="fondo__organigram organizacion">

<div class="box__organigram2">
<img class="img-hexagon3" src="https://www.taglermaq.cl/wp-content/uploads/2024/02/vector-hexag.png" style="position: absolute; opacity: .5; width: 80%; left: 0; transform: rotate(-180deg);">
<ul id="box__organigram2">

    <li><a href="#card1" class="card-a card-1">
     <div class="content">
      <div class="front">Innovación</div>
      <div class="back"><img src="https://www.taglermaq.cl/wp-content/uploads/2021/04/extendido.svg" style="width: 155px;" alt="" /></div>
    </div>
    </a></li>
    <li><a href="#card2" class="card-a card-2">
     <div class="content">
      <div class="front">Comercial</div>
      <div class="back">Comercial</div>
    </div>
    </a></li>
    <li><a href="#card3" class="card-a card-3">
     <div class="content">
      <div class="front">SAT</div>
      <div class="back">SAT</div>
    </div>
    </a></li>
    <li><a href="#card4" class="card-a card-4">
     <div class="content">
      <div class="front">Admin. & Finanzas</div>
      <div class="back">Admin. & Finanzas</div>
    </div>
    </a></li>
    <li><a href="#card5" class="card-a card-5">
     <div class="content">
      <div class="front">Comex</div>
      <div class="back">Comex</div>
    </div>
    </a></li>
    <li><a href="#card6" class="card-a card-6">
     <div class="content">
      <div class="front">Nuevos Negocios</div>
      <div class="back">Nuevos Negocios</div>
    </div>
    </a></li>
    
</ul>
</div> -->


<!-- <div class="box__deptos2">
<img class="img-hexagon3" src="http://www.taglermaq.cl/wp-content/uploads/2024/02/vector-hexag.png"> -->

<!--<div id="card1" class="wrapper__cards cubox-content">
<h2 class="title__deptos">NUESTRA <span class="color-depto">ORGANIZACIÓN</span></h2>
<p class="parrafo__deptos">Contamos con una organización empresarial de la que dependen procesos y procedimientos que unidos logran los objetivos de Taglermaq.</p>

</div>-->

<!-- Info -->
<!-- <div id="card1" class="wrapper__cards cubox-content">
<div class="content--elementos">


<h2 class="title__deptos">NUESTRA <span class="color-depto">ORGANIZACIÓN</span></h2>
<p class="parrafo__deptos">Contamos con una organización empresarial de la que dependen procesos y procedimientos que unidos logran los objetivos de Taglermaq.</p>


</div>
</div> -->
<!-- Info -->

<!-- Comercial -->
<!-- <div id="card2" class="wrapper__cards cubox-content">
<div >
<div class="content--elementos">
<div class="block--oscuro"><img class="img-circle-persons" src="http://www.taglermaq.cl/wp-content/uploads/2024/03/pablo-aravena-1.jpg" />
<h2 class="title--personas">PABLO ARAVENA</h2>
<h2 class="title--cargos">Gerente Comercial</h2>
<h4 class="title1--personas">Comprender la evolución de diferentes ámbitos del mercado nos orienta para desarrollar soluciones que nos llevan al éxito.</h4>
</div>
<div class="block--claro">
<h2 class="title--areas">COMERCIAL</h2>
<h4 class="sub--title--areas">En Gerencia Comercial y Nuevos Negocios, somos clave para conectar nuestra empresa con el mercado. Con experiencia y pasión, identificamos tendencias y formulamos estrategias que impulsan el crecimiento y satisfacen a clientes. Anticipamos desafíos e innovamos, asegurando competitividad y éxito.</h4>
</div>
</div>
</div>
</div> -->

<!-- SAT -->
<!-- <div id="card3" class="wrapper__cards cubox-content">
<div>
<div class="content--elementos">
<div class="block--oscuro">

<img class="img-circle-persons" src="http://www.taglermaq.cl/wp-content/uploads/2023/08/boris-garcia-01.jpg" alt="" />
<h2 class="title--personas">BORIS GARCIA</h2>
<h2 class="title--cargos">Gerente de Servicio de Asistencia Técnica</h2>
<h4 class="title1--personas">Cada día es un desafío donde la colaboración, la escucha activa y la comunicación son esenciales para crecer, tanto personal como profesionalmente. La adaptabilidad y el aprendizaje continuo son clave para superar obstáculos.</h4>
</div>
<div class="block--claro">
<h2 class="title--areas">SAT</h2>
<h4 class="sub--title--areas">Nuestra principal motivación se orienta en brindar soluciones integrales y efectivas, reduciendo los tiempos de detención de los equipos a través de nuestros diferentes servicios, potenciando así su disponibilidad y optimizando la producción, con un equipo de profesionales operativo 24/7.</h4>
</div>
</div>
</div>
</div> -->

<!-- Adminstración y Finanzas -->
<!-- <div id="card4" class="wrapper__cards cubox-content">
<div>
<div class="content--elementos">
<div class="block--oscuro">

<img class="img-circle-persons" src="http://www.taglermaq.cl/wp-content/uploads/2024/03/claudio-olate.jpg" alt="" />
<h2 class="title--personas">CLAUDIO OLATE</h2>
<h2 class="title--cargos">Gerente de Administración y Finanzas</h2>
<h4 class="title1--personas">Con amplia experiencia en finanzas, colaboro en el crecimiento personal, profesional y económico de mis colegas y la empresa en la que laboro.</h4>
</div>
<div class="block--claro">
<h2 class="title--areas">ADMINISTRACIÓN & FINANZAS</h2>
<h4 class="sub--title--areas">El departamento de administración y finanzas gestiona recursos, supervisa finanzas, cumple con tributación, promueve transparencia, planea estrategias, mantiene relaciones clave, mitiga riesgos y asegura la sucesión empresarial.</h4>
<div class="wrapper--areas">
</div>
</div>
</div>
</div>
</div> -->


<!-- Comex -->
<!-- <div id="card5" class="wrapper__cards cubox-content">
<div>
<div class="content--elementos">
<div class="block--oscuro">

<img class="img-circle-persons" src="https://www.taglermaq.cl/wp-content/uploads/2021/08/sra-heidi2.jpg" alt="" />
<h2 class="title--personas">HEIDI SCHWARTZ</h2>
<h2 class="title--cargos">Gerente de Comex</h2>
<h4 class="title1--personas">Llevo mas de 30 años trabajando en Comercio Exterior, y cada etapa trae nuevos desafios que nos motivan a seguir creciendo y aprendiendo.</h4>
</div>
<div class="block--claro">
<h2 class="title--areas">COMEX</h2>
<h4 class="sub--title--areas">Nuestro objetivo es mantener las necesidades de abastecimiento de la empresa bajo condiciones de rentabilidad y eficiencia. Siempre orientados en preservar una relación a largo plazo con nuestras proveedores nacionales y extranjeros.</h4>
</div>
</div>
</div>
</div> -->

<!-- Nuevos Negocios -->
<!-- <div id="card6" class="wrapper__cards cubox-content">
<div>
<div class="content--elementos">
<div class="block--oscuro">

<img class="img-circle-persons" src="http://www.taglermaq.cl/wp-content/uploads/2024/01/cdiaz.jpg" alt="" />
<h2 class="title--personas">CRISTIAN DÍAZ</h2>
<h2 class="title--cargos">Gerente de Nuevos Negocios</h2>
<h4 class="title1--personas">Saber escuchar y recoger los sueños y las ideas de nuestros clientes son parte fundamental del trabajo diario y de la innovación. No podemos llegar a ser líderes y crecer con nuestros clientes haciendo más de lo mismo. </h4>
</div>
<div class="block--claro">
<h2 class="title--areas">NUEVOS NEGOCIOS</h2>
<h4 class="sub--title--areas">Estamos materializando un sueño a través de la construcción de un nuevo equipo y la ejecución de un sólido proyecto para expandir nuestro horizonte y así llevar el desarrollo tecnológico de más de 30 años y todo el soporte y la calidad de nuestro Servicio Técnico hacia nuevos clientes.</h4>
<div class="wrapper--areas"> -->

<!--
<div class="box--areas">
<img class="icon--areas2" src="https://www.taglermaq.cl/wp-content/uploads/2021/07/andre.jpg" alt="">
<h2 class="tit-industrias">ADMINISTRACIÓN
Y FINANZAS</h2>
</div>
-->
<div class="box--areas">

   <!--<img class="icon--areas2" src="https://www.taglermaq.cl/wp-content/uploads/2021/07/jaime.jpg" alt="" />
<h2 class="tit-industrias">MARKETING</h2>
-->

   <!-- </div>
</div>
</div>
</div>
</div>
</div> -->
   <!-- Innovación -->

   <!-- </div>
</div> -->
   <!--Quienes somos nuevo-->


   <h2 class="title__organizacion2">PRESENTE Y FUTURO</h2>
   <div id="image-slider2" class="splide">
      <div class="splide__track">
         <ul class="splide__list alto--slider">
            <li class="splide__slide">
               <div class="overlay-futuro"><img class="img-slide-futuro" src="https://taglermaq.cl/wp-content/uploads/2025/04/familia1.jpg" /></div>
               <!--
<div class="wrapper-title2">
<div class="box-future1">
<h3 class="title-personas-futuro">Guillermo Linzmayer</h3>
</div>
<div class="box-future1">
<h3 class="title-personas-futuro">Wilhelm Linzmayer</h3>
</div>
<div class="box-future1">
<h3 class="title-personas-futuro">Guillermo Jr. Linzmayer</h3>
</div>
<div class="box-future1">
<h3 class="title-personas-futuro">Heidi Schwartz</h3>
</div>
</div>
-->
            </li>

            <li class="splide__slide">
               <div class="overlay-futuro2"><img class="img-slide-futuro" src="https://taglermaq.cl/wp-content/uploads/2025/04/willy-hijo.jpg" /></div>
               <div class="wrapper-title" style="left:69%;">
                  <!-- <h2 class="txt-future2"><span class="color-futuro">No hay nada como una familia</span> y un sueño para
<span class="color--verde">crear el futuro</span></h2> -->
               </div>
            </li>

         </ul>
      </div>
   </div>





   <?php get_footer(); ?>