<?php
/**
 * Template Name: Comics
 * Description: Muestra todos los posts del Custom Post Type 'comics_pdf'.
 */
?>

<?php get_header(); ?>

<div class="fondo-color-comics">
    <div class="wrapper-comics">

        <?php
            // Argumentos para la consulta del Custom Post Type 'comics_pdf'
            $args = array(
                'post_type'      => 'comics_pdf', // (Título del slug registrado en CPT UI)
                'posts_per_page' => -1,           // Muestra todos los posts sin paginación (cambiar para paginación si hay muchos)
                'post_status'    => 'publish',    // Solo posts publicados
                // 'orderby'        => 'date',    // Ordenar por fecha
                // 'order'          => 'DESC',    // Del más nuevo al más antiguo
            );

            // Crea una nueva consulta WP_Query
            $comics_query = new WP_Query( $args );

            // Captura la cantidad total de cómics encontrados ANTES del bucle
            $comic_count = $comics_query->found_posts;
        ?>

        <header class="page-header">
            <p class="number-count-history">
                <?php
                    // Muestra el conteo de cómics
                    echo esc_html($comic_count);
                    echo ' comic' . ($comic_count == 1 ? '' : 's') . ' encontrado(s).';
                ?>
            </p>

            <!-- // Muestra el título de la página "Comics" -->
            <h1 class="page-title"><?php the_title();?></h1>
        </header>


        <div class="grid-box-comics">
            <?php
                // Comprueba si la consulta devolvió algún post
                if ( $comics_query->have_posts() ) :
                    // Bucle para mostrar cada comic
                    while ( $comics_query->have_posts() ) : $comics_query->the_post(); 
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'my-animation box-comics' ); ?>>
                            <div class="content-img">
                                <?php if ( has_post_thumbnail() ) : // Comprueba si el cómic tiene una imagen destacada ?>
                                    <?php the_post_thumbnail( 'full' ); // Muestra la imagen destacada en tamaño 'full' ?>
                                <?php endif; ?>
                            </div>

                            <section class="content-titles-comics">
                                <div class="margenes-titles">
                                    <h1><?php the_title(); // Muestra el título del comic ?></h1>
                                    <p><?php echo esc_html(get_field('subtitulo-maquito')); ?></p>

                                    <div class="wrapper-button">
                                        <a class="no-preload" 
                                            href="<?php bloginfo('template_url'); ?>/historietas/<?php echo esc_html(get_field('version_espanol')); ?>.pdf"
                                            target="_blank">
                                            <button class="pdf-espanol">Español</button>
                                        </a>

                                        <a class="no-preload" 
                                            href="<?php bloginfo('template_url'); ?>/historietas/<?php echo esc_html(get_field('version_ingles')); ?>.pdf"
                                            target="_blank">
                                            <button class="pdf-ingles">Ingles</button>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </article>
                        <?php
                    endwhile;

                    // Restaura los datos originales del post global
                    wp_reset_postdata();


                else :
                    // Mensaje si no se encuentran comics
                    echo '<p>No se encontraron comics.</p>';
                endif;
            ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>