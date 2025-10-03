<?php
/* Template Name: Otras Tecnologías
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/otras-tecnologias/?_filter_otras=otras-tecnologias">
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/otras-tecnologias/?_filter_otras=fabricadoras-de-hielo-troceado">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/hielo-troceado1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-hielo-troceado.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Fabricadoras de Hielo Troceado</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/otras-tecnologias/?_filter_otras=sistemas-de-automatizacion">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/sistemas-de-automatizacion1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-automatizacion.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Sistemas de Automatización</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/otras-tecnologias/?_filter_otras=lavadoras-industriales">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/lavadoras-industriales1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-lavadoras-industriales.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Lavadoras Industriales</h2>
                  </div>


               </div>
            </div>

            <div class="content-title-categories">
               <h2 class="title-maquinas">Otras Tecnologías</h2>
               <div class="content-filter"><?php echo do_shortcode('[facetwp facet="filter_otras"]'); ?></div>
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