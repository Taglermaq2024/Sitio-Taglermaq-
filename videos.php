<?php
// Template Name: videos-multimedia
// Description: Muestra videos "videos_multimedia" filtrados por botones por "Etiquetas".
?>

<?php get_header(); ?>

<?php
// Llama a la función de backend para obtener los datos iniciales de la primera página (página 1, 8 videos).
$data = get_video_filter_data(1, 8);

// Extrae las variables del array $data.
$current_page_url = $data['current_page_url'];
$current_filter   = $data['current_filter'];
$brands           = $data['brands'];
$videos_query     = $data['videos_query']; // Esta WP_Query ahora contiene solo la primera página
$video_count      = $data['video_count']; // El total de videos para el filtro actual
$max_num_pages    = $data['max_num_pages']; // El total de páginas para el filtro actual
?>


<div class="progress-container">
   <div class="progress-bar" id="progressBar"></div>
</div>


<div class="fondo-color-filter">
   <div class="wrapper-menu-filter">
      <?php the_content(); ?>
      <div class="box-filter-buttons">
         <a href="<?php echo esc_url($current_page_url); ?>" class="filter-button <?php echo empty($current_filter) ? 'active' : ''; ?>">
            Todos
         </a>

         <?php
         foreach ($brands as $brand) {
            $brand_slug = sanitize_title($brand);
            $button_url = add_query_arg('brand_filter', $brand_slug, $current_page_url);
            $is_active = ($current_filter === $brand_slug) ? 'active' : '';

            echo '<a href="' . esc_url($button_url) . '" class="filter-button ' . $is_active . '">' . esc_html($brand) . '</a>';
         }
         ?>
      </div>
   </div>
</div>

<div class="fondo-color-videos">
   <article class="wrapper-videos" <?php post_class(); ?>>
      <header class="entry-header">
         <?php
         // El conteo total de videos (para el filtro actual) lo obtenemos del initial_data
         echo '<p class="globe-count-videos">';
         if ($video_count == 1) {
            echo 'Se encontró 1 video.';
         } else {
            echo 'Se encontraron ' . esc_html($video_count) . ' videos.';
         }
         echo '</p>';
         ?>
         <h2>Resultado para Videos:</h2>
      </header>

      <div class="grid-box-videos">
         <?php
         if ($videos_query->have_posts()) :
            while ($videos_query->have_posts()) : $videos_query->the_post(); ?>
               <a class="venobox vbox-item no-preload" href="
                  <?php $autoplay = "?autoplay=1&amp;loop=1&amp;muted=1&amp;playsinline=1";
                  echo get_field('cargar_url_vimeo') . $autoplay; ?>" data-vbtype="video" data-autoplay="true">

                  <div class="box-videos">
                     <?php
                     if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', array('class' => 'img-videos', 'loading' => 'lazy'));
                     }
                     ?>

                     <div class="wrapper-title-logotipo">
                        <?php
                        $image = get_field('logotipo_proveedor');
                        if (!empty($image)): ?>
                           <img class="logotipo_proveedor" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif;
                        ?>

                        <hr class="line">
                        <h3><?php the_title(); ?></h3>
                     </div>

                     <?php if (get_the_content()): ?>
                        <div class="video-wrapper">
                           <?php the_content(); ?>
                        </div>
                     <?php endif; ?>
                  </div>
               </a>
            <?php endwhile; ?>
         <?php else :
            echo '<p>No se encontraron videos con el filtro actual.</p>';
         endif; ?>
      </div>

      <?php
      // Solo muestra el botón si hay más de la primera página.
      // miSitioAjax.current_page ya está en 1 por defecto.
      if ($videos_query->max_num_pages > 1) : ?>
         <div id="loading-spinner" style="display: none; text-align: center; margin: 20px 0;">
            <div class="spinner-animation"></div>
            <p>Cargando más videos...</p>
         </div>
      <?php endif; ?>

   </article>
</div>


<?php get_footer(); ?>