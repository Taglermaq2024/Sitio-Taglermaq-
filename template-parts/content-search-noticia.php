<?php
// TODO: Plantilla para mostrar un resultado de búsqueda de NOTICIA.
// TODO: No contiene campos personalizados de máquinas para evitar conflictos.
?>

<article class="box-search-noticia" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

   <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
      <?php
      // Muestra la imagen destacada si la noticia la tiene.
      if (has_post_thumbnail()) {
         the_post_thumbnail('medium', array('class' => 'img-search-noticia'));
      }
      ?>

      <div class="box-content-titles-noticia">
         <p class="fecha-publicada">Publicado: <?php the_date(); ?></p>
         <hr class="separator-search">
         <?php the_title('<h3 class="titulo-noticia">', '</h3>'); ?>
      </div>
   </a>

   <div class="entry-summary">
      <?php the_excerpt(); ?>
   </div>

</article>