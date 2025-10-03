<?php
/* Template Name: Higiene Inocuidad
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

                  <!-- <div class="wrapper-circle-txt">
							<div class="content-circle">
								<a id="tv-category-image" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=seguridad-industrial">
									<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/seguridad-industrial1.jpg" alt="" />
								</a>

								<div class="circle-fill-active">
                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-seguridad-industrial.svg" alt="">
                                </div>

							</div>
							<h2 id="filter_click">Seguridad Industrial</h2>
						</div> -->

                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=higiene-e-inocuidad">
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
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=proteccion-e-higiene-personal">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/protecion-e-higiene-personal1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-proteccion-e-higiene.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Protección e Higiene Personal</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=control-de-higiene-de-manos">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/control-de-higiene-demanos1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-control-de-higiene.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Control de Higiene de Manos</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=montacarga-higienizable">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/montecarga-higienizable1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-soluciones-higienizables.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Montacarga Higienizable</h2>
                  </div>



                  <div class="wrapper-circle-txt">
                     <div class="content-circle">
                        <a id="tv-category-image" href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_filter_inocuidad=tecnologia-uv-desinfectante">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/tecnologia-uv-desinfectante1.jpg" alt="" />
                        </a>

                        <div class="circle-fill-active">
                           <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/07/circle-tecnologia-uv.svg" alt="">
                        </div>

                     </div>
                     <h2 id="filter_click">Tecnología UV desinfectante</h2>
                  </div>
               </div>
            </div>



            <div class="content-title-categories">
               <h2 class="title-maquinas">Higiene e Inocuidad</h2>
               <div class="content-filter"><?php echo do_shortcode('[facetwp facet="filter_inocuidad"]'); ?></div>
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