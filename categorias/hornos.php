<?php
/* Template Name: Hornos
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/hornos-de-coccion/?_filter_hornos=hornos-de-coccion">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/maquina-zoom1.svg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/10/icon-ver-todo.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Toda la categoría</h2>
                  </div>


                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/hornos-de-coccion/?_filter_hornos=hornos-de-coccion-y-ahumado-pequena">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/horno-mediana-industria1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-horno-mediana-industria.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Hornos de Cocción y Ahumado Pequeña y Mediana Industria</h2>
                  </div>


                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/hornos-de-coccion/?_filter_hornos=hornos-de-coccion-y-ahumado-industrial">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/ahumado-industrial1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-horno-industrial.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Hornos de Cocción y Ahumado Industrial</h2>
                  </div>

               </div>
            </div>


            <div class="content-title-categories">
               <h2 class="title-maquinas">Hornos de Cocción</h2>
               <div class="content-filter"><?php echo do_shortcode('[facetwp facet="filter_hornos"]'); ?></div>
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