<script src="public/js/web_documento.js?rev=<?php echo time(); ?>"></script>
<!-- Job Detail Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row bg-light" id="box__all_document" style="display:none">
            <div class="col-lg-12 bg-light  mb-1">
                <h5 id="principal_title" class="text-primary text-center p-3 animated slideInLeft mb-0"></h5>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <!--<iframe src="./public/docs/c1.pdf" frameborder="0" width="100%"  height="600px"></iframe>-->
                <div style="text-align: center;" class="p-3">
                    <img id="vista_previa" src="" style="width: 100%; height: 300px;" class=" img-fluid border rounded">
                </div>
            </div>
            <div class="col-lg-8 wow fadeInUp p-3" data-wow-delay="0.4s">
                <div class="row px-3">
                    <h5 class="border-bottom-style pb-2 text-center">DETALLES</h5>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <span class="text-primary fw-bolder">
                                <i class="fa-solid fa-bullhorn me-2"></i>Titulo:
                            </span>
                            <p class="text-justify" id="titulo_com"></p>
                            <span class="text-primary fw-bolder">
                                <i class="fa-solid fa-arrow-right me-2"></i>Descripción:
                            </span>
                            <p class="text-justify" id="descripcion_com"></p>
                            <span class="text-primary fw-bolder">
                                <i class="fa-solid fa-calendar-days me-2"></i><span id="fecha_com"></span> 
                            </span>
                        </div>
                        <a href="" id="document_link" download="comunicado" target="_blank" class="btn btn-primary btn-rounded" >Descargar</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Job Detail End -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script>
    const url = new URL(window.location.href);
    const searchParams = new URLSearchParams(url.search);
    const id = searchParams.get('id');
    $(document).ready(function() {
        ver_documento(id);

    });
</script>