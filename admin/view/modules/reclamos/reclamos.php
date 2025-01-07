<script src="../public/js/reclamos.js?rev=<?php echo time(); ?>"></script>
<div class="content__boxed">
    <div class="content__wrap">
        <nav aria-label="breadcrumb" class="pb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Portal Web</li>
                <li class="breadcrumb-item">Libro de Reclamaciones</li>
            </ol>
        </nav>
        <!-- Table with toolbar -->
        <div class="card">
            <div class="card-header ">
                <h5 class="card-title mb-3">PANEL ADMINISTRATIVO DE RECLAMACIONES</h5>
                <div class="row ">
                </div>
            </div>

            <div class="card-body ">
                <div class="table-responsive">
                    <table id="tabla_reclamo" class="display " style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>DNI</th>
                                <th>Administrado</th>
                                <th>Tipo de Reclamo</th>
                                <th>Fecha Registro</th>
                                <th>Mas Datos</th>
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
<div class="modal fade" id="modal_mas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lbl_titulo_datos">MAS DATOS DEL RECLAMO </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">

                        <!-- Callout tabs with base -->
                        <div class="tab-base">

                            <!-- Nav tabs -->
                            <ul class="nav nav-callout" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#_dm-coTabsBaseHome" type="button" role="tab"
                                        aria-controls="home" aria-selected="true">Informacion</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#_dm-coTabsBaseProfile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">Datos Remitente</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#_dm-coTabsBaseProfile2" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">Dodumento Principal</button>
                                </li>

                            </ul>

                            <!-- Tabs content -->
                            <div class="tab-content">
                                <div id="_dm-coTabsBaseHome" class="tab-pane fade active show" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="" class="fw-bolder">Fecha Registro del Expediente (*) :</label>
                                            <input type="text" class="form-control" id="txt_fechareg" disabled>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="" class="fw-bolder">Tipo de Incidencia (*) :</label>
                                            <input type="text" class="form-control" id="txt_tipoincidencia" disabled>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="" class="fw-bolder">Fecha del Incidente(*) :</label>
                                            <input type="text" class="form-control" id="txt_fechaincidencia" disabled>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="" class="fw-bolder">Hora del Incidente (*) :</label>
                                            <input type="text" class="form-control" id="txt_horaincidencia" disabled>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="" class="fw-bolder">N° Asunto del tramite (*) :</label>
                                            <textarea id="txt_asunto_incidencia" rows="5" class="form-control" style="resize:none;"
                                                disabled></textarea>
                                        </div>


                                    </div>
                                </div>
                                <div id="_dm-coTabsBaseProfile" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label for="" class="fw-bolder">N° DNI (*) :</label>
                                            <input type="text" class="form-control" id="txt_dni" disabled>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="" class="fw-bolder">Nombre (*) :</label>
                                            <input type="text" class="form-control" id="txt_nom" disabled>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="" class="fw-bolder">Apellido Paterno (*) :</label>
                                            <input type="text" class="form-control" id="txt_apepat" disabled>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="" class="fw-bolder">Apellido Materno (*) :</label>
                                            <input type="text" class="form-control" id="txt_apemat" disabled>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="" class="fw-bolder">Celular (*) :</label>
                                            <input type="text" class="form-control" id="txt_celular" disabled>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="" class="fw-bolder">Email (*) :</label>
                                            <input type="text" class="form-control" id="txt_email" disabled>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="" class="fw-bolder">Direccion (*) :</label>
                                            <input type="text" class="form-control" id="txt_dire" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div id="_dm-coTabsBaseProfile2" class="tab-pane fade" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="row" id="box__reclamo_view">
                                        
                                            
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END : Callout tabs with base -->

                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>



<script>
$(document).ready(function() {
    listar_reclamos();


});


$('#modal_editar').on('shown.bs.modal', function(event) {

    $('.js-example-basic-single').select2({
        dropdownParent: '#modal_editar',
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
            'style',
        placeholder: $(this).data('placeholder'),
    });
})
</script>
