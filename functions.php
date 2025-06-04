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



// TODO: BUSQUEDA AVANZADA CON CATEGORÍAS Y ETIQUETAS(TAGS) QUE COINCIDAN CON TERMINOS DE BUSQUEDA
function improve_search_query( $query ) {
    if ( $query->is_search && !is_admin() && $query->is_main_query() ) {
        // Obtén el término de búsqueda
        $search_term = $query->get('s');

        // Obtén las categorías que coinciden con los términos de búsqueda
        $matching_categories = get_terms(array(
            'taxonomy' => 'category',
            'fields' => 'ids',
            'name__like' => $search_term
        ));

        // Obtén las etiquetas que coinciden con los términos de búsqueda
        $matching_tags = get_terms(array(
            'taxonomy' => 'post_tag',
            'fields' => 'ids',
            'name__like' => $search_term
        ));

        // Crear un array para almacenar las condiciones de taxonomía
        $tax_query = array('relation' => 'OR');

        // Agregar las categorías coincidentes a la consulta
        if (!empty($matching_categories)) {
            $tax_query[] = array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $matching_categories,
            );
        }

        // Agregar las etiquetas coincidentes a la consulta
        if (!empty($matching_tags)) {
            $tax_query[] = array(
                'taxonomy' => 'post_tag',
                'field' => 'id',
                'terms' => $matching_tags,
            );
        }

        // Si hay condiciones de taxonomía, modifícalas en la consulta
        if (!empty($tax_query)) {
            $query->set('tax_query', $tax_query);
        }
    }
}
add_action( 'pre_get_posts', 'improve_search_query' );




@include("excluir.php");



// TODO: LIMPIA LA CAJA DE BUSQUEDA CADA VEZ QUE SE INGRESA UN DATO
function modificar_busqueda($query) {
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type', 'post');
        $query->set('posts_per_page', -1); // Esto muestra todos los resultados, puedes cambiarlo según tus necesidades
        $query->set('s', ''); // Limpia la búsqueda actual
        $search_query = get_search_query(); // Obtiene la cadena de búsqueda
        if (!empty($search_query)) {
            $query->set('s', $search_query); // Aplica la cadena de búsqueda nuevamente
            $query->set('title', $search_query); // Busca en los títulos de las publicaciones
        }
    }
    return $query;
}
add_filter('pre_get_posts','modificar_busqueda');






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








