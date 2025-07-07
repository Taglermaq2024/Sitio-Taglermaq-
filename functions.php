<?php
global $theme_name;
$theme_name = 'Taglermaq';

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');



// TODO: Oculta el menú de "Comentarios" del dashboard
function quitar_menu_comentarios() {
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'quitar_menu_comentarios');


// TODO: Aumenta valores de restricción, corrige error enlace caducado por defecto 128m
@ini_set( 'upload_max_size' , '1024M');
@ini_set( 'post_max_size', '1024M');
@ini_set( 'max_execution_time', '1024');



// TODO: ACTIVA IMAGEN DESTACADA
add_theme_support('post-thumbnails');



// TODO: AGREGRA IMAGEN DESTACADA A LA COLUMNA ENTRADAS
add_filter('manage_posts_columns', 'add_img_column');
add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);

function add_img_column($columns) {
	$columns['img'] = 'Imagen Destacada';
	return $columns;
}

function manage_img_column($column_name, $post_id) {
	if( $column_name == 'img' ) {
		echo get_the_post_thumbnail($post_id, 'thumbnail'); return true;
	}
}





// TODO: INICIO - Mejora la búsqueda principal
function mi_busqueda_principal_modificada( $query ) { 
    
    // Aplicar solo a la búsqueda principal en el frontend
    if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {

        $query->set('post_type', 'post');
        $query->set('posts_per_page', -1);

        $search_term = $query->get('s');
        if ( empty($search_term) ) {
            return;
        }

        // =================================================================
        // NUEVO: Lógica para generar términos en singular y plural
        // =================================================================
        // Creamos un array para almacenar las variaciones del término de búsqueda.
        // Esta es una aproximación simple pero efectiva para muchos sustantivos en español.
        $search_terms_plural_sensitive = [];
        $search_terms_plural_sensitive[] = $search_term; // Añadimos el término original

        // Comprobamos si la palabra termina en 's' para generar el singular.
        if ( strtolower( substr( $search_term, -1 ) ) === 's' ) {
            $search_terms_plural_sensitive[] = substr( $search_term, 0, -1 );
        } 
        // Si no, asumimos que es singular y añadimos la 's' para el plural.
        else {
            $search_terms_plural_sensitive[] = $search_term . 's';
        }

        // Eliminamos posibles duplicados (por ejemplo, si se busca una palabra que termina en 's' pero es singular)
        $search_terms_plural_sensitive = array_unique( $search_terms_plural_sensitive );


        // Bloque añadido para las exclusiones por palabra clave
        $exclusions = [
            'ulma'       => [1427, 1425, 1423, 1421, 1419, 1417, 1415, 1413, 1411, 1409],
            'envasadora' => [430, 428, 423, 421, 419],
            'rayos'      => [1114, 1116, 1118],
        ];

        $posts_to_exclude = [];
        foreach ($exclusions as $keyword => $ids) {
            if (stripos($search_term, $keyword) !== false) {
                $posts_to_exclude = array_merge($posts_to_exclude, $ids);
            }
        }

        if (!empty($posts_to_exclude)) {
            $query->set('post__not_in', $posts_to_exclude); 
        }

        add_filter('posts_distinct', 'mi_busqueda_distinct');
        add_filter('posts_join', 'mi_busqueda_join');

        // =================================================================
        // MODIFICADO: Pasamos el array de términos al filtro 'posts_where'
        // =================================================================
        add_filter('posts_where', function($where) use ($search_terms_plural_sensitive) {
            global $wpdb;

            // Construimos una lista de condiciones 'LIKE' para cada término de búsqueda
            $search_conditions = [];
            foreach ( $search_terms_plural_sensitive as $term ) {
                $like = '%' . $wpdb->esc_like( $term ) . '%';
                $search_conditions[] = "{$wpdb->posts}.post_title LIKE '{$like}'";
                $search_conditions[] = "{$wpdb->posts}.post_excerpt LIKE '{$like}'";
                $search_conditions[] = "{$wpdb->posts}.post_content LIKE '{$like}'";
                $search_conditions[] = "t.name LIKE '{$like}'"; // Búsqueda en etiquetas/categorías
            }

            // Unimos todas las condiciones con 'OR'
            $new_where_part = '(' . implode(' OR ', $search_conditions) . ')';

            // Reemplazamos la condición de búsqueda de título original con nuestra nueva condición extendida.
            // Esto mantiene la estructura de la consulta original de WordPress.
            $where = preg_replace(
                "/\(\s*{$wpdb->posts}.post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
                $new_where_part,
                $where
            );
            
            return $where;
        });
    }
}
add_action( 'pre_get_posts', 'mi_busqueda_principal_modificada' );

function mi_busqueda_distinct() {
    return 'DISTINCT';
}

function mi_busqueda_join($join){
    global $wpdb;
    // Se añade una comprobación para no duplicar el JOIN si otro plugin lo añade
    if ( strpos( $join, 'term_relationships' ) === false ) {
        $join .= " LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id";
        $join .= " LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id";
        $join .= " LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id";
    }
    return $join;
}
// TODO: FIN - Mejora la búsqueda principal














// TODO: PERSONALIZA Y AGREGA MI NUEVO CUSTOM POST TYPE "NOTICIAS"
function custom_post_type_single_template( $single_template ) {
    global $post;

    if ( 'contenido_noticias' === $post->post_type ) {
        $single_template = dirname( __FILE__ ) . '/single-detalle_noticias.php';
    }

    return $single_template;
}
add_filter( 'single_template', 'custom_post_type_single_template' );








// TODO: ELIMINAR PÁRRAFOS AUTOMÁTICOS POR DEFECTO
remove_filter('the_content', 'wpautop');
remove_filter( 'the_excerpt', 'wpautop' );



// TODO: ELIMINA GUTEMBERG EDITOR DE CÓDIGO
add_filter('gutenberg_can_edit_post_type', '__return_false');
add_filter('use_block_editor_for_post_type', '__return_false', 100);









