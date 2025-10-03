<?php
/* Template Name: Sistemas de Inspección
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=sistemas-de-inspeccion">
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=rayos-x">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/rayos-x_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-rayos-x.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Rayos X</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=imagen-quimica">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/imagen-quimica_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-imagen-quimica.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Imagen Química</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=detector-de-metales">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/detector-de-metales_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-detector-metal1.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Detector de Metales</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion/?_filter_inspeccion=chequeadores-de-peso">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/chequeadores-peso_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-chequeador-de-peso.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Chequeadores de Peso</h2>
                  </div>



               </div>
            </div>

            <div class="content-title-categories">
               <h2 class="title-maquinas">Sistemas de Inspección</h2>
               <div class="content-filter"><?php echo do_shortcode('[facetwp facet="filter_inspeccion"]'); ?></div>
            </div>

            <div class="content-machines"><?php echo do_shortcode('[facetwp template="template"]'); ?></div>

         </div>
      </div>

      <?php the_excerpt(); ?>
<?php
   }
}
?>


<?php get_footer() ?>