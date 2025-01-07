<script src="../public/js/area.js?rev=<?php echo time(); ?>"></script>
<div class="content__boxed">
    <div class="content__wrap">
        <nav aria-label="breadcrumb" class="pb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Portal Web</li>
                <li class="breadcrumb-item">Area</li>
            </ol>
        </nav>
        <!-- Table with toolbar -->
        <div class="card">
            <div class="card-header ">
                <h5 class="card-title mb-3">PANEL ADMINISTRATIVO DE AREA</h5>
                <div class="row ">

                    <!-- Left toolbar -->
                    <div class="col-md-6 d-flex gap-1 align-items-center">
                        <button type="button" onclick="AbrirRegistro()"
                            class="btn btn-primary hstack gap-2 align-self-center">
                            <i class="demo-psi-add fs-5"></i>
                            <span class="vr"></span>
                            Nuevo Registro
                        </button>

                    </div>
                    <!-- END : Left toolbar -->

                    <!-- Right Toolbar -->

                </div>
            </div>

            <div class="card-body ">
                <div class="table-responsive">
                    <table id="tabla_area" class="display " style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Area</th>
                                <th>Fecha Registro</th>
                                <th>Estatus</th>
                                <th>Accion</th>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE AREA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label for="" class="fw-bolder">Area (*) :</label>
                        <input type="text" class="form-control" id="txt_area">

                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-outline-secondary" onclick="Registrar_Area()">Registrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR DATOS DE AREA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">Area (*) :</label>
                        <input type="text" class="form-control" id="txt_area_editar">
                        <input type="text" id="txt_idarea" hidden>
                    </div>
                    <div class="col-12">
                        <label for="" class="fw-bolder">Estatus (*) :</label>
                        <select name="" id="select_estatus" class="form-select js-example-basic-single">
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INACTIVO</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-outline-secondary" onclick="Modificar_Area()">Modificar</button>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    listar_area();


});


var myModal = document.getElementById('modal_registro');
var myInput = document.getElementById('txt_area');

myModal.addEventListener('shown.bs.modal', function() {
    myInput.focus()
})
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
