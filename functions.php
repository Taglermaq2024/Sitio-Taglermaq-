<?php
global $theme_name;
$theme_name = 'Taglermaq';

// Clean up the <head>
function removeHeadLinks()
{
   remove_action('wp_head', 'rsd_link');
   remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');


// TODO: Aumenta valores de restricción
@ini_set('upload_max_size', '1024M');
@ini_set('post_max_size', '1024M');
@ini_set('max_execution_time', '1024');

// TODO: ACTIVA IMAGEN DESTACADA
add_theme_support('post-thumbnails');

// TODO: AGREGRA IMAGEN DESTACADA A LA COLUMNA ENTRADAS
add_filter('manage_posts_columns', 'add_img_column');
add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);

function add_img_column($columns)
{
   $columns['img'] = 'Imagen Destacada';
   return $columns;
}

function manage_img_column($column_name, $post_id)
{
   if ($column_name == 'img') {
      echo get_the_post_thumbnail($post_id, 'thumbnail');
      return true;
   }
}


// TODO: ELIMINAR PÁRRAFOS AUTOMÁTICOS POR DEFECTO
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');



// TODO: ELIMINA GUTEMBERG EDITOR DE CÓDIGO
add_filter('gutenberg_can_edit_post_type', '__return_false');
add_filter('use_block_editor_for_post_type', '__return_false', 100);





// TODO: Mejora la búsqueda principal de máquinas y excluye
function mi_busqueda_principal_modificada($query)
{

   // Aplicar solo a la búsqueda principal en el frontend
   if (!is_admin() && $query->is_main_query() && $query->is_search()) {

      $query->set('post_type', 'post');
      $query->set('posts_per_page', -1);

      $search_term = $query->get('s');
      if (empty($search_term)) {
         return;
      }

      // Bloque añadido para las exclusiones por palabra clave
      $exclusions = [
         'ulma'       => [1427, 1425, 1423, 1421, 1419, 1417, 1415, 1413, 1411, 1409],
         'envasadora' => [430, 428, 423, 421, 419],
         'rayos'      => [1114, 1116, 1118]
      ];

      $posts_to_exclude = [];
      foreach ($exclusions as $keyword => $ids) {
         // Usamos stripos para una búsqueda no sensible a mayúsculas/minúsculas
         if (stripos($search_term, $keyword) !== false) {
            $posts_to_exclude = array_merge($posts_to_exclude, $ids);
         }
      }

      // Si encontramos IDs para excluir, se los pasamos a la consulta
      if (!empty($posts_to_exclude)) {
         $query->set('post__not_in', $posts_to_exclude);
      }

      // Filtro para evitar duplicados
      add_filter('posts_distinct', 'mi_busqueda_distinct');

      // Filtros para expandir la búsqueda a categorías y etiquetas
      add_filter('posts_join', 'mi_busqueda_join');
      add_filter('posts_where', function ($where) use ($search_term) {
         global $wpdb;
         $like = '%' . $wpdb->esc_like($search_term) . '%';
         $where = preg_replace(
            "/\(\s*{$wpdb->posts}.post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "((({$wpdb->posts}.post_title LIKE '{$like}') OR ({$wpdb->posts}.post_excerpt LIKE '{$like}') OR ({$wpdb->posts}.post_content LIKE '{$like}')) OR (t.name LIKE '{$like}'))",
            $where
         );
         return $where;
      });
   }
}
add_action('pre_get_posts', 'mi_busqueda_principal_modificada');

// Nueva función auxiliar que simplemente devuelve la palabra "DISTINCT"
function mi_busqueda_distinct()
{
   return 'DISTINCT';
}

// Función auxiliar para unir la tabla de términos (versión limpia)
function mi_busqueda_join($join)
{
   global $wpdb;
   $join .= " LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id";
   return $join;
}
// TODO: FIN - Mejora la búsqueda principal




// TODO: Personaliza el Front de la Noticia
function custom_post_type_single_template($single_template)
{
   global $post;
   if ('contenido_noticias' === $post->post_type) {
      $single_template = dirname(__FILE__) . '/single-detalle_noticias.php';
   }

   return $single_template;
}
add_filter('single_template', 'custom_post_type_single_template');





/**
 * Prepara los datos de filtrado y realiza la consulta de videos.
 * Carga solo la primera página de resultados para el frontend inicial.
 *
 * @param int $paged Número de página actual.
 * @param int $posts_per_page Número de posts por página.
 * @return array Un array que contiene 'current_filter', 'brands', 'videos_query', 'video_count', etc.
 */

function get_video_filter_data($paged = 1, $posts_per_page = 12)
{ // Valores por defecto para la carga inicial
   global $wp_query;

   $current_page_url = get_permalink();
   $current_filter = isset($_GET['brand_filter']) ? sanitize_title($_GET['brand_filter']) : '';

   $brands = [
      'Admix',
      'Anritsu',
      'Astech',
      'Apex',
      'bettcher',
      'biro',
      'burro',
      'carl stahl',
      'Colussi',
      'Dick',
      'Efa',
      'Fessmann',
      'Günther',
      'Handtmann',
      'Insort',
      'Irinox',
      'Itec',
      'Laska',
      'Multiweigh',
      'Modula',
      'Peschl',
      'Sormac',
      'Treif',
      'Ulma',
      'Ulma Inoxtruck',
      'Ulma Handling',
      'VC999'
   ];

   // Argumentos base para la consulta de videos.
   $args = [
      'post_type'      => 'videos_multimedia',
      'posts_per_page' => $posts_per_page, // Ahora se usa el parámetro $posts_per_page
      'paged'          => $paged,           // Ahora se usa el parámetro $paged
      'post_status'    => 'publish',
   ];

   if (!empty($current_filter)) {
      $args['tax_query'] = [
         [
            'taxonomy' => 'post_tag',
            'field'    => 'slug',
            'terms'    => $current_filter,
         ],
      ];
   }

   $videos_query = new WP_Query($args);
   $video_count = $videos_query->found_posts;

   wp_reset_postdata();

   return [
      'current_page_url' => $current_page_url,
      'current_filter'   => $current_filter,
      'brands'           => $brands,
      'videos_query'     => $videos_query,
      'video_count'      => $video_count,
      'max_num_pages'    => $videos_query->max_num_pages, // Nuevo: devuelve el total de páginas
      'current_paged_query' => $videos_query->query_vars // Nuevo: los vars de la consulta actual para AJAX
   ];
}


