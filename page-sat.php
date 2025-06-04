<?php
/*
  Template Name: Page-Sat
  Template Post Type: post, page
*/

get_header();
?>


<?php
if ( have_posts() ):
  ?>
<?php
while ( have_posts() ): the_post();
?>
<section class="principal_sat">
  <article>
    <div class="texto">
      <img class="logo desktop" src="<?php bloginfo('template_url'); ?>/img-temporal/logo-sat.png" alt="sat" />
      <a href="#cifras" class="btn-sat">Descubre más</a></div>
    <img class="desktop" src="<?php bloginfo('template_url'); ?>/img-temporal/img_sat_v5.png" alt="Sat" />
    <img class="mobile" src="<?php bloginfo('template_url'); ?>/img-temporal/principal.jpg" alt="Sat" /> </article>
</section>


<?php bloginfo('template_url'); ?> 




<section class="soluciones_sat">
  <div class="min-sat">
  <div class="texto">
    <h2>ENTREGAMOS SOLUCIONES<br>
      INTEGRALES Y EFICIENTES</h2>
    <h3>24 horas al día, los 7 días de la semana</h3>
    <p>Nos enorgullecemos de ofrecer soluciones industriales que impulsen la capacidad productiva de tu empresa, respaldados por más de 33 años de experiencia en el mercado.</p>
    <img src="<?php bloginfo('template_url'); ?>/img-temporal/experiencia-garantizada.png" class="experiencia" alt="sat" /> </div>
  <!--texto-->
  <div class="imagen"> <img src="<?php bloginfo('template_url'); ?>/img-temporal/soluciones.png" alt="Sat" /> </div>
  <!--imagen--> 
  </div><!--min-->
</section>

<section id="cifras" class="cifras_sat">
  <h2><span>CONOCE ALGUNAS CIFRAS<br>
    DE NUESTRA GESTIÓN</span></h2>
  <div class="box-cifras">
    <div class="cifra"> <span class="num counter">5.300</span> <span class="detalle">MÁQUINAS<br>
      NIVEL NACIONAL</span> </div>
    <div class="cifra"> <span class="num counter verde">+100.000</span> <span class="detalle verde">HORAS DE SERVICIO<br>
      TÉCNICO</span> </div>
    <div class="cifra"> <span class="num counter">99%</span> <span class="detalle">DE CONTINUIDAD<br>
      OPERACIONAL</span> </div>
  </div>
</section>

<section class="title-servicios_sat">
  <h2><span>SERVICIOS Y ASISTENCIAS PARA DIVERSAS ETAPAS</span></h2>
