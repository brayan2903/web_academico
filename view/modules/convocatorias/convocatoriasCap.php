<script src="public/js/web_convocatorias.js?rev=<?php echo time(); ?>"></script>
<!-- Job Detail Start -->
<input type="text" value="CAP" hidden id="tipo_conv">
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-primary border rounded-pill mb-5">
                <h5 class="text-white text-center p-2 animated slideInLeft mb-0">Convocatorias CAP</h5>
            </div>
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <table id="tabla_convocatorias" class="display compact " style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Convocatoria</th>
                            <th>Fecha de Publicación</th>
                            <th>Bases</th>
                            <th>Evaluación Preliminar Curricular</th>
                            <th>Absolución de Reclamos</th>
                            <th>Evaluaciónn Final Curricular</th>
                            <th>Resultado Final</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
</div>
<!-- Job Detail End -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    listar_convocatorias();

});
</script>