<script src="../public/js/slider.js?rev=<?php echo time(); ?>"></script>

<div class="content__boxed">
    <div class="content__wrap">
        <nav aria-label="breadcrumb" class="pb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Portal Web</li>
                <li class="breadcrumb-item">Slider</li>
            </ol>
        </nav>
        <!-- Table with toolbar -->
        <div class="card">
            <div class="card-header ">
                <h5 class="card-title mb-3">PANEL ADMINISTRATIVO DE SLIDER DE IMAGENES</h5>
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
                    <table id="tabla_slider" class="display " style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Descripcion</th>
                                <th>Imagen</th>
                                <th>Orden</th>
                                <th>Fecha Creacion</th>
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
                <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE IMAGEN PARA SLIDER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Titulo (*) :</label>
                        <input type="text" class="form-control" id="txt_titulo">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Descripción (*) :</label>
                        <textarea id="txt_desc" rows="3" class="form-control" style="resize:none;"></textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class=" d-flex flex-column">
                            <label for="" class="fw-bolder">Subir Vista Previa PNG/JPG 900x300 Pixeles (*) :</label>
                            <img class="mb-3" src="../controller/comunicado/img/default_large.png" alt="" width="200" height="47" id="imagen__prev_cs">
                        </div>

                        <input type='file' class='form-control' id='txt_img_prev'>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Orden de Presentación (*) :</label>
                        <input type="text" class="form-control" id="txt_orden">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-secondary" onclick="Registrar_Slider()">Registrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR IMAGEN PARA SLIDER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Titulo (*) :</label>
                        <input type="text" class="form-control" id="txt_titulo_edit">
                        <input type="text" class="form-control" id="txt_id_edit" hidden>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Descripción (*) :</label>
                        <textarea id="txt_desc_edit" rows="3" class="form-control" style="resize:none;"></textarea>
                    </div>
                    <div class="input-group col-lg-12 mb-3 flex-column ">
                        <label for="" class="fw-bolder">Subir Vista Previa PNG/JPG 960x300 Pixeles (*) :</label><br>
                        <div class="">
                            <img src="" id="txt_img_edit" class="img-fluid" alt="" width="300">
                            <input type="file" class="form-control-file d-none" id="inputFile_edit">
                            <button type="button" class="btn btn-icon" onclick="document.getElementById('inputFile_edit').click();">
                                <i class="fa-solid fa-pencil-alt"></i>
                            </button>
                        </div>

                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Orden de Presentación (*) :</label>
                        <input type="text" class="form-control" id="txt_orden_edit">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="" class="fw-bolder">Estado (*) :</label>
                        <select name="" id="select_estatus" class="form-select js-example-basic-single">
                            <option value="ACTIVO">ACTIVO</option>
                            <option value="INACTIVO">INACTIVO</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-secondary" onclick="Modificar_Slider()">Modificar</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        listar_slider();
        let img = document.querySelector("#imagen__prev_cs");
        let input = document.querySelector("#txt_img_prev");
        input.addEventListener("change", () => {
            img.src = URL.createObjectURL(input.files[0]);
        });

        let img2 = document.querySelector("#txt_img_edit");
        let input2 = document.querySelector("#inputFile_edit");
        input2.addEventListener("change", () => {
            img2.src = URL.createObjectURL(input2.files[0]);
        });


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
    $('#txt_img_prev').on('change', function() {
        var ext = $(this).val().split('.').pop();
        if ($(this).val() != '') {
            if (ext == "png" || ext == "jpg") {
                if ($(this)[0].files[0].size > 8048576) {
                    $("#txt_img_prev").val("");
                    Swal.fire("El archivo selecionado es demasiado pesado",
                        "<label style='color:#9B0000;'>seleccionar un archivo mas liviano</label>",
                        "warning");

                } else {
                    //$("#btn_subir").attr("disabled",false);
                }
                //$("#txtformato").val(ext);
            } else {
                $("#txt_img_prev").val("");
                Swal.fire("Mensaje de Error", "Extensión no permitida: " + ext, "error");
            }
        }
    });
</script>