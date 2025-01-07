<!-- Job Detail Start -->
<script src="public/js/web_oficios.js?rev=<?php echo time(); ?>"></script>
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-primary border rounded-pill mb-5">
                <h5 class="text-white text-center p-2 animated slideInLeft mb-0">Oficios Multiples</h5>
            </div>
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">
                <div class="row gap-3" id="contenet__comunicados">
                </div>
                <div id="paginacion" class="d-flex justify-content-center p-3"></div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="row px-3">
                    <h5 class="border-bottom-style pb-2 text-center">Buscar</h5>
                    <div class="col-lg-12">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg fs-6" id="texto_search" id="texto_search" placeholder="Escribir...">
                            <button type="button" class="btn btn-primary" onclick="busqueda_general()">
                                <i class="fa-solid fa-magnifying-glass p-2 fs-6"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12 py-3" id="search__comunicados">
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Job Detail End -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        mostrar_oficios_web();

    });
</script>