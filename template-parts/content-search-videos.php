<?php
    // TODO: Mostrar resultado de búsqueda de VIDEOS.
    // TODO: No contiene campos personalizados de máquinas para evitar conflictos.
?>

<!-- Campo de video -->
<article class="box-search-videos" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    
    <a class="venobox vbox-item no-preload" href="
        <?php $autoplay = "?autoplay=1&amp;loop=1&amp;muted=1&amp;playsinline=1";?>
        <?php echo get_field('cargar_url_vimeo') . $autoplay; ?>" data-vbtype="video" data-autoplay="true">   
        
        <div class="wrapper-img-noticia-destacada">
            <img class="icon-video" src="https://taglermaq.cl/wp-content/uploads/2025/06/videos1.svg">
            <?php
                // Muestra la imagen destacada si la noticia la tiene.
                if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium', array('class' => 'img-search-noticia'));
                }
            ?>
        </div>

        <div class="box-content-titles-videos">
            
            <?php // Carga logotipo
            $image = get_field('logotipo_proveedor'); // Variable Advanced Custom Field
			if( !empty( $image ) ): ?>
				<img class="logotipo_proveedor" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif;?>

            <hr class="line">

            <?php the_title( '<h3 class="titulo-noticia">', '</h3>' ); ?>
        </div>
        
    </a>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>

</article>



