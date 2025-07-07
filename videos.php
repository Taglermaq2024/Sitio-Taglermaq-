<?php
/**
 * Template Name: videos-multimedia
 * Description: Muestra videos "videos_multimedia" filtrados por botones por "Etiquetas".
 */

get_header(); ?>

    <div class="fondo-color-filter">
        <div class="wrapper-menu-filter">
            <?php the_content(); // Espacio para contenido del editor de WordPress, si lo necesitas. ?>
            <div class="box-filter-buttons">
                <?php
                    // Obtiene la URL de la página actual para construir los enlaces de los filtros.
                    $current_page_url = get_permalink();
                    // Revisa si hay un filtro activo en la URL (?brand_filter=...)
                    $current_filter = isset($_GET['brand_filter']) ? sanitize_title($_GET['brand_filter']) : '';
                ?>
                
                
                <!-- <a href="<?php echo esc_url($current_page_url); ?>" class="filter-button <?php echo empty($current_filter) ? 'active' : ''; ?>">
                    Todos
                </a> -->

                <?php
                // Array con las marcas para generar los botones de filtro.
                $brands = [
                    'Admix', 'Anritsu', 'Astech', 'Apex', 'bettcher', 'biro', 'burro', 'carl stahl', 'Colussi', 
                    'Detecto', 'Dick', 'Efa', 'Fessmann', 'Gunther', 'Handtmann', 'Insort', 'Irinox', 'Itec', 
                    'Laska', 'Multiweigh', 'Modula', 'Peschl', 'Sormac', 'Treif', 'Ulma', 'Ulma Inoxtruck', 
                    'Ulma Handling', 'VC999'
                ];

                // Bucle para crear un botón por cada marca.
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
        <article class="wrapper-videos" <?php post_class();?>>

            <?php 
                // Argumentos base para la consulta de videos.
                $args = [
                    'post_type'      => 'videos_multimedia',
                    'posts_per_page' => -1, // Muestra todos los videos que coincidan.
                ];

                // Si hay un filtro activo, se añade la condición a la consulta.
                if ( !empty($current_filter) ) {
                    $args['tax_query'] = [
                        [
                            'taxonomy' => 'post_tag',       // Busca en las etiquetas generales de WordPress.
                            'field'    => 'slug',           // Compara usando el slug (versión URL de la etiqueta).
                            'terms'    => $current_filter,  // El slug de la etiqueta que se está filtrando.
                        ],
                    ];
                }

                // Ejecutar la consulta de WordPress con los argumentos definidos.
                $videos_query = new WP_Query($args);
                
                // Capturar la cantidad total de videos encontrados.
                $video_count = $videos_query->found_posts;
            ?>

            <header class="entry-header">
                <?php 
                    // =========================================================================
                    // Cuenta la cantidad de videos que existen por filtrado
                    // =========================================================================
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
                // Comprueba si la consulta devolvió algún post.
                if ($videos_query->have_posts()) :
                    // Bucle para mostrar cada video.
                    while ($videos_query->have_posts()) : $videos_query->the_post();
                        ?>
                        <a class="venobox vbox-item no-preload" href="<?php
                            $autoplay = "?autoplay=1&amp;loop=1&amp;muted=1&amp;playsinline=1";
                            echo get_field('cargar_url_vimeo') . $autoplay; 
                        ?>" data-vbtype="video" data-autoplay="true">

                            <div class="box-videos">
                                <?php
                                    // Muestra la imagen destacada si existe.
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('medium', array('class' => 'img-videos'));
                                    }
                                ?>
                                <div class="wrapper-title-logotipo">
                                    <?php 
                                    // Muestra el logotipo del proveedor si existe (usando Advanced Custom Fields).
                                    $image = get_field('logotipo_proveedor');
                                    if( !empty( $image ) ): ?>
                                        <img class="logotipo_proveedor" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif;?>
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

                    <?php endwhile;
                    // Restaura los datos originales del post global.
                    wp_reset_postdata(); 
                endif;
                ?>
            </div>
        </article>
    </div>

<?php get_footer(); ?>