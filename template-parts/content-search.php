
<article class="box-search" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    

    <a href="<?php the_permalink(); ?>" rel="bookmark">
        <?php 
            // Imagen destacada
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium', array('class' => 'img-search')); // Tamaños: 'thumbnail', 'medium', 'large', 'full'
            }
        ?>
        
        <div class="box-content-titles">

            <?php
                $pais_de_origen = get_field('pais_de_origen');
                $image_url = $pais_de_origen['url'];
                echo '<img class="img-flag" src="' . esc_url($image_url) . '" alt="Imagen del país de origen">';
            ?>

            <div class="title-marca"><?php echo get_field('marca'); ?></div>
            <?php the_title(); ?>

            <button>VER PRODUCTOS</button>

        </div>
    </a>


    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>

</article>


