<?php
/*
    Template Name: Noticia Personalizada
*/
?>

<?php get_header(); ?>


<?php
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'single' );
        ?>

        
        <div class="wrapper-banner-front">

            <?php if (get_field('degradado_overlay') ): ?>
                <?php the_field('degradado_overlay'); ?>
            <?php endif; ?>

            <?php if (get_field('imagen_banner') ): ?>
                <img class="img-banner" src="<?php the_field('imagen_banner'); ?>" alt="imagen">
            <?php endif; ?>
            
            <div class="wrapper-title-banner">
                <div class="wrapper-icon-title">
                    
                    <!-- Muestra logotipo arriba del título principal -->
                    <?php if (get_field('logotipo_principal') ): ?>
                        <img class="img-logotipo" src="<?php the_field('logotipo_principal'); ?>" alt="imagen">
                    <?php endif; ?>

                    <!-- Muestra título principal de la noticia -->
                    <?php if (get_field('titulo_banner') ): ?>
                        <h2 class="title-init"><?php the_field('titulo_banner'); ?></h2>
                    <?php endif; ?>

                    <!-- Muestra Subtítulo principal de la noticia -->
                    <?php if (get_field('sub_titulo') ): ?>
                        <h3 class="txt-subtitle"><?php the_field('sub_titulo'); ?></h3>
                    <?php endif; ?>

                    <!-- Muestra título como imagen -->
                    <?php if (get_field('texto_imagen') ): ?>
                        <img class="img-texto" src="<?php the_field('texto_imagen'); ?>" alt="imagen">
                    <?php endif; ?>
                </div>
            </div>

        </div>

        <div class="fondo-contenido">
            <div class="wrapper-edit-content">
                <?php if (get_field('editor_contenido') ): ?>
                    <?php the_field('editor_contenido'); ?>
                <?php endif; ?>

                <!-- Grafica imagen de apoyo al texto -->
                <?php if (get_field('grafica_img') ): ?>
                    <img class="img-grafica" src="<?php the_field('grafica_img'); ?>" alt="imagen">
                <?php endif; ?>

                <!-- Contenido para escrbir mensaje -->
                <?php if (get_field('visitar_web') ): ?>
                    <h2 class="visitar"><?php the_field('visitar_web'); ?></h2>
                <?php endif; ?>

                <!-- Boton - Invitar a usuarios -->
                <?php if( get_field('invitar_usuarios') ): ?>
                    <a href="<?php the_field('invitar_usuarios') ?>">
                        <button class="btn-mas-info">Conoce nuestras tecnologías</button>
                    </a>							
			    <?php endif; ?>	


            </div>
        </div>



    <?php endwhile; ?>
            
    <?php the_excerpt();?>






    <?php get_footer(); ?>


