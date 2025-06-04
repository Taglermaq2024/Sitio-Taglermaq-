

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

        

        <div class="wrapper-search">

            <header class="page-header">
                <h1 class="page-title">
                    <?php printf( 'Resultados de búsqueda para: %s', '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>

                </h1>
            </header>
            
            <div class="grid-search" data-aos="fade-in">
                <?php
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', 'search' );
                    endwhile;
                ?>
            </div>
        </div>

    
    <?php
    else :

        get_template_part( 'template-parts/content', 'none' );
        echo '<div class="no-results">No se encontraron resultados para la búsqueda: <strong>' . get_search_query() . '</strong></div>';

    endif;
    ?>

    </main>
</div>









<?php get_footer(); ?>
