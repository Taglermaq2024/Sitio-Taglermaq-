<?php
// Template Name: Render
// Description: Mustra toda la categoría con Renders 3D
?>

<?php get_header(); ?>


<?php
// Configurar los argumentos de la consulta (WP_Query)
$args = array(
   'post_type' => 'post',
   'category_name' => 'render', // Slug de la categoría
   'posts_per_page' => -1, // Mostrar todas las entradas
   'orderby' => 'title',
   'order' => 'ASC',
   'post_status' => 'publish'
);

// Ejecutar la consulta
$render_query = new WP_Query($args);

// Obtener el conteo total de máquinas
$total_maquinas = $render_query->found_posts;
?>

<div class="fondo-render">
   <div class="wrapper-category-render">

      <div class="page-content-wrapper">
         <?php while (have_posts()) : the_post();
            the_content();
         endwhile; ?>
      </div>

      <header class="page-header-render">
         <p>Se encontraron <?php echo esc_html($total_maquinas); ?> resultado(s).</p>
         <h1 class="page-title-render">Listado de Máquinas Render - 3D</h1>
      </header>

      <?php if ($render_query->have_posts()) : ?>

         <div class="grid-render">
            <?php
            // INICIO DEL LOOP DE MÁQUINAS PERSONALIZADO
            while ($render_query->have_posts()) : $render_query->the_post();

               // --- PREPARACIÓN DE VARIABLES DENTRO DEL LOOP ---
               $etiqueta_3d = get_field('etiqueta_3d_render');
               $pais_de_origen = get_field('pais_de_origen');
               $marca = get_field('marca');
               $post_id = get_the_ID();
               $permalink = get_the_permalink();
               $title = get_the_title();
            ?>

               <a href="<?php echo esc_url($permalink); ?>">
                  <div class="box-render">

                     <?php if (!empty($etiqueta_3d)): ?>
                        <img class="label-3d"
                           src="<?php echo esc_url($etiqueta_3d['url']); ?>"
                           alt="<?php echo esc_attr($etiqueta_3d['alt']); ?>" />
                     <?php endif; ?>

                     <?php if (has_post_thumbnail($post_id)) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                     <?php endif; ?>

                     <div class="group-render-titles">

                        <?php if (!empty($pais_de_origen)): ?>
                           <img class="img-flag"
                              src="<?php echo esc_url($pais_de_origen['url']); ?>"
                              alt="Imagen del país de origen" />
                        <?php endif; ?>

                        <?php if ($marca) : ?>
                           <div class="title-marca"><?php echo esc_html($marca); ?></div>
                        <?php endif; ?>

                        <h2 class="title-render"><?php echo esc_html($title); ?></h2>
                        <button>VER PRODUCTOS</button>
                     </div>
                  </div>
               </a>

            <?php
            endwhile;
            // FIN DEL LOOP DE MÁQUINAS PERSONALIZADO
            ?>

         </div>
      <?php else : ?>
         <p>Lo sentimos, no se encontraron máquinas asignadas a la categoría "RENDER" o el slug de la categoría no es correcto.</p>
      <?php endif; ?>

   </div>
</div>

<?php
// Limpiar los datos de la publicación original después del loop
wp_reset_postdata();
?>

<?php get_footer(); ?>