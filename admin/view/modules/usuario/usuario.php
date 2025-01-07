<script src="../public/js/usuario.js?rev=<?php echo time(); ?>"></script>
<div class="content__boxed">
    <div class="content__wrap">
        <nav aria-label="breadcrumb" class="pb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Portal Web</li>
                <li class="breadcrumb-item">Usuarios</li>
            </ol>
        </nav>

        <!-- Table with toolbar -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-3">PANEL ADMINISTRATIVO DE USUARIO</h5>
                <div class="row">

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

            <div class="card-body ">
                <table id="tabla_usuario" class="display " style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Area</th>
                            <th>Rol</th>
                            <th>Empleado</th>
                            <th>Estatus</th>
                            <th style="min-width:149px">Accion</th>
                        </tr>
                    </thead>

                </table>

            </div>
        </div>
        <!-- END : Table with toolbar -->

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE USUARIO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Usuario (*) :</label>
                        <input type="text" class="form-control" id="txt_usu">

                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Contraseña (*) :</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="txt_con">
                            <button type="button" class="btn btn-light" onclick="mostrarPassword('txt_con')">
                                <i class="fa-solid fa-eye icon"></i>
                            </button>
                        </div>

                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Empleado (*) :</label>
                        <select class="js-example-basic-single" id="select_empleado" style="width:100%">
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Area (*) :</label>
                        <select class="js-example-basic-single" id="select_area" style="width:100%">
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Rol (*) :</label>
                        <select class="js-example-basic-single" id="select_rol" style="width:100%">
                            <option value="Publicador">Publicador</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-outline-secondary" onclick="Registrar_Usuario()">Registrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR DATOS DE USUARIO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Usuario (*) :</label>
                        <input type="text" class="form-control" id="txt_usu_editar" disabled>
                        <input type="text" id="txt_idusuario" hidden>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Empleado (*) :</label>
                        <select class="js-example-basic-single" id="select_empleado_editar" style="width:100%">
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Area (*) :</label>
                        <select class="js-example-basic-single" id="select_area_editar" style="width:100%">
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Rol (*) :</label>
                        <select class="js-example-basic-single" id="select_rol_editar" style="width:100%">
                            <option value="Publicador">Publicador</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-outline-secondary" onclick="Modificar_Usuario()">Modificar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_contra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR CONTRASEÑA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <label for="">Contraseña</label>
                        <div class="input-group">
                            <input type="password" class="form-control viewcontra" id="txt_contra_nueva">
                            <button type="button" class="btn btn-light" onclick="mostrarPassword('txt_contra_nueva')">
                                <i class="fa-solid fa-eye icon"></i>
                            </button>
                        </div>
                        <input type="text" id="txt_idusuario_contra" hidden>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-outline-secondary" onclick="Modificar_Contraseña()">Modificar</button>
            </div>
        </div>
    </div>
</div>


<script>
    function mostrarPassword(inputId) {
        var cambio = document.getElementById(inputId);
        if (cambio.type == "password") {
            cambio.type = "text";
            $('.icon').removeClass('fa-solid fa-eye-slash').addClass('fa-solid fa-eye');
        } else {
            cambio.type = "password";
            $('.icon').removeClass('fa-solid fa-eye').addClass('fa-solid fa-eye-slash');
        }
    }
    $(document).ready(function() {
        listar_usuario();
        // $('.js-example-basic-single').select2({dropdownParent: $('#modal_registro')});
        Cargar_Select_Empleado();
        Cargar_Select_Area();

    });
    $('#modal_registro').on('shown.bs.modal', function(event) {

        $('.js-example-basic-single').select2({
            dropdownParent: '#modal_registro',
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            placeholder: 'SELECCIONAR ',
        });

    })
    $('#modal_editar').on('shown.bs.modal', function(event) {

        $('.js-example-basic-single').select2({
            dropdownParent: '#modal_editar',
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
    })
</script>