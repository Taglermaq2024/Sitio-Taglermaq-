<?php
/* Template Name: Procesamiento
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=maquinas-de-procesamiento">
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=masajeadoras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/masajeadora1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-masajeadora.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Masajeadoras</h2>
                  </div>


                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=atadoras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/03/atadoras.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/03/atadoras1.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Atadoras</h2>
                  </div>


                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=cortadora-separadora-de-embutidos">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/03/separador-embutidos.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/03/separadoras1.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Cortadora separadora embutidos</h2>
                  </div>


                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=picado-y-emulsion">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/03/picado-emulsion.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/03/picadoras1.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Picado y emulsión</h2>
                  </div>

                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=moledoras-mezcladoras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/moledora-mezcladora1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/03/circle-moledora-mezcladora1.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Moledoras Mezcladoras</h2>
                  </div>


                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=embutidoras-al-vacio">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/embutidora-vacio1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-embutidora.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Embutidoras al Vacío</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=formadoras">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/formadora1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-formadora.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Formadoras</h2>
                  </div>


                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=inyeccion-y-marinado">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/inyeccion-marinado1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-marinado.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Inyección y Marinado</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=moledoras-carne-congelada">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/carne-congelada1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-carne-congelada.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Moledoras Carne Congelada</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=torcedoras-de-salchichas">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/torcedora1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-torcedoras.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Torcedoras de Salchichas</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=preparacion-de-salmuera">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/preparacion-salmuera1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-salmuera.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Preparación de Salmuera</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=linea-de-carne-molida">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/linea-carne-molida_.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-carne-molida.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Línea de Carne Molida</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/procesamiento/?_filter_procesamiento=sistemas-de-dosificacion">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/dosificacion1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-dosificacion.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Sistemas de Dosificación</h2>
                  </div>

               </div>
            </div>


            <div class="content-title-categories">
               <h2 class="title-maquinas">Máquinas de Procesamiento</h2>
               <div class="content-filter"><?php echo do_shortcode('[facetwp facet="filter_procesamiento"]'); ?></div>
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