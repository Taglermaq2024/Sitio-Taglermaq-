<?php
/*
Template Name: Noticias
*/
?>

<?php get_header(); ?>


<?php
$args = array(
   'post_type' => 'contenido_noticias',
   'posts_per_page' => 100, // Número de posts por página, ajusta según tus necesidades
);
$query = new WP_Query($args);
?>

<div class="fondo-notice">



   <section class="wrapper-fondo-notice">
      <div class="grid-container-notice">
         <?php
         if ($query->have_posts()) :
            while ($query->have_posts()) :
               $query->the_post(); ?>

               <a href="<?php echo get_permalink(); ?>">
                  <div class="grid-item-notice">
                     <?php
                     if (has_post_thumbnail()) :
                        the_post_thumbnail('large');
                     endif;
                     ?>
                     <div class="wrapper-txt-notice">
                        <div class="content-txt-notice">
                           <p class="fecha-publicada">Publicado: <?php the_date(); ?></p>
                           <hr class="line-separator">
                           <h2 class="title-notice"><?php the_title(); ?></h2>
                        </div>
                     </div>
                  </div>
               </a>
            <?php endwhile;
            ?>
      </div>
   </section>
</div>




<?php
            // Paginación
            the_posts_navigation();

         else :
            get_template_part('template-parts/content', 'none');

         endif;

         wp_reset_postdata(); ?>




<?php get_footer(); ?>