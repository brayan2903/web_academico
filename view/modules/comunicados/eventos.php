<!-- Job Detail Start -->
<script src="public/js/web_comunicados.js?rev=<?php echo time(); ?>"></script>

<div class="container-xxl py-5 bg-gradient">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-primary border rounded-pill mb-5">
                <h3 class="text-white text-center p-3 animated slideInLeft mb-0">📢 Eventos</h3>
            </div>

            <!-- Sección de comunicados -->
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">
                <div class="row" id="contenet__comunicados"></div>
                <div id="paginacion" class="d-flex justify-content-center p-3"></div>
            </div>

            <!-- Sección de búsqueda -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="search-box p-4 rounded shadow-lg">
                    <h4 class="border-bottom pb-2 text-center text-primary fw-bold">🔍 Buscar Comunicados</h4>
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg fs-6" id="texto_search" placeholder="Escribir...">
                        <button type="button" class="btn btn-primary" onclick="busqueda_general()">
                            <i class="fa-solid fa-magnifying-glass p-2 fs-6"></i>
                        </button>
                    </div>
                    <div class="col-lg-12 py-3" id="search__comunicados"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job Detail End -->

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        mostrar_comunicados_web();
    });
</script>
