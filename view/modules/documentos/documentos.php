<script src="public/js/web_documentos.js?rev=<?php echo time(); ?>"></script>
<!-- Documentos Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-primary border rounded-pill mb-5">
                <h5 class="text-white text-center p-2 animated animated zoomIn mb-0">DOCUMENTOS DE GESTIÓN</h5>
            </div>
            <div class="col-lg-12 animated zoomIn" data-wow-delay="0.1s">
                <table id="tabla_documentos" class="display compact" style="width:100%">
                    <thead>
                        <tr>
                            <th>Ord.</th>
                            <th>Tipo Documento</th>
                            <th>Número</th>
                            <th>Título</th>
                            <th>Fecha de Publicación</th>
                            <th>Documento Principal</th>
                            <th>Documento anexo</th>
                            <th>Publicado por:</th>
                            
                            <th>Estado</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Documentos End -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    listar_documentos();
});
</script>