// TODO: Encola el script JavaScript para la carga con AJAX.
// Se asegura de que se pase la query_vars y otros datos necesarios para el AJAX.

function mi_sitio_enqueue_scripts()
{
   // Obtenemos los datos iniciales para pasarlos a JavaScript.
   // Aquí llamamos a la función con los valores por defecto (página 1, 8 posts)
   $initial_data = get_video_filter_data(1, 12); // Cargar los primeros 8 posts


   wp_register_script('mi-sitio-ajax-load', get_template_directory_uri() . '/js/carga-diferida.js', array('jquery'), null, true);


   wp_localize_script('mi-sitio-ajax-load', 'miSitioAjax', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
      'posts_per_page' => 12, // Número de videos a cargar por cada petición AJAX
      'current_page' => 1, // Página inicial (ya cargada en el HTML)
      'max_pages' => $initial_data['max_num_pages'], // Total de páginas disponible
      'current_filter' => $initial_data['current_filter'], // El filtro activo en la carga inicial
      // Pasamos los query_vars exactos de la consulta inicial, para que AJAX sepa qué filtrar
      'query_vars' => json_encode($initial_data['current_paged_query']),
      'video_count' => $initial_data['video_count'] // Para actualizar el contador en el frontend
   ));

   wp_enqueue_script('mi-sitio-ajax-load');
}
add_action('wp_enqueue_scripts', 'mi_sitio_enqueue_scripts');



// TODO: Maneja la petición AJAX para cargar más videos.
//Esta función es llamada por JavaScript.

function mi_sitio_load_more_videos()
{
   // Seguridad: Considera añadir un nonce si el contexto lo requiere (e.g., formularios de usuario)
   // if ( !isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'mi_sitio_load_more_nonce') ) {
   //     wp_die('Acceso denegado');
   // }

   $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
   $posts_per_page = isset($_POST['posts_per_page']) ? intval($_POST['posts_per_page']) : 6;
   $current_filter = isset($_POST['current_filter']) ? sanitize_title($_POST['current_filter']) : '';

   // Obtenemos los query_vars pasados desde JavaScript y los decodificamos
   $query_vars_from_js = json_decode(stripslashes($_POST['query_vars']), true);

   // Construimos los argumentos de la consulta para la petición AJAX
   $args = array(
      'post_type'      => 'videos_multimedia',
      'posts_per_page' => $posts_per_page,
      'paged'          => $paged,
      'post_status'    => 'publish',
   );

   // Si hay un filtro activo, añadirlo a la tax_query
   if (!empty($current_filter)) {
      $args['tax_query'] = array(
         array(
            'taxonomy' => 'post_tag',
            'field'    => 'slug',
            'terms'    => $current_filter,
         ),
      );
   }

   // Es importante pasar los query_vars originales para mantener cualquier otro filtro.
   // Sobrescribimos 'paged' y 'posts_per_page' con los valores AJAX.
   $ajax_query_args = array_merge($query_vars_from_js, $args);
   $ajax_query_args['paged'] = $paged;
   $ajax_query_args['posts_per_page'] = $posts_per_page;
   // Eliminar valores que pueden causar problemas en AJAX (e.g., 'name', 'page_id')
   unset($ajax_query_args['name'], $ajax_query_args['page_id'], $ajax_query_args['error']);


   $ajax_query = new WP_Query($ajax_query_args);

   if ($ajax_query->have_posts()) :
      while ($ajax_query->have_posts()) : $ajax_query->the_post(); ?>

         <!-- Este es el HTML de cada caja de video. DEBE ser idéntico al de tu plantilla. -->
         <a class="venobox vbox-item no-preload" href="
            <?php $autoplay = "?autoplay=1&amp;loop=1&amp;muted=1&amp;playsinline=1";
            echo get_field('cargar_url_vimeo') . $autoplay; ?>" data-vbtype="video" data-autoplay="true" data-aos="fade-up">

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
                  <?php endif; ?>
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
   <?php endif; ?>

<?php
   wp_reset_postdata();
   wp_die();
}

add_action('wp_ajax_mi_sitio_load_more_videos', 'mi_sitio_load_more_videos');
add_action('wp_ajax_nopriv_mi_sitio_load_more_videos', 'mi_sitio_load_more_videos');



// Ordena "sólo la búsqueda de máquinas forma alfabética" 
function ordenar_resultados_busqueda_alfabeticamente($query)
{
   if ($query->is_search() && $query->is_main_query()) {
      $query->set('orderby', 'title');
      $query->set('order', 'ASC');
   }
}
add_action('pre_get_posts', 'ordenar_resultados_busqueda_alfabeticamente');




?>