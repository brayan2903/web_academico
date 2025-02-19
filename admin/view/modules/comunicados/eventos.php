<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
    function iniciarEditor() {
        setTimeout(() => {
            if (typeof CKEDITOR !== 'undefined' && document.getElementById('txt_desc')) {
                if (!CKEDITOR.instances['txt_desc']) {
                    CKEDITOR.replace('txt_desc', {
                        height: 300,
                        toolbar: [
                            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'Undo', 'Redo'] },
                            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat'] },
                            { name: 'paragraph', items: ['NumberedList', 'BulletedList', 'Blockquote'] },
                            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar', 'Link', 'Unlink'] },
                            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
                            { name: 'colors', items: ['TextColor', 'BGColor'] },
                            { name: 'tools', items: ['Maximize', 'Source'] }
                        ],
                        extraPlugins: 'image2,uploadimage,colorbutton,font',
                        removePlugins: 'elementspath',
                        resize_enabled: true
                    });

                    console.log("✅ CKEditor inicializado correctamente.");
                }
            }
        }, 500);
    }

    // Esperar a que el DOM cargue y ejecutar la función
    document.addEventListener("DOMContentLoaded", function () {
        iniciarEditor();
    });

    // Asegurar que CKEditor se carga en la modal cuando se abre
    $('#modal_registro').on('shown.bs.modal', function () {
        iniciarEditor();
    });

    $('#modal_editar').on('shown.bs.modal', function () {
        iniciarEditor();
    });

    // PREVENIR QUE DESAPAREZCA DESPUÉS DE 3 SEGUNDOS
    setInterval(() => {
        if (document.getElementById('txt_desc') && !CKEDITOR.instances['txt_desc']) {
            console.warn("⚠️ CKEditor desapareció, reiniciándolo...");
            iniciarEditor();
        }
    }, 2000);

    // Eliminar notificaciones de advertencia
    CKEDITOR.on('instanceReady', function (ev) {
        ev.editor.showNotification = function () { return false; };
    });

    setTimeout(() => {
        document.querySelectorAll('.cke_notification').forEach(el => el.remove());
    }, 1000);
</script>



<script src="../public/js/comunicados.js?rev=<?php echo time(); ?>"></script>

<div class="content__boxed">
    <div class="content__wrap">
        <nav aria-label="breadcrumb" class="pb-2">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">Portal Web</li>
                <li class="breadcrumb-item">Eventos</li>
            </ol>
        </nav>
        <!-- Table with toolbar -->
        <div class="card">
            <div class="card-header ">
                <h5 class="card-title mb-3">PANEL ADMINISTRATIVO DE EVENTOS</h5>
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
                    <table id="tabla_comunicado" class="display " style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Mas Datos</th>
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
                <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE EVENTO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Titulo (*) :</label>
                        <input type="text" class="form-control" id="txt_titulo">
                    </div>


                    <div class="col-lg-12 mb-3">
    <label for="txt_desc" class="fw-bolder">Descripción (*) :</label>
    <textarea id="txt_desc" name="txt_desc" class="form-control"></textarea>
</div>

<script>
  // Convierte el textarea en un editor WYSIWYG
  CKEDITOR.replace('txt_desc', {
      height: 200,
      toolbar: [
          { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'Undo', 'Redo'] },
          { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
          { name: 'paragraph', items: ['NumberedList', 'BulletedList', 'Blockquote'] },
          { name: 'insert', items: ['Image', 'Table', 'HorizontalRule'] },
          { name: 'styles', items: ['Styles', 'Format'] },
          { name: 'tools', items: ['Maximize', 'Source'] }
      ],
      removeDialogTabs: 'image:advanced;link:advanced'
  });

  
</script>



<style>
    .cke_notification {
    display: none !important;
}

