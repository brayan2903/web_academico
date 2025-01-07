<script src="../public/js/modal_comunicado.js?rev=<?php echo time(); ?>"></script>
<div class="content__boxed">
    <div class="content__wrap">
        <nav aria-label="breadcrumb" class="pb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Portal Web</li>
                <li class="breadcrumb-item">Modal Externo Comunicado</li>
            </ol>
        </nav>
        <!-- Table with toolbar -->
        <div class="card">
            <div class="card-header ">
                <h5 class="card-title mb-3">PANEL ADMINISTRATIVO DE MODAL EXTERNO</h5>
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

            <div class="card-body ">
                <div class="table-responsive">
                    <table id="tabla_modal" class="display " style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Comunicado</th>
                                <th>Imagen</th>
                                <th>Fecha Registro</th>
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
                <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE MODAL EXTERNO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Comunicado (*) :</label>
                        <textarea id="asunto_incidencia" rows="4" class="form-control" style="resize:none;"></textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Imagen (*) :</label>
                        <img class="mb-3" src="../controller/empleado/foto/noimage.jpg" alt="" id="imagen__prev_modal">
                        <input type="file" class="form-control" id="txt_img_modal">
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-secondary" onclick="Registrar_Modal()">Registrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR DATOS DE MODAL EXTERNO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Comunicado (*) :</label>
                        <input type="text" id="txt_id_modal" hidden>
                        <textarea id="asunto_incidencia_edit" rows="4" class="form-control" style="resize:none;"></textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Imagen (*) :</label>
                        <img class="mb-3" src="../controller/empleado/foto/noimage.jpg" alt="" id="imagen__prev_modal_edit">
                        <input type="file" class="form-control" id="txt_img_modal_edit">
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-secondary" onclick="Modificar_Modal()">Modificar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        listar_modal();
        let img2 = document.querySelector("#imagen__prev_modal");
        let input2 = document.querySelector("#txt_img_modal");
        input2.addEventListener("change", () => {
            img2.src = URL.createObjectURL(input2.files[0]);
        });
        let img3 = document.querySelector("#imagen__prev_modal_edit");
        let input3 = document.querySelector("#txt_img_modal_edit");
        input3.addEventListener("change", () => {
            img3.src = URL.createObjectURL(input3.files[0]);
        });


    });

    $('#modal_editar').on('shown.bs.modal', function(event) {

        $('.js-example-basic-single').select2({
            dropdownParent: '#modal_editar',
            theme: "bootstrap-5",
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
        });
    })

    $('#txt_img_modal').on('change', function() {
        var ext = $(this).val().split('.').pop();
        if ($(this).val() != '') {
            if (ext == "jpg" || ext == "png" || ext == "jpeg") {
                if ($(this)[0].files[0].size > 8048576) {
                    Swal.fire("El archivo selecionado es demasiado pesado",
                        "<label style='color:#9B0000;'>seleccionar un archivo mas liviano</label>",
                        "warning");
                    document.getElementById("txt_img_modal").value = "";
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