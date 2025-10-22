<?php
/* Template Name: Desposte
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/equipos-de-desposte/?_filter_desposte=equipos-de-desposte">
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/equipos-de-desposte/?_filter_desposte=sierra-de-desposte">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/sierra-de-desposte1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-sierras-de-desposte1.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Sierras de Desposte</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/equipos-de-desposte/?_filter_desposte=desmembranadoras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/desmembranadora1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-tecnologia-uv.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Desmembranadoras</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/equipos-de-desposte/?_filter_desposte=cuchillos-circulares-quantum-flex">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/cuchillos-circulares1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-cuchillos-bettcher1.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Cuchillos Circulares Quantum Flex</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/equipos-de-desposte/?_filter_desposte=esterilizadores-de-cuchillos">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/esterilizador1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-esterilizadores1.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Esterilizadores de Cuchillos</h2>
                  </div>

               </div>
            </div>


            <div class="content-title-categories">
               <h2 class="title-maquinas">Equipos de Desposte</h2>
               <div class="content-filter"><?php echo do_shortcode('[facetwp facet="filter_desposte"]'); ?></div>
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