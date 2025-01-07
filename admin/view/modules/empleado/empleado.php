<script src="../public/js/empleado.js?rev=<?php echo time(); ?>"></script>

<div class="content__boxed">
    <div class="content__wrap">
        <nav aria-label="breadcrumb" class="pb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Portal Web</li>
                <li class="breadcrumb-item">Empleado</li>
            </ol>
        </nav>
        <!-- Table with toolbar -->
        <div class="card">
            <div class="card-header -4 ">
                <h5 class="card-title mb-3">PANEL ADMINISTRATIVO EMPLEADO</h5>
                <div class="row">

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
                    <table id="tabla_empleado" class="display compact " style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nro doc</th>
                                <th>Empleado</th>
                                <th>Movil</th>
                                <th>Email</th>
                                <th>Direccion</th>
                                <th>Estatus</th>
                                <th style="min-width:90px">Accion</th>
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
                <h5 class="modal-title" id="exampleModalLabel">REGISTRAR DATOS DEL EMPLEADO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <label for="" class="fw-bolder">Nro Documento (*) :</label>
                        <input type="text" class="form-control" id="txt_nro" onkeypress="return soloNumeros(event)"
                            autocomplete="off">
                    </div>
                    <div class="col-lg-8 mb-3">
                        <label for="" class="fw-bolder">Nombres (*) :</label>
                        <input type="text" class="form-control" id="txt_nom" onkeypress="return sololetras(event)"
                            autocomplete="off">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Apellido Paterno (*) :</label>
                        <input type="text" class="form-control" id="txt_apepa" onkeypress="return sololetras(event)"
                            autocomplete="off">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Apellido Materno (*) :</label>
                        <input type="text" class="form-control" id="txt_apema" onkeypress="return sololetras(event)"
                            autocomplete="off">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Fecha Nacimiento (*) :</label>
                        <input type="date" class="form-control" id="txt_fnac">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Nro Celular (*) :</label>
                        <input type="text" class="form-control" id="txt_movil" onkeypress="return soloNumeros(event)"
                            autocomplete="off">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Direccion (*) :</label>
                        <input type="text" class="form-control" id="txt_dire" >
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Email (*) :</label>
                        <input type="text" class="form-control" id="txt_email" >
                    </div>
                    <div class="col-lg-12 d">
                        <label for="" class="fw-bolder">Foto (*) :</label>
                        <img class="mb-3" src="../controller/empleado/foto/default.png" alt="" id="imagen__prev">
                        <input type="file" class="form-control" id="txt_foto" >
                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <label class="text-danger">(*) Indica que los campos son obligatorios</label>
                <div>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-secondary"
                        onclick="Registrar_Empleado()">Registrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR DATOS DEL EMPLEADO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 mb-3">
                        <input type="text" id="txt_idempleado" hidden>
                        <label for="" class="fw-bolder">Nro Documento (*) :</label>
                        <input type="text" class="form-control" id="txt_nro_editar"
                            onkeypress="return soloNumeros(event)">
                    </div>
                    <div class="col-lg-8 mb-3">
                        <label for="" class="fw-bolder">Nombres (*) :</label>
                        <input type="text" class="form-control" id="txt_nom_editar"
                            onkeypress="return sololetras(event)">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Apellido Paterno (*) :</label>
                        <input type="text" class="form-control" id="txt_apepa_editar"
                            onkeypress="return sololetras(event)">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Apellido Materno (*) :</label>
                        <input type="text" class="form-control" id="txt_apema_editar"
                            onkeypress="return sololetras(event)">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Fecha Nacimiento (*) :</label>
                        <input type="date" class="form-control" id="txt_fnac_editar">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Nro Celular (*) :</label>
                        <input type="text" class="form-control" id="txt_movil_editar"
                            onkeypress="return soloNumeros(event)">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Direccion (*) :</label>
                        <input type="text" class="form-control" id="txt_dire_editar">
                    </div>
                    <div class="col-lg-6 mb-3" >
                        <label for="" class="fw-bolder">Email (*) :</label>
                        <input type="text" class="form-control" id="txt_email_editar">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Foto (*) :</label>
                        <input type="file" class="form-control mb-3" id="txt_foto_edit" >
                        <img class="mb-3" src="../controller/empleado/foto/default.png" alt="" id="imagen__prev_edit">
                    </div>
                    <div class="col-lg-6 mb-3">
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
                <button type="button" class="btn btn-outline-secondary"
                    onclick="Modificar_Empleado()">Modificar</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    listar_empleado();
    let img = document.querySelector("#imagen__prev");
    
let input = document.querySelector("#txt_foto");
input.addEventListener("change",()=>{
    img.src = URL.createObjectURL(input.files[0]);
});


let img2 = document.querySelector("#imagen__prev_edit");  
let input2 = document.querySelector("#txt_foto_edit");
input2.addEventListener("change",()=>{
    img2.src = URL.createObjectURL(input2.files[0]);
});

});
$('#modal_editar').on('shown.bs.modal', function(event) {

    $('.js-example-basic-single').select2({
        dropdownParent: '#modal_editar',
        theme: "bootstrap-5",
        width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
            'style',
        placeholder: $(this).data('placeholder'),
        placeholder: 'SELECCIONAR ',

    });
})

var myModal = document.getElementById('modal_registro');
var myInput = document.getElementById('txt_nro');

myModal.addEventListener('shown.bs.modal', function() {
    myInput.focus()

    
});


$('#txt_foto').on('change', function() {
            var ext = $(this).val().split('.').pop();
            if ($(this).val() != '') {
                if (ext == "JPG" || ext == "jpg" || ext == "PNG" || ext == "png") {
                    if ($(this)[0].files[0].size > 8048576) {
                        Swal.fire("El archivo selecionado es demasiado pesado",
                            "<label style='color:#9B0000;'>seleccionar un archivo mas liviano</label>",
                            "warning");
                        //$("#txtformato").val("");
                        //$("#txt_archivo").val("");
                        //$("#lb_archivo").html("Seleccionar Archivo");
                        //return;
                        //$("#btn_subir").prop("disabled",true);
                    } else {
                        //$("#btn_subir").attr("disabled",false);

                    }
                    $("#txtformato").val(ext);
                } else {
                    $("#txt_archivo").val("");
                    Swal.fire("Mensaje de Error", "Extensión no permitida: " + ext, "error");
                }
            }
        });
</script>