</section>
<section class="servicios_sat">
<div class="min-sat">
  <div class="box-servicios">
    <div class="imagen">
      <figure class="icon"><img src="<?php bloginfo('template_url'); ?>/img-temporal/01.png" alt="Puesta en marcha de equipos." /></figure>
      <figure><img src="<?php bloginfo('template_url'); ?>/img-temporal/servicio-01.jpg" alt="Puesta en marcha de equipos." /></figure>
    </div>
    <div class="texto">
      <h2>Puesta en marcha de equipos.</h2>
      <p>Contamos con un equipo altamente capacitado para llevar a cabo la instalación y puesta en marcha de tus equipos, asegurando que estén listos para operar en el menor tiempo posible.</p>
      <a href="https://taglermaq.cl/formulario-de-contacto/" class="btn-sat">Contáctanos</a></div>
  </div>


  <!--servicios-->
  <div class="box-servicios">
    <div class="imagen">
      <figure class="icon"><img src="<?php bloginfo('template_url'); ?>/img-temporal/02.png" alt="Acuerdos de Servicio de Mantenimiento anual (SLA)" /></figure>
      <figure> <img src="<?php bloginfo('template_url'); ?>/img-temporal/servicio-02.jpg" alt="Acuerdos de Servicio de Mantenimiento anual (SLA)" /></figure>
    </div>
    <div class="texto">
      <h2>Acuerdos de Servicio de Mantenimiento anual (SLA)</h2>
      <p>Ofrecemos opciones de contratos de mantenimiento anuales para brindarte tranquilidad y un servicio constante de cuidado de equipos, con el objetivo de mantener su correcto funcionamiento a lo largo del tiempo.</p>
      <a href="https://taglermaq.cl/formulario-de-contacto/" class="btn-sat">Contáctanos</a></div>
  </div>


  <!--servicios-->
  <div class="box-servicios">
    <div class="imagen">
      <figure class="icon"><img src="<?php bloginfo('template_url'); ?>/img-temporal/03.png" alt="Mantenimiento predictivo, preventivo y correctivo." /></figure>
      <figure><img src="<?php bloginfo('template_url'); ?>/img-temporal/servicio-03.jpg" alt="Mantenimiento predictivo, preventivo y correctivo." /></figure>
    </div>
    <div class="texto">
      <h2>Mantenimiento predictivo, preventivo y correctivo.</h2>
      <p>SAT realiza un análisis exhaustivo de equipos para identificar posibles fallas antes de que ocurran, lo que permite programar intervenciones preventivas para evitar tiempos de inactividad no planificados. </p>
      <a href="https://taglermaq.cl/formulario-de-contacto/" class="btn-sat">Contáctanos</a></div>
  </div>


  <!--servicios-->
  <div class="box-servicios">
    <div class="imagen">
      <figure class="icon"><img src="<?php bloginfo('template_url'); ?>/img-temporal/04.png" alt="Regulación y parametrización de equipos" /></figure>
      <figure><img src="<?php bloginfo('template_url'); ?>/img-temporal/servicio-04.jpg" alt="Regulación y parametrización de equipos" /></figure>
    </div>
    <div class="texto">
      <h2>Regulación y parametrización de equipos</h2>
      <p>Ajustamos y optimizamos tus equipos para garantizar su desempeño óptimo y eficiente, asegurando un funcionamiento sin problemas y una mayor vida útil.</p>
      <a href="https://taglermaq.cl/formulario-de-contacto/" class="btn-sat">Contáctanos</a></div>
  </div>


  <!--SAT-->
  <div class="box-servicios" style="background-color: #585858">
    <div class="wrapper_fondo_sat_servicios">
      <img class="img_sat_box" src="<?php bloginfo('template_url'); ?>/img-temporal/logo-sat.png" alt="Sat">

      <img class="img_sat_taglermaq" src="<?php bloginfo('template_url'); ?>/img-temporal/extendido.svg" alt="Sat">

    </div>
  </div>

  <!--servicios-->
  <div class="box-servicios">
    <div class="imagen">
      <figure class="icon"><img src="<?php bloginfo('template_url'); ?>/img-temporal/05.png" alt="Monitoreo de condiciones" /></figure>
      <figure><img src="<?php bloginfo('template_url'); ?>/img-temporal/servicio-05.jpg" alt="Monitoreo de condiciones" /></figure>
    </div>
    <div class="texto">
      <h2>Monitoreo de condiciones</h2>
      <p>Monitoreamos constantemente las condiciones de tus equipos, mediante el uso de tecnología avanzada, para detectar cualquier anomalía y tomar acciones preventivas de manera proactiva.</p>
      <a href="https://taglermaq.cl/formulario-de-contacto/" class="btn-sat">Contáctanos</a></div>
  </div>


  <!--servicios-->
  <div class="box-servicios">
    <div class="imagen">
      <figure class="icon"><img src="<?php bloginfo('template_url'); ?>/img-temporal/06.png" alt="Auditoría de equipos e inspecciones." /></figure>
      <figure><img src="<?php bloginfo('template_url'); ?>/img-temporal/servicio-06-01.jpg" alt="Auditoría de equipos e inspecciones." /></figure>
    </div>
    <div class="texto">
      <h2>Auditoría de equipos e inspecciones</h2>
      <p>Realizamos evaluaciones periódicas para asegurarnos que tus equipos estén cumpliendo con los estándares de calidad y seguridad, identificando oportunidades de mejora.</p>
      <a href="https://taglermaq.cl/formulario-de-contacto/" class="btn-sat">Contáctanos</a></div>
  </div>


  <!--servicios-->
  <div class="box-servicios">
    <div class="imagen">
      <figure class="icon"><img src="<?php bloginfo('template_url'); ?>/img-temporal/07.png" alt="Apoyo y acompañamiento de la producción" /></figure>
      <figure><img src="<?php bloginfo('template_url'); ?>/img-temporal/servicio-07.jpg" alt="Apoyo y acompañamiento de la producción" /></figure>
    </div>
    <div class="texto">
      <h2>Apoyo y acompañamiento de la producción</h2>
      <p>Nuestro equipo de expertos técnicos está listo para asesorar y acompañar a tu personal durante el proceso de producción, garantizando la optimización de los recursos y la eficiencia operativa.</p>
      <a href="https://taglermaq.cl/formulario-de-contacto/" class="btn-sat">Contáctanos</a></div>
  </div>


  <!--servicios-->
  <div class="box-servicios">
    <div class="imagen">
      <figure class="icon"><img src="<?php bloginfo('template_url'); ?>/img-temporal/08.png" alt="Capacitaciones de uso y mantención de equipos." /></figure>
      <figure><img src="<?php bloginfo('template_url'); ?>/img-temporal/servicio-08.jpg" alt="Capacitaciones de uso y mantención de equipos." /></figure>
    </div>
    <div class="texto">
      <h2>Capacitaciones de uso y mantención de equipos</h2>
      <p>Compartimos nuestro conocimiento y experiencia a través de programas de capacitación personalizados para tu equipo, asegurando un manejo adecuado y una mantención óptima de los equipos.</p>
      <a href="https://taglermaq.cl/formulario-de-contacto/" class="btn-sat">Contáctanos</a></div>
  </div>
  <!--servicios--></section>
	

