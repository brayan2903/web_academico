<script src="public/js/web_reclamos.js?rev=<?php echo time(); ?>"></script>
<!-- Job Detail Start -->
<input type="text" value="CAS" hidden id="tipo_conv">
<div class="container-xxl py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-primary border rounded-pill mb-5">
                <h5 class="text-white text-center p-2 animated slideInLeft mb-0">Libro de Reclamaciones Virtual</h5>
            </div>
            <div class="col-lg-12">
                <div class="row wow fadeIn" data-wow-delay="0.4s">
                    <h5 class="bg-danger text-white py-2">1. Informacion Personal</h5>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="mb-2"><b>Tipo de Documento (*)</b></label>
                        <select class="form-select" id="tipo_documento">
                            <option selected>Seleccionar</option>
                            <option value="DNI">DNI</option>
                            <option value="Carnet de Extranjeria">Carnet de Extranjeria</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                    </div>
                    <div class="col-lg-8 mb-3">
                        <label for="" class="mb-2"><b>Numero de Documento (*)</b></label>
                        <input type="text" class="form-control" id="nro_documento" onkeypress="return soloNumeros(event)">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="mb-2"><b>Nombres (*)</b></label>
                        <input type="text" class="form-control" id="nombres" onkeypress="return sololetras(event)">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="mb-2"><b>Apellido Paterno (*)</b></label>
                        <input type="text" class="form-control" id="apepat" onkeypress="return sololetras(event)">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="mb-2"><b>Apellido Materno (*)</b></label>
                        <input type="text" class="form-control" id="apemat" onkeypress="return sololetras(event)">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="mb-2"><b>Dirección (*)</b></label>
                        <input type="text" class="form-control" id="direccion">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="mb-2"><b>Numero de Telefono (*)</b></label>
                        <input type="text" class="form-control" id="telefono" onkeypress="return soloNumeros(event)">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="mb-2"><b>Correo Electronico (*)</b></label>
                        <input type="text" class="form-control" id="email">
                    </div>

                </div>
                <div class="row wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="bg-danger text-white py-2">2. Succeso de la Indicencia</h5>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="mb-2"><b>Tipo de Incidencia (*)</b></label>
                        <select class="form-select" id="tipo_incidencia">
                            <option selected>Seleccionar</option>
                            <option value="QUEJA">QUEJA</option>
                            <option value="RECLAMO">RECLAMO</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="mb-2"><b>¿Cuando Ocurrió? (*)</b></label>
                        <input type="date" class="form-control" id="fecha_incidencia">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="mb-2"><b>¿A que Hora Ocurrió? (*)</b></label>
                        <input type="time" class="form-control" id="hora_incidencia">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="mb-2"><b>Descripcion de la Incidencia (*)</b></label>
                        <textarea id="asunto_incidencia" rows="4" class="form-control" style="resize:none;"></textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="mb-2"><b>Adjuntar Archivo (Opcional)</b></label><br>
                        <label for="">Puedes subir un máximo de 20 MB en fotos, videos y/o textos que ayuden a evidenciar tu alerta.</label>
                        <input type="file" class="form-control" id="archivo_incidencia">
                        <label class="dato">Archivos permitidos: .jpg, .jpeg, .png, o .pdf</label>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="form-check form-check-inline">
                            <input id="_dm-inlineCheckboxes" class="form-check-input" type="checkbox" autocomplete="off" value="option1" onclick="validar_informacion()">
                            <label for="_dm-inlineCheckboxes" class="form-check-label fw-bolder" style="text-align:justify;">El presente tiene caracter de
                                Declaración
                                jurada, en
                                caso de producirse fraude o falsedad, me someto a las sanciones que
                                contempla la
                                LEY.</label>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3 d-flex justify-content-center">
                        <button class="btn btn-success px-5 btn-rounded disabled" onclick="Register_Reclamo()" id="btn_registro">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Job Detail End -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {


    });
    validar_informacion();
    $('#archivo_incidencia').on('change', function() {
            var ext = $(this).val().split('.').pop();
            if ($(this).val() != '') {
                if (ext == "pdf" || ext == "jpg" || ext == "png" || ext == "jpeg") {
                    if ($(this)[0].files[0].size > 8048576) {
                        Swal.fire("El archivo selecionado es demasiado pesado",
                            "<label style='color:#9B0000;'>seleccionar un archivo mas liviano</label>",
                            "warning");
                            document.getElementById("archivo_incidencia").value="";
                        //$("#txtformato").val("");
                        //$("#txt_archivo").val("");
                        //$("#lb_archivo").html("Seleccionar Archivo");
                        //return;
                        //$("#btn_subir").prop("disabled",true);
                    } else {
                        //$("#btn_subir").attr("disabled",false);

                    }

                } else {
                    Swal.fire("Mensaje de Error", "Extensión no permitida: " + ext, "error");
                }
            }
        });
</script>