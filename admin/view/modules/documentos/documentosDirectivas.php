<script src="../public/js/documentos.js?rev=<?php echo time(); ?>"></script>
<input type="text" value="DIRECTIVAS" hidden id="tipo_doc">
<div class="content__boxed">
    <div class="content__wrap">
        <nav aria-label="breadcrumb" class="pb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Portal Web</li>
                <li class="breadcrumb-item">Documentos DIRECTIVAS</li>
            </ol>
        </nav>
        <!-- Table with toolbar -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-3">PANEL ADMINISTRATIVO DE DOCUMENTOS DIRECTIVAS</h5>
                <div class="row ">

                    <!-- Left toolbar -->
                    <div class="col-md-6 d-flex gap-1 align-items-center">
                        <button type="button" onclick="AbrirRegistro()" class="btn btn-primary hstack gap-2 align-self-center">
                            <i class="demo-psi-add fs-5"></i>
                            <span class="vr"></span>
                            Nuevo Registro
                        </button>
                    </div>
                    <!-- END : Left toolbar -->

                    <!-- Right Toolbar -->
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="tabla_documentos" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Número de Documento</th>
                                <th>Documento</th>
                                <th>Fecha de Publicación</th>
                                <th>Archivo 1</th>
                                <th>Archivo 2</th>
                                <th>Archivo 3</th>
                                <th>Archivo 4</th>
                                <th>Archivo 5</th>
                                <th>Estado</th>
                                <th style="min-width:90px" class="text-center">Acción</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- END : Table with toolbar -->

    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE DOCUMENTO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Título (*) :</label>
                        <input type="text" class="form-control" id="txt_titulo">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="txt_numdoc" class="fw-bolder">Número de Documento (*) :</label>
                        <input type="text" class="form-control" id="txt_numdoc" placeholder="Ingrese el número de documento">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">1. Archivo 1 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_archivo1">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">2. Archivo 2 :</label>
                        <input type="file" class="form-control" id="txt_doc_archivo2">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">3. Archivo 3 :</label>
                        <input type="file" class="form-control" id="txt_doc_archivo3">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">4. Archivo 4 :</label>
                        <input type="file" class="form-control" id="txt_doc_archivo4">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">5. Archivo 5 :</label>
                        <input type="file" class="form-control" id="txt_doc_archivo5">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-secondary" onclick="Registrar_Documento()">Publicar Documento</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR DATOS DEL DOCUMENTO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <label for="" class="fw-bolder">Título (*)</label>
                        <input type="text" class="form-control" id="txt_titulo_edit" readonly>
                        <input type="text" class="form-control" id="txt_id_doc" hidden>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="fw-bolder">Área Procedencia (*) :</label>
                        <input type="text" class="form-control" id="txt_area_edit" readonly>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Estado (*) :</label>
                        <select name="" id="select_estatus" class="form-select js-example-basic-single">
                            <option value="ABIERTO">VIGENTE</option>
                            <option value="FINALIZADO">NO VIGENTE</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-secondary" onclick="Modificar_Documento()">Actualizar Documento</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<script>
    $(document).ready(function() {
        listar_documentos(); // Cambié la función para listar documentos
    });

    var myModal = document.getElementById('modal_registro');
    var myInput = document.getElementById('txt_titulo');

    myModal.addEventListener('shown.bs.modal', function() {
        myInput.focus();
    });

    $('#modal_editar').on('shown.bs.modal', function(event) {
        $('.js-example-basic-single').select2({
            dropdownParent: '#modal_editar',
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
    });

    $('#txt_doc_archivo1').on('change', function() { 
        var ext = $(this).val().split('.').pop();
        if ($(this).val() != '') {
            if (ext == "pdf" || ext == "PDF") {
                if ($(this)[0].files[0].size > 8048576) {
                    $("#txt_doc_archivo1").val("");
                    Swal.fire("El archivo seleccionado es demasiado pesado",
                        "<label style='color:#9B0000;'>Seleccione un archivo más liviano</label>",
                        "warning");
                }
            } else {
                $("#txt_doc_archivo1").val("");
                Swal.fire("Mensaje de Error", "Extensión no permitida: " + ext, "error");
            }
        }
    });

    $('#txt_doc_archivo2').on('change', function() { 
        var ext = $(this).val().split('.').pop();
        if ($(this).val() != '') {
            if (ext == "pdf" || ext == "PDF") {
                if ($(this)[0].files[0].size > 8048576) {
                    $("#txt_doc_archivo2").val("");
                    Swal.fire("El archivo seleccionado es demasiado pesado",
                        "<label style='color:#9B0000;'>Seleccione un archivo más liviano</label>",
                        "warning");
                }
            } else {
                $("#txt_doc_archivo2").val("");
                Swal.fire("Mensaje de Error", "Extensión no permitida: " + ext, "error");
            }
        }
    });

    $('#txt_doc_archivo3').on('change', function() { 
        var ext = $(this).val().split('.').pop();
        if ($(this).val() != '') {
            if (ext == "pdf" || ext == "PDF") {
                if ($(this)[0].files[0].size > 8048576) {
                    $("#txt_doc_archivo3").val("");
                    Swal.fire("El archivo seleccionado es demasiado pesado",
                        "<label style='color:#9B0000;'>Seleccione un archivo más liviano</label>",
                        "warning");
                }
            } else {
                $("#txt_doc_archivo3").val("");
                Swal.fire("Mensaje de Error", "Extensión no permitida: " + ext, "error");
            }
        }
    });

    $('#txt_doc_archivo4').on('change', function() { 
        var ext = $(this).val().split('.').pop();
        if ($(this).val() != '') {
            if (ext == "pdf" || ext == "PDF") {
                if ($(this)[0].files[0].size > 8048576) {
                    $("#txt_doc_archivo4").val("");
                    Swal.fire("El archivo seleccionado es demasiado pesado",
                        "<label style='color:#9B0000;'>Seleccione un archivo más liviano</label>",
                        "warning");
                }
            } else {
                $("#txt_doc_archivo4").val("");
                Swal.fire("Mensaje de Error", "Extensión no permitida: " + ext, "error");
            }
        }
    });

    $('#txt_doc_archivo5').on('change', function() { 
        var ext = $(this).val().split('.').pop();
        if ($(this).val() != '') {
            if (ext == "pdf" || ext == "PDF") {
                if ($(this)[0].files[0].size > 8048576) {
                    $("#txt_doc_archivo5").val("");
                    Swal.fire("El archivo seleccionado es demasiado pesado",
                        "<label style='color:#9B0000;'>Seleccione un archivo más liviano</label>",
                        "warning");
                }
            } else {
                $("#txt_doc_archivo5").val("");
                Swal.fire("Mensaje de Error", "Extensión no permitida: " + ext, "error");
            }
        }
    });
</script>