</style>

                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-column">
                            <label for="" class="fw-bolder">Subir Vista Previa PNG/JPG (*) :</label>
                            <img class="mb-3" src="../controller/comunicado/img/default_large.png" alt="" id="imagen__prev_c">
                        </div>

                        <input type='file' class='form-control' id='txt_img_prev'>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="" class="fw-bolder">Cargar Documento PDF (*) :</label>
                        <input type="file" class="form-control" id="txt_documento">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="Registrar_Comunicados()">Registrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR EVENTO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Titulo (*) :</label>
                        <input type="text" class="form-control" id="txt_titulo_edit">
                        <input type="text" hidden id="txt_id_edit">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Descripción (*) :</label>
                        <textarea id="txt_desc_edit" rows="3" class="form-control" style="resize:none;"></textarea>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex flex-column">
                            <label for="" class="fw-bolder">Subir Vista Previa PNG/JPG (*) :</label>
                            <img class="mb-3" src="" alt="" id="imagen__prev_e">
                        </div>

                        <input type='file' class='form-control' id='txt_img_prev_edit'>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="" class="fw-bolder">Cargar Documento PDF (*) :</label>
                        <input type="file" class="form-control" id="txt_documento_edit">
                    </div>
                    <div class="col-lg-12 mb-3">
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
                <button type="button" class="btn btn-primary" onclick="Modificar_Comunicado()">Actualizar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal_mas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lbl_titulo_datos">MAS DATOS DEL EVENTO</h5>
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
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#_dm-coTabsBaseHome" type="button" role="tab" aria-controls="home" aria-selected="true">Informacion</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#_dm-coTabsBaseProfile2" type="button" role="tab" aria-controls="profile" aria-selected="false">Dodumento Principal</button>
                                </li>
                            </ul>
                            <!-- Tabs content -->
                            <div class="tab-content">
                                <div id="_dm-coTabsBaseHome" class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="" class="fw-bolder">Area Procedencia (*) :</label>
                                            <input type="text" class="form-control" id="txt_area_mas" readonly>
                                            <input type="text" class="form-control" id="txt_idcom_mas" hidden readonly>
                                        </div>
                                        <div class="col-lg-3 mb-3">
                                            <label for="" class="fw-bolder">Fecha Creación (*) :</label>
                                            <input type="text" class="form-control" id="txt_fecha_mas" readonly>
                                        </div>
                                        <div class="col-lg-3 mb-3">
                                            <label for="" class="fw-bolder">Estado (*) :</label>
                                            <input type="text" class="form-control" id="txt_estado_mas" readonly>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="" class="fw-bolder">Titulo (*) :</label>
                                            <input type="text" class="form-control" id="txt_titulo_mas" readonly>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label for="" class="fw-bolder">Descripción (*) :</label>
                                            <textarea id="txt_desc_mas" rows="3" class="form-control" style="resize:none;" readonly></textarea>
                                        </div>
                                        <div class="col-lg-12 mb-3 d-flex flex-column">
                                            <label for="" class="fw-bolder">Vista Previa (*) :</label>
                                            <img src="" alt="" id="img_prev_mas" style="width: 160px; height: 160px;" class="align-self-center rounded rounded-2 border border-2 border-dark">
                                        </div>
                                    </div>
                                </div>
                                <div id="_dm-coTabsBaseProfile2" class="tab-pane fade" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <iframe src="" width="100%" height="460px" frameborder="0" id="pdf_doc_mas"></iframe>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END : Callout tabs with base -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->



<script>
    $(document).ready(function() {
        listar_comunicado();

        let img = document.querySelector("#imagen__prev_c");
        let input = document.querySelector("#txt_img_prev");
        input.addEventListener("change", () => {
            img.src = URL.createObjectURL(input.files[0]);
        });

        let img2 = document.querySelector("#imagen__prev_e");
        let input2 = document.querySelector("#txt_img_prev_edit");
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
    $('#txt_documento').on('change', function() {
        var ext = $(this).val().split('.').pop();
        if ($(this).val() != '') {
            if (ext == "pdf" || ext == "PDF") {
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
                $("#txt_documento").val("");
                Swal.fire("Mensaje de Error", "Extensión no permitida: " + ext, "error");
            }
        }
    });
</script>