<?php
/* Template Name: Noticias */
get_header();
?>

<?php
// 1. Preparamos el Query para obtener TODAS las noticias
$args = array(
   'post_type'      => 'contenido_noticias',
   'posts_per_page' => -1, // El valor -1 significa "traer todos los posts"
);
$query_noticias = new WP_Query($args);
?>

<div class="fondo-notice">
   <section class="wrapper-fondo-notice">

      <div class="group-notice-title">
         <h2>Novedades & Tecnología</h2>
         <p>Revisa nuestros contenidos sobre las últimas innovaciones, tecnologías y ferias internacionales con soluciones para la Industria Alimentaria.</p>
      </div>

      <?php if ($query_noticias->have_posts()) : ?>

         <article class="wrapper-post-destacada">
            <?php
            // Apuntamos al primer post (el más reciente) y lo mostramos
            $query_noticias->the_post();
            ?>


            <section class="content-img-destacada">
               <?php
               if (has_post_thumbnail()) {
                  the_post_thumbnail('full', array('class' => 'imagen-destacada'));
               }
               ?>
            </section>

            <section class="wrapper-txt-destacada">
               <div class="content-txt-destacada">
                  <p class="fecha-destacada"><?php the_date(); ?></p>
                  <hr class="line-destacada">
                  <h2 class="txt-title-destacada"><?php the_title(); ?></h2>
                  <a href="<?php echo get_permalink(); ?>">
                     <button>Leer Más</button>
                  </a>
                  <div class="extracto-destacado">
                     <?php the_excerpt(); ?>
                  </div>
               </div>
            </section>

         </article>





         <div class="grid-container-notice">
            <?php
            // Ahora el loop while() continuará desde el SEGUNDO post en adelante
            while ($query_noticias->have_posts()) : $query_noticias->the_post(); ?>
               <a href="<?php echo get_permalink(); ?>">
                  <div class="grid-item-notice">
                     <?php
                     if (has_post_thumbnail()) {
                        the_post_thumbnail('large');
                     }
                     ?>
                     <div class="wrapper-txt-notice">
                        <div class="content-txt-notice">
                           <p class="fecha-publicada"><?php the_date(); ?></p>
                           <hr class="line-separator">
                           <h2 class="title-notice"><?php the_title(); ?></h2>
                        </div>
                     </div>
                  </div>
               </a>
            <?php endwhile; ?>
         </div>

      <?php
      else :
         get_template_part('template-parts/content', 'none');
      endif;

      // 4. Es importante resetear siempre el post data después de un loop personalizado
      wp_reset_postdata();
      ?>

   </section>
</div>

<?php get_footer(); ?>