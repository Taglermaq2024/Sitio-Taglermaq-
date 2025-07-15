<?php get_header(); ?>

<div class="progress-container">
    <div class="progress-bar" id="progressBar"></div>
</div>

<div class="wrapper-search">
    <header class="page-header">
        <p>Se encontraron <?php global $wp_query; echo $wp_query->found_posts; ?> resultado(s).</p>
        <h1 class="page-title">
            <?php printf( 'Búsqueda para Máquinas: %s', '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
        </h1>
    </header>
    
    <!-- Resultado búsqueda para máquinas -->
    <?php if ( have_posts() ) : ?>
        <div class="search-results-entradas">
            <div class="grid-search">
                <?php while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content', 'search' );
                endwhile; ?>
            </div>
        </div>                
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    
    
    <!-- Resultado búsqueda para Noticias -->
    <?php
        $search_term = get_search_query();
        $args_noticias = array(
            'post_type'      => 'contenido_noticias',
            's'              => $search_term,
            'posts_per_page' => -1,
        );
        $query_noticias = new WP_Query( $args_noticias );
    ?>
    <?php if ( $query_noticias->have_posts() ) : ?>
        <div class="wrapper-results-noticias">
            <header class="section-header">
                <p>Se encontraron <?php echo $query_noticias->found_posts; ?> resultado(s).</p>
                <h2>Búsqueda para Noticias</h2>
            </header>
            <div class="grid-search-noticias">
                <?php while ( $query_noticias->have_posts() ) : $query_noticias->the_post();
                    get_template_part( 'template-parts/content', 'search-noticia' );
                endwhile; ?>
            </div>
        </div>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>



    <!-- Resultado búsqueda para Videos -->
    <?php
        $args_videos = array(
            'post_type'      => 'videos_multimedia',
            's'              => $search_term,
            'posts_per_page' => -1,
        );
        $query_videos = new WP_Query( $args_videos );
    ?>
    
    <?php if ( $query_videos->have_posts() ) : ?>
        <?php $found_anything = true; // Marcamos que encontramos algo ?>
        <div class="wrapper-results-videos">
            <header class="section-header">
                <p>Se encontraron <?php echo $query_videos->found_posts; ?> resultado(s).</p>
                <h2>Búsqueda para Videos</h2>
            </header>
            <div class="grid-search-videos">
                <?php while ( $query_videos->have_posts() ) : $query_videos->the_post();
                    get_template_part( 'template-parts/content', 'search-videos' );
                endwhile; ?>
            </div>
        </div>
        <?php wp_reset_postdata(); // Limpiamos después de este bucle personalizado. ?>
    <?php endif; ?>



    <!-- Si no encuentra nada en la búsqueda muestra este código -->
    <?php
        global $wp_query;
        if ( !$wp_query->have_posts() && !$query_noticias->have_posts() ) :
            get_template_part( 'template-parts/content', 'none' );
            echo '<div class="no-results">No se encontraron resultados para la búsqueda: <strong>' . esc_html(get_search_query()) . '</strong></div>';
        endif;
    ?>
</div>
<?php get_footer(); ?>