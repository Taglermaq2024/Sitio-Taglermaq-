<?php
/* Template Name: Formulario Sat
  	Template Post Type: post, page */
?>


<!-- Google tag (gtag.js) -->
<script asyncsrc="https://www.googletagmanager.com/gtag/js?id=G-26GK28N6NG"></script>
<script>
   window.dataLayer = window.dataLayer || [];

   function gtag() {
      dataLayer.push(arguments);
   }
   gtag('js', new Date());
   gtag('config', 'G-26GK28N6NG');
</script>



<?php get_header(); ?>


<!-- MODAL FORMULARIO DE CONTACTO -->


<div class="modal-content-sat">

   <div class="wrapper-contact-form">
      <div class="box-img-form">
         <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2024/05/sat.jpg" alt="">
      </div>

      <div class="box-txt-form">

         <form class="content-formulario" action="https://www.taglermaq.cl/wp-content/themes/taglermaq/form-sat/enviar_form_sat.php" method="post">


            <!-- Dropdown -->
            <div class="wrapper-par">
               <div class="content-dropdown">
                  <div class="blocks">
                     <div class="setting-description">
                        <div class="setting-description-text">
                           <h2>¿Cómo supiste de nosotros?</h2>
                        </div>
                     </div>
                     <select class="dropdown" name="segmento_sat">
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
                  <input type="text" name="nombre_apellido" required>
                  <label class="lbl-nombre">
                     <span class="text-nomb">Nombre apellido</span>
                  </label>
               </div>

               <div class="input-form">
                  <input type="text" name="rut" id="input-rut" required>
                  <label class="lbl-nombre">
                     <span class="text-nomb">Rut Empresa</span>
                  </label>
               </div>
            </div>

            <div class="blocks-fields">
               <div class="input-form">
                  <input type="text" name="empresa" required>
                  <label class="lbl-nombre">
                     <span class="text-nomb">Nombre Empresa</span>
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
                  <input type="text" name="solicitud" required>
                  <label class="lbl-nombre">
                     <span class="text-nomb">Indique la máquina cotizada</span>
                  </label>
               </div>
            </div>


            <!-- <textarea class="text-arera" id="comentarios" name="comentarios" rows="4" cols="50" required placeholder="Ingrese un comentario"></textarea> -->


            <!-- Añade un campo oculto -->
            <input type="hidden" name="honeypot" value="">
            <!-- Añade un campo de tiempo -->
            <input type="hidden" name="timestamp" value="<?php echo time(); ?>">

            <h5 style="    margin: 1em 0;
                           line-height: 1.3;
                           background-color: #ffffe1;
                           border: 1px solid #ecec00;
                           color: #989800;
                           padding: .5em;
                           border-radius: 5px;
                           font-weight: 500;">No utilizar este canal para la promoción de servicios, productos o postulaciones laborales. Para estos fines, por favor escríbanos a taglermaq@taglermaq.cl</h5>

            <!-- Llave HTML -->
            <div class="g-recaptcha" data-sitekey="6Ldjm3wqAAAAAIAHiGRvGM0gjld_6BIpTqtR1eor"></div>

            <input class="btn-enviar" type="submit" value="Enviar">
            <div id="mensaje"></div>

         </form>
      </div>
   </div>

</div>












<?php get_footer() ?>