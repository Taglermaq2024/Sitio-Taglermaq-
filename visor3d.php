<?php // Template Name: Visor 3D Dinámico 
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Visor 3D</title>
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/visor3d.css?0.0.13">
</head>


<body>

   <div id="preload-overlay">
      <span class="loader"></span>
      <p>Cargando Render...</p>
   </div>

   <?php
   // Revisa si el ID del producto existe en la URL
   if (isset($_GET['producto_id'])) {


      // Obtiene el ID del producto desde la URL
      $producto_id = intval($_GET['producto_id']);

      // Obtiene el nombre del archivo 3D del campo ACF
      $modelo_3d_filename = get_field('modelado3d', $producto_id);

      // Si se encontró el nombre del archivo, construye la URL completa
      if ($modelo_3d_filename) {
         // Concatenamos tu ruta estática con el nombre del archivo del campo ACF
         $modelado3d = 'https://taglermaq.cl/wp-content/themes/taglermaq/3d/' . $modelo_3d_filename;

         // Usa la URL completa en el atributo 'src'
   ?>

         <div class="wrapper-model-viewer">
            <model-viewer
               id="EsperarRender"
               src="<?php echo esc_url($modelado3d); ?>"
               ar
               ar-modes="webxr quick-look"
               camera-controls
               auto-rotate
               tone-mapping="neutral"
               shadow-intensity="1">
            </model-viewer>
         </div>

   <?php

      } else {
         echo '<p style="text-align:center; padding-top: 50px;">No se encontró un modelo 3D para este producto.</p>';
      }
   } else {
      echo '<p style="text-align:center; padding-top: 50px;">El visor 3D requiere un ID de producto para funcionar.</p>';
   }
   ?>

   <!-- Biblioteca <Model-Viewer> -->
   <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.5.0/model-viewer.min.js"></script>

   <!-- Genera un Preload para esperar al render que cargue -->
   <script>
      // Obtener el elemento model-viewer
      const EsperarRender = document.getElementById('EsperarRender');
      // Obtener el precargador
      const preloadOverlay = document.getElementById('preload-overlay');

      // Escuchar el evento 'load' del model-viewer para ocultar el precargador
      EsperarRender.addEventListener('load', () => {
         preloadOverlay.classList.add('hidden');
      });

      // En caso de que haya un error en la carga del modelo, también ocultamos el precargador
      EsperarRender.addEventListener('error', () => {
         preloadOverlay.classList.add('hidden');
      });
   </script>





</body>

</html>