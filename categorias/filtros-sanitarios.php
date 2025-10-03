<?php
/* Template Name: Filtros Sanitarios
  Template Post Type: post, page */
get_header();
?>


<?php
if (have_posts()) {
   while (have_posts()) {

?>
      <?php the_post(); ?>

      <div class="wrapper-fondo">
         <div class="margin-screen" data-aos="fade-in">
            <div class="wrapper-fondo-circle">
               <div class="wrapper-content-circle">


                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=filtros-sanitarios">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/maquina-zoom.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/icon-ver-todo.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Toda la categoría</h2>
                  </div>


                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=desinfectante-de-manos">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/desinfectante-de-manos1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-encajadoras.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Desinfectante de Manos</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=control-de-acceso-y-lavado-de-manos">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/control-de-accesos-y-lavado-de-manos1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-control-de-acceso.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Control de Acceso y Lavado de Manos</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=lavamanos">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/lavamanos1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-lavamanos.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Lavamanos</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=limpiasuelas">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/clean-limpiasuelas1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-limpiasuelas.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Limpiasuelas</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=limpiabotas">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/clean-limpiabotas1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-limpiabotas.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Limpiabotas</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filter_sanitarios=limpiasuelas-con-limpieza-y-desinfeccion-de-manos">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/clean-limpiasuelas-con-limpieza1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-limpieza-desinfeccion-manos.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Limpiasuelas con limpieza y desinfección de manos</h2>
                  </div>

               </div>
            </div>


            <div class="content-title-categories">
               <h2 class="title-maquinas">Filtros Sanitarios</h2>
               <div class="content-filter">
                  <?php echo do_shortcode('[facetwp facet="filter_sanitarios"]'); ?>
               </div>
            </div>

            <div class="content-machines">
               <?php echo do_shortcode('[facetwp template="template"]'); ?>
            </div>


         </div>
      </div>

      <?php the_excerpt(); ?>
<?php

   }
}
?>




<?php get_footer() ?>