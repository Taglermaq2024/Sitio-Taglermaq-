<?php
/* Template Name: Cortadoras
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=maquinas-cortadoras">
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=cortadora-de-cubos-y-tiras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/cortadora-de-cubos1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-cortador-de-cubos.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Cortadoras de Cubos y Tiras</h2>
                  </div>




                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=porcionadoras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/porcionadora1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-porcionadoras.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Porcionadoras</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=rebanadoras-de-laminas">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/rebanadora-laminas1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-rebanadoras.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Rebanadoras de Láminas</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=sierra-cortadora-de-huesos-manual">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/sierra-cortadora-de-huesos1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-cortadora-de-huesos.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Sierra Cortadora de Huesos Manual</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=sierra-de-corte-automatico">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/sierra-de-corte1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-sierra-de-corte.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Sierra de Corte Automático</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=cutter">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/cutters1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-cutters.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Cutter</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=prensa-de-carne">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/prensa-de-carne1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-cutters.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Prensa de Carne</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/cortadoras/?_filter_cortadoras=cortadora-de-pan">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/cortadora-de-pan1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-cortador-de-pan.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Cortadora de Pan</h2>
                  </div>

               </div>
            </div>





            <div class="content-title-categories">
               <h2 class="title-maquinas">Máquinas Cortadoras</h2>
               <div class="content-filter">
                  <?php echo do_shortcode('[facetwp facet="filter_cortadoras"]'); ?>
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