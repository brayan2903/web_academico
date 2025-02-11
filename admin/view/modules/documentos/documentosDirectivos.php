<script src="../public/js/documentos.js?rev=<?php echo time(); ?>"></script>
<input type="text" value="DIRECTIVOS" hidden id="tipo_conv">
<div class="content__boxed">
    <div class="content__wrap">
        <nav aria-label="breadcrumb" class="pb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Portal Web</li>
                <li class="breadcrumb-item">Documentos Directivos</li>
            </ol>
        </nav>
        <!-- Table with toolbar -->
        <div class="card">
            <div class="card-header ">
                <h5 class="card-title mb-3">PANEL ADMINISTRATIVO DE DOCUMENTOS DIRECTIVOS</h5>
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

                </div>
            </div>

            <div class="card-body ">
                <div class="table-responsive">
                    <table id="tabla_documentos" class="display " style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
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
                <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE DOCUMENTOS DIRECTIVOS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Título (*) :</label>
                        <input type="text" class="form-control" id="txt_titulo">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">1. Archivo 1 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_bases">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">2. Archivo 2 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_preliminar_cv">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">3. Archivo 3 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_reclamos">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">4. Archivo 4 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_final_cv">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">5. Archivo 5 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_final">
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
                <h5 class="modal-title" id="exampleModalLabel">EDITAR DATOS DE DOCUMENTO DIRECTIVO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8 mb-3">
                        <label for="" class="fw-bolder">Título (*) :</label>
                        <input type="text" class="form-control" id="txt_titulo_edit">
                        <input type="text" class="form-control" id="txt_id_doc" hidden>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="" class="fw-bolder">Área Procedencia (*) :</label>
                        <input type="text" class="form-control" id="txt_area_edit" readonly>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">1. Archivo 1 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_bases_edit">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">2. Archivo 2 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_preliminar_cv_edit">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">3. Archivo 3 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_reclamos_edit">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">4. Archivo 4 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_final_cv_edit">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">5. Archivo 5 (*) :</label>
                        <input type="file" class="form-control" id="txt_doc_final_edit">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Estado (*) :</label>
                        <select name="" id="select_estatus" class="form-select js-example-basic-single">
                            <option value="ABIERTO">EN PROCESO</option>
                            <option value="FINALIZADO">FINALIZADO</option>
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
        listar_documentos();
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
</script>
