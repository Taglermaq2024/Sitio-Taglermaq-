// Codigo AJAX para carga de máquinas
jQuery(document).ready(function ($) {
  var button = $("#load-more-videos"); // Si usas botón, sino, no es crítico aquí
  var container = $(".grid-box-videos");
  var loadingSpinner = $("#loading-spinner"); // Selecciona tu spinner

  if (typeof miSitioAjax === "undefined" || !container.length) {
    return;
  }

  var currentPage = miSitioAjax.current_page;
  var maxPages = miSitioAjax.max_pages;
  var postsPerPage = miSitioAjax.posts_per_page;
  var currentFilter = miSitioAjax.current_filter;
  var initialQueryVars = miSitioAjax.query_vars;

  // Lógica para el botón (si lo estás usando)
  if (button.length) {
    button.on("click", function () {
      currentPage++;
      button.text("Cargando...").attr("disabled", true);
      loadingSpinner.show(); // Mostrar el spinner

      // Realizar la llamada AJAX
      $.ajax({
        url: miSitioAjax.ajaxurl,
        type: "POST",
        data: {
          action: "mi_sitio_load_more_videos",
          paged: currentPage,
          posts_per_page: postsPerPage,
          current_filter: currentFilter,
          query_vars: initialQueryVars,
        },
        success: function (response) {
          if (response) {
            container.append(response);
            miSitioAjax.current_page = currentPage;

            if (currentPage >= maxPages) {
              button.hide();
            } else {
              button.text("Cargar Más Videos").attr("disabled", false);
            }
          } else {
            button.hide();
          }
          loadingSpinner.hide(); // Ocultar el spinner
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.error("Error AJAX:", textStatus, errorThrown);
          button.text("Error al cargar").attr("disabled", false);
          loadingSpinner.hide(); // Ocultar el spinner en caso de error
        },
      });
    });
  }

  // Lógica para el scroll infinito (si la estás usando)
  var isLoading = false;
  $(window).scroll(function () {
    var scrollTriggerOffset = 1000; // Tu umbral de carga

    if (
      $(window).scrollTop() + $(window).height() >=
        $(document).height() - scrollTriggerOffset &&
      !isLoading
    ) {
      if (currentPage < maxPages) {
        isLoading = true;
        currentPage++;

        loadingSpinner.show(); // Mostrar el spinner

        $.ajax({
          url: miSitioAjax.ajaxurl,
          type: "POST",
          data: {
            action: "mi_sitio_load_more_videos",
            paged: currentPage,
            posts_per_page: postsPerPage,
            current_filter: currentFilter,
            query_vars: initialQueryVars,
          },
          success: function (response) {
            if (response) {
              container.append(response);
              miSitioAjax.current_page = currentPage;

              if (currentPage >= maxPages) {
                if (button.length) {
                  button.hide();
                }
              }
            } else {
              if (button.length) {
                button.hide();
              }
            }
            isLoading = false;
            loadingSpinner.hide(); // Ocultar el spinner
          },
          error: function (jqXHR, textStatus, errorThrown) {
            console.error("Error AJAX:", textStatus, errorThrown);
            isLoading = false;
            loadingSpinner.hide(); // Ocultar el spinner en caso de error
          },
        });
      } else {
        if (button.length) {
          button.hide();
        }
        loadingSpinner.hide(); // Ocultar el spinner si ya no hay más páginas
      }
    }
  });
});
