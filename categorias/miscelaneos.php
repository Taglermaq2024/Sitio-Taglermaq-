<?php
/* Template Name: Miscelaneos
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=miscelaneos">
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=guantes-de-seguridad">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/guantes-de-seguridad_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-guantes-de-seguridad.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Guantes de Seguridad</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=cuchillos-manuales">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/cuchillos-manuales_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-cuchillos-manuales.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Cuchillos Manuales</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=tecles">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/tecles_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-tecles.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Tecles</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=equipos-rectificadores-de-cuchillos">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/equipos-rectificadores-de-cuchillos_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-equipo-rectificadores.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Equipos Rectificadores de Cuchillos</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=cuchillos-quantum-flex">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/cuchillos-circulares_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-cuchillos-bettcher.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Cuchillos Quantum Flex</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=maquinas-higienizables">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/montecarga-higienizable_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-soluciones-higienizables.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Máquinas Higienizables</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/miscelaneos/?_filter_miscelaneos=varios">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/varios_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-varios.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Varios</h2>
                  </div>

               </div>
            </div>


            <div class="content-title-categories">
               <h2 class="title-maquinas">Miscelaneos</h2>
               <div class="content-filter"><?php echo do_shortcode('[facetwp facet="filter_miscelaneos"]'); ?></div>
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