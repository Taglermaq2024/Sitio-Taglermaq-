<?php

// TODO: EXCLUYE BÚSQUEDAS DE MARCAS Y PALABRAS EN PARTICULAR
function exclude_posts_in_specific_search($query) {
    if (!is_admin() && $query->is_search() && $query->is_main_query()) {
        $search_term = $query->get('s'); // Obtiene el término de búsqueda
        
        // Definir términos de búsqueda y los posts a excluir
        $exclusions = [
            'ulma'        => [1427, 1425, 1423, 1421, 1419, 1417, 1415, 1413, 1411, 1409],
            'envasadora'  => [430, 428, 423, 421, 419],
            'detecto'     => [1133, 1131, 1118, 1116, 1127, 1125, 1123, 1136, 1114, 1111]
        ];

        $post_ids_to_exclude = [];

        // Verificar si el término de búsqueda coincide con algún término en el array
        foreach ($exclusions as $keyword => $post_ids) {
            if (stripos($search_term, $keyword) !== false) {
                $post_ids_to_exclude = array_merge($post_ids_to_exclude, $post_ids);
            }
        }

        if (!empty($post_ids_to_exclude)) {
            $query->set('post__not_in', array_unique($post_ids_to_exclude));
        }
    }
}
add_action('pre_get_posts', 'exclude_posts_in_specific_search');



?>