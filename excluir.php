<?php


function custom_search_modifications($where, $query) {
    global $wpdb;

    if ($query->is_search() && !is_admin()) {
        $search_term = $query->get('s');

        if (!empty($search_term)) {
            $like = '%' . $wpdb->esc_like($search_term) . '%';
            
            // TODO: ✴️ EXTENDER BÚSQUEDA A ETIQUETAS Y CATEGORÍAS (Mejora la búsqueda por SQL)
            $where .= " OR {$wpdb->posts}.ID IN (
                SELECT object_id
                FROM {$wpdb->term_relationships} tr
                INNER JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
                INNER JOIN {$wpdb->terms} t ON tt.term_id = t.term_id
                WHERE (tt.taxonomy = 'post_tag' OR tt.taxonomy = 'category')
                AND t.name LIKE '{$like}'
            )";

            
            // TODO: ✴️ EXCLUSIONES POR PALABRA CLAVE (Agrega el id del posts y lo ignora en la búsqueda)
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
                // Construir cláusula SQL para excluir
                $exclude_ids_sql = implode(',', array_map('intval', $posts_to_exclude));
                $where .= " AND {$wpdb->posts}.ID NOT IN ($exclude_ids_sql)";
            }
        }
    }

    return $where;
}
add_filter('posts_where', 'custom_search_modifications', 10, 2);



?>