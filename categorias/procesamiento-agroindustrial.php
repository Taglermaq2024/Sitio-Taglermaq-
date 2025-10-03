<?php
/* Template Name: Procesamiento Agroindustrial
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=procesamiento-agroindustrial">
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=calibradoras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/agro-calibradoras_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-calibradoras.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Calibradoras</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=cortadoras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/agro-cortadoras_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-cortadoras.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Cortadoras</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=descorazonadora-y-descabezadora">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/agro-descorazonadora_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-descorazonadora.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Descorazonadora y Descabezadora</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=lavadoras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/agro-lavadoras_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-lavadoras.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Lavadoras</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=peladoras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/agro-peladoras_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-peladoras.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Peladoras</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento-agroindustrial/?_filter_agroindustrial=inspeccion-visual">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/agro-inspeccion-visual_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-inspeccion-visual.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Inspección Visual</h2>
                  </div>


               </div>
            </div>



            <div class="content-title-categories">
               <h2 class="title-maquinas">Procesamiento Agroindustrial</h2>
               <div class="content-filter"><?php echo do_shortcode('[facetwp facet="filter_agroindustrial"]'); ?></div>
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