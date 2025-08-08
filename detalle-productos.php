<?php
/* Template Name: detalle-productos
  	Template Post Type: post, page */
?>



<?php get_header(); ?>


<div class="wrapper-detalle-producto">
   <?php
   if (have_posts()) {
      while (have_posts()) {
   ?>
         <?php the_post(); ?>

         <div class="content-detalle-img">


            <!-- Mejora de carga -->
            <div class="content-slick-productos">
               <?php
               // Obtener todas las imágenes del repeater en una sola consulta
               $images = get_field('imagenes');

               // Comprobar si hay imágenes
               if ($images): ?>
                  <div class="slider slider-for">
                     <?php foreach ($images as $image): ?>
                        <div class="slider-banner-image">
                           <img src="<?php echo esc_url($image['imagen']); ?>" alt="<?php echo esc_attr($image['contenido']); ?>" loading="eager">
                        </div>
                     <?php endforeach; ?>
                  </div>

                  <div class="slider slider-nav thumb-image">
                     <?php foreach ($images as $image): ?>
                        <div class="thumbnail-image">
                           <div class="thumbImg">
                              <img src="<?php echo esc_url($image['imagen']); ?>" alt="<?php echo esc_attr($image['contenido']); ?>" loading="lazy">
                           </div>
                        </div>
                     <?php endforeach; ?>

                     <?php if (get_field('video_url')): ?>
                        <?php $autoplay = "?autoplay=1&amp;loop=1&amp;muted=1&amp;playsinline=1"; ?>
                        <a class="venobox vbox-item no-preload" href="<?php echo get_field('video_url') . $autoplay; ?>" data-vbtype="video" data-autoplay="true">
                           <img class="img-icon-video" src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/icon-play.svg" alt="Reproducir video">
                        </a>
                     <?php endif; ?>
                  </div>
               <?php endif; ?>
            </div>




            <hr class="line-separation-buttons">
            <div class="wrapper-buttons">

               <!-- Botón Visor 3D -->
               <?php
               // Obtiene el ID del post o página actual (tu producto).
               $id_del_producto = get_the_ID();

               // Mostrar el ID que creaste como página
               $id_de_la_pagina_visor = 7384;

               // Nombre del campo ACF donde guardas el nombre del archivo('modelado3d').
               $nombre_campo_acf = 'modelado3d';


               // Si existe un nombre de archivo 3D para este producto, muestra el enlace.
               if (get_field($nombre_campo_acf, $id_del_producto)):

                  // Generamos la URL del visor 3D, pasándole el ID del producto actual.
                  $url_visor = add_query_arg('producto_id', $id_del_producto, get_permalink($id_de_la_pagina_visor));
               ?>
                  <a href="<?php echo esc_url($url_visor); ?>" class="no-preload" target="_blank">
                     <button class="btn-3d"><img class="girar-cubo" src="<?php bloginfo('url'); ?>/wp-content/uploads/2025/08/modelo-3d.svg">
                        <h2>VER MÁQUINA EN 360°</h2>
                     </button>
                  </a>
               <?php endif;
               ?>






               <!-- Boton Ficha Técnica -->
               <?php if (get_field('ficha_tecnica_drive')): ?>
                  <div class="mostrarElemento">
                     <div id="cerrarVentana">
                        <div class="content-close">
                           <div class="line1"></div>
                           <div class="line2"></div>
                        </div>
                     </div>
                     <iframe class="iframe-pdf" src="https://drive.google.com/file/d/<?php the_field('ficha_tecnica_drive') ?>/preview" width="100%" height="100%"></iframe>
                  </div>
                  <button class="btn-ficha" id="BtnLogin"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/pdf.svg">Ver Ficha Técnica</button>
               <?php endif; ?>



               <!-- Botón descargar PDF -->
               <?php if (get_field('ficha_tecnica_ftp')): ?>
                  <a href="<?php bloginfo('template_url'); ?>/<?php the_field('ficha_tecnica_ftp') ?>" download="catalogo.pdf" class="no-preload">
                     <button class="btn-descargar">
                        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/04/download.svg">Descargar PDF
                     </button>
                  </a>
               <?php endif; ?>

            </div>
         </div>


         <div class="content-detalle-txt">
            <!-- Ingresa el logotipo del proveedor -->
            <?php
            $image = get_field('marca_proveedor'); // Variable Advanced Custom Field
            if (!empty($image)): ?>
               <img class="marca_proveedor" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif;
            ?>

            <div class="separation"></div>


            <!-- Título principal detalle -->
            <h1 class="title-principal"><?php the_title(); ?></h1>

            <!-- Ingresa la descripción de la máquina - muestra el parrafo -->
            <?php echo get_field('descripcion_producto'); ?>


            <!-- Botón para abrir el modal -->
            <button id="openModalBtn" class="btn-cotizar">COTIZAR AQUÍ</button>

            <div class="separation"></div>

            <div class="content-info-ventas">
               <h2>INFORMACIÓN DE VENTAS:</h2>
               <h3>Asistencia Telefónica / TAGLERMAQ (+56) 22 478 1100</h3>
            </div>

         </div>
</div>



<!-- MODAL FORMULARIO DE CONTACTO -->
<div id="myModal" class="modal">
   <div class="modal-content">
      <div class="wrapper-contact-form">
         <div class="box-img-form">
            <img src="https://taglertesting.cl/taglermaq2024/wp-content/uploads/2024/05/sat.jpg" alt="">
         </div>
         <div class="box-txt-form">

            <form class="content-formulario" action="https://www.taglermaq.cl/wp-content/themes/taglermaq/enviar_formulario.php" method="post">
               <span class="close">&times;</span>

               <!-- Dropdown -->
               <div class="wrapper-par">
                  <div class="content-dropdown">
                     <div class="blocks">
                        <div class="setting-description">
                           <div class="setting-description-text">
                              <h2>¿Cómo supiste de nosotros</h2>
                           </div>
                        </div>
                        <select class="dropdown" name="segmento">
                           <option class="item"></option>
                           <option class="item">Google</option>
                           <option class="item">LinkedIn</option>
                           <option class="item">Recomendación</option>
                           <option class="item">Eventos Corporativos</option>
                        </select>
                     </div>
                  </div>

                  <!-- <div class="content-dropdown">
						<div class="container">
							<div class="setting-description">
								<div class="setting-description-text">
								<h2>Área</h2>
								</div>
							</div>
							<select class="dropdown" name="area">
								<option class="item">Maquinarias</option>
								<option class="item">Higiene e Inocuidad</option>
								<option class="item">Asistencia Técnica</option>
								<option class="item">Consulta General</option>
							</select>
						</div>
					</div> -->
               </div>


               <!-- Inputs -->
               <div class="blocks-fields">
                  <div class="input-form">
                     <input type="text" name="empresa" required>
                     <label class="lbl-nombre">
                        <span class="text-nomb">Nombre Completo</span>
                     </label>
                  </div>

                  <div class="input-form">
                     <input type="text" name="rut" required>
                     <label class="lbl-nombre">
                        <span class="text-nomb">Rut Empresa</span>
                     </label>
                  </div>
               </div>

               <div class="blocks-fields">
                  <div class="input-form">
                     <input type="text" name="nombre_apellido" required>
                     <label class="lbl-nombre">
                        <span class="text-nomb">Nombre Apellido</span>
                     </label>
                  </div>

                  <div class="input-form">
                     <input type="text" name="email" required>
                     <label class="lbl-nombre">
                        <span class="text-nomb">Correo Corporativo</span>
                     </label>
                  </div>
               </div>

               <div class="blocks-fields">
                  <div class="input-form">
                     <input type="text" name="telefono" required>
                     <label class="lbl-nombre">
                        <span class="text-nomb">Teléfono</span>
                     </label>
                  </div>

                  <div class="input-form">
                     <input type="text" name="direccion" required>
                     <label class="lbl-nombre">
                        <span class="text-nomb">Dirección</span>
                     </label>
                  </div>
               </div>


               <textarea class="text-arera" id="comentarios" name="comentarios" rows="4" cols="50" placeholder="Ingrese un comentario"></textarea>

               <!-- Campo oculto para capturar URL -->
               <input type="hidden" name="url_referencia" id="url_referencia" value="">


               <h5 style="margin: 1em 0;line-height: 1.3">No utilizar este canal para la promoción de servicios, productos o postulaciones laborales. Para estos fines, por favor escríbanos a taglermaq@taglermaq.cl</h5>

               <!-- Llave HTML reCaptcha Google -->
               <div class="g-recaptcha" data-sitekey="6Ld5u3wqAAAAAHZ-I7ouhIXn7vMMzisfuUBBUaR-"></div>
               <input class="btn-enviar" type="submit" value="Enviar">




               <div id="mensaje"></div>

            </form>
         </div>
      </div>

   </div>
</div>



<!-- CARACTERÍSTICAS TÉCNICAS -->
<?php if (get_field('caracteristicas_tecnicas')): ?>
   <div class="wrapper-caracteristicas">
      <div class="content-caracteristicas">
         <h2>CARACTERÍSTICAS</h2>
         <div class="content-lista">
            <ul>
               <li>
                  <?php echo get_field('caracteristicas_tecnicas'); ?>
               </li>
            </ul>
         </div>
      </div>
   </div>
<?php endif; ?>




<!-- SECCIÓN APLICACIONES -->
<?php if (get_field('aplicaciones')): ?>
   <div class="wrapper-aplicaciones">
      <h2>APLICACIONES</h2>
      <div class="content-aplicaciones">
         <?php if (have_rows("aplicaciones")): ?>
            <?php while (have_rows("aplicaciones")): the_row(); ?>
               <div class="content-circle">
                  <div class="overlay-black"></div>
                  <img src="<?php the_sub_field('ingresar_imagen'); ?>" alt="<?php the_sub_field('ingresar_imagen'); ?>">

                  <h3><?php the_sub_field('titulo_aplicacion'); ?></h3>
               </div>
            <?php endwhile; ?>
         <?php endif; ?>
      </div>
   </div>
<?php endif; ?>





<!-- PRODUCTOS RELACIONADOS -->
<?php
         // Obtener el post actual
         $post_id = get_the_ID();
         $post = get_post($post_id);

         // Obtener la categoría del post actual
         $categories = get_the_category();
         $category_ids = array();
         foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
         }

         // Args para WP_Query para recuperar posts asociados a la misma categoría
         $args = array(
            'category__in' => $category_ids, // IDs de las categorías del post actual
            'post_type' => 'post', // Tipo de post (puede ser 'post', 'page', etc.)
            'post__not_in' => array($post_id), // Excluir el post actual de la consulta
            'posts_per_page' => -1, // Mostrar todos los posts asociados a la misma categoría
         );

         // Ejecutar la consulta
         $query = new WP_Query($args);


         // Comprobar si hay posts relacionados
         if ($query->have_posts()) :
?>
   <div class="fondo-relacionado">
      <div class="wrapper-slider-destacado">

         <div class="titulo-relacionados">
            <h2>PRODUCTOS RELACIONADOS</h2>
         </div>

         <div class="splide parent-slider" id="destacados">
            <div class="splide__track">
               <ul class="splide__list">

                  <?php
                  // Comenzar el loop
                  while ($query->have_posts()) :
                     $query->the_post();
                  ?>

                     <li class="splide__slide">
                        <div class="content-box-destacado">
                           <?php
                           // Verifica si la entrada actual tiene una imagen destacada
                           if (has_post_thumbnail()) {
                              // Obtiene la URL de la imagen destacada con tamaño personalizado 'thumbnail', 'medium', 'large'
                              $url_imagen_destacada = get_the_post_thumbnail_url(get_the_ID(), 'large');
                              // Muestra la imagen destacada con un enlace al post
                              echo '<a href="' . get_permalink() . '"><img class="img-destacado" src="' . esc_url($url_imagen_destacada) . '" alt="' . esc_attr(get_the_title()) . '"></a>';
                           }

                           // Mostrar el título del post con un enlace
                           echo '<h4 class="title-destacado"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h4>';
                           ?>
                        </div>
                     </li>
                  <?php endwhile;
                  ?>

               </ul>
            </div>
         </div>
      </div>
   </div>

<?php
            // Restablecer los datos del post
            wp_reset_postdata();
         else :
            // Si no hay posts relacionados
            echo '<p>No se encontraron posts relacionados en la misma categoría.</p>';
         endif;
?>







<?php
      }
   }
?>



<?php get_footer() ?>