<section class="equipo_sat">
<div class="min-sat">
  <div class="imagen"><img src="<?php bloginfo('template_url'); ?>/img-temporal/equipo.png" alt="Sat" /> </div>
  <!--imagen-->
  <div class="texto">
    <h2>CONTAMOS CON UN EQUIPO TÉCNICO E INGENIERIL CAPACITADO</h2>
    <h3>Para dar respuesta a los requerimientos de la industria alimenticia nacional</h3>
    <p>En SAT somos más que un proveedor de servicio, somos un equipo de profesionales altamente capacitados, listo para entregar un servicio técnico de alto nivel, brindando un respaldo inquebrantable las 24 horas del día, los 7 días de la semana,
      haciéndonos cargo de la parte técnica necesario para la operación de tu empresa, sin preocupaciones.</p>
  </div>
</div><!--min-->
  <!--texto--> 
</div><!--min-->
</section>


<section class="capacitaciones_sat">

    
    <div class="info">
      
      <div class="texto">
        <h2>Capacitaciones</h2>
        <p>Nuestro equipo técnico, capacitado periódicamente en el extranjero por las marcas que representamos, posee el conocimiento necesario para asesorarte de manera precisa en cada etapa de tu proyecto.<br><br><span>¡Confía en nuestra experticia para llevar tu proyecto al éxito!</span></p>
      </div>

      <div class="sat-c slider imagen">
        
      <div class="box box-02">
         <img src="<?php bloginfo('template_url'); ?>/img-temporal/training-taglermaq.jpg" alt="Capacitaciones Sat" />
         <figure class="marca"><img src="<?php bloginfo('template_url'); ?>/img-temporal/handtmann.svg" alt="handtmann" /></figure>
         <p>HANDTMANN En dependencias Taglermaq<span class="pais">Chile</span></p>
         <div class="detalle">
          <h2>TRAINING HANDTMANN</h2>
          <p>Este training, impartido por Rodolfo Pacheco, Technical Support de Handtmann, se enfocó en dar a conocer al equipo técnico de SAT las últimas actualizaciones referentes al mantenimiento de sus máquinas, mejoras técnicas y el uso eficiente de la plataforma Handtmann.</p>
         </div><!--detalle-->	
       </div><!--box-->






       <div class="box box-02">
         <img src="<?php bloginfo('template_url'); ?>/img-temporal/capacitaciones-02.jpg" alt="Capacitaciones Sat" />
         <figure class="marca"><img src="<?php bloginfo('template_url'); ?>/img-temporal/handtmann.svg" alt="handtmann" /></figure>
         <p>Operación y Mantenimiento de la Máquina VF 800<span class="pais">Brasil</span></p>
         <div class="detalle">
          <h2>Capacitación Handtmann</h2>
          <p>Training realizado en la empresa Handtmann Brasil para las máquinas embutidoras VF 800. En esta oportunidad se trataron las mantenciones, chequeo de fallas eléctricas, cambio de kit de servicio de 2000 horas y operación de pantalla asociada a estas embutidoras.</p>
         </div><!--detalle-->	
       </div><!--box-->

       <div class="box box-03">
         <img src="<?php bloginfo('template_url'); ?>/img-temporal/capacitaciones-05.jpg?v=0.1" alt="Capacitaciones Sat" />
         <figure class="marca"><img src="<?php bloginfo('template_url'); ?>/img-temporal/astech_.svg" alt="Astech" /></figure>
         <p>Training Sierras Astech<span class="pais">España</span></p>
         <div class="detalle">
          <h2>Capacitación Astech</h2>
          <p>En este training se abarcaron los análisis de fallas, mantenciones y funciones de corte de las Sierras Cortadoras fabricados por la empresa española Astech.</p>
         </div><!--detalle-->
       </div><!--box-->

       <div class="box box-01">
         <img src="<?php bloginfo('template_url'); ?>/img-temporal/capacitaciones-03.jpg?v=0.1" alt="Capacitaciones Sat" />
         <figure class="marca"><img src="<?php bloginfo('template_url'); ?>/img-temporal/ulma.svg" alt="handtmann" /></figure>
         <p>Training máquinas termoformadora de pizzas <span class="pais">España</span></p>
         <div class="detalle">
          <h2>Capacitación ULMA</h2>
          <p>En esta capacitación que se trató de la nueva máquina Temoformadora de pizza, permitió complementar el conocimiento acerca de los servomotores en estaciones de sellado y formado incluidos esta máquina.</p>
         </div><!--detalle-->
       </div><!--box-->
		  
	   <div class="box box-02">
         <img src="<?php bloginfo('template_url'); ?>/img-temporal/capacitaciones-03.png?v=0.1" alt="Capacitaciones Sat" />
         <figure class="marca"><img src="<?php bloginfo('template_url'); ?>/img-temporal/ulma.svg" alt="handtmann" /></figure>
         <p>Training Proyecto línea de Muffin <span class="pais">España</span></p>
         <div class="detalle">
          <h2>Capacitación ULMA</h2>
          <p>Training Ulma para implementación de proyecto de línea de muffins.</p>
         </div><!--detalle-->
       </div><!--box-->
		  

      </div><!--regular-->

    </div><!--info-->

  

</section><!---capacitaciones-->




<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".sat-c").slick({
        autoplay:true,
        dots: false,
        arrows: true,
        speed: 2500,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        }, {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }, {
          breakpoint: 420,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
        }
        }]
      });
    });
</script>

<?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
require 'script.php';
?>
