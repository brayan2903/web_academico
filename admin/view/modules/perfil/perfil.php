<script src="../public/js/perfil.js?rev=<?php echo time(); ?>"></script>
<div class="content__boxed">
    <div class="content__wrap">
        <!-- Table with toolbar -->
        <div class="card">

            <div class="card-body">

                <h5 class="card-title">Informacion de Mi Perfil</h5>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="input-group col-lg-12 mb-3 flex-column align-items-center ">
                                <div class="">
                                    <img src="../controller/empleado/foto/default.png" style="width:150px;object-fit:cover;" id="txt_img_edit" class="img-fluid rounded-circle " alt="" width="300">
                                    <input type="file" class="form-control-file d-none" id="inputFile_edit">
                                    <button type="button" class="btn btn-icon" onclick="document.getElementById('inputFile_edit').click();">
                                        <i class="fa-solid fa-pencil-alt"></i>
                                    </button>
                                </div>

                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class="fw-bolder">DNI :</label>
                                <input type="text" class="form-control" id="p_dni">
                                <input type="text" class="form-control" id="p_idemple" hidden>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class="fw-bolder">Nombres :</label>
                                <input type="text" class="form-control" id="p_nombres">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class="fw-bolder">Apellido Paterno :</label>
                                <input type="text" class="form-control" id="p_paterno">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class="fw-bolder">Apellido Materno :</label>
                                <input type="text" class="form-control" id="p_materno">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class="fw-bolder">Celular :</label>
                                <input type="text" class="form-control" id="p_celular">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="" class="fw-bolder">Fecha de Nacimiento :</label>
                                <input type="date" class="form-control" id="p_nac">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="" class="fw-bolder">Correo Electronico :</label>
                                <input type="text" class="form-control" id="p_email">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="" class="fw-bolder">Dirección :</label>
                                <input type="text" class="form-control" id="p_direccion">
                            </div>
                            <div class="col-lg-12 mb-3 text-center">
                                <button type="button" class="btn btn-success" onclick="Editar_Pefil()">Guardar Cambios</button>
                            </div>

                        </div>


                    </div>

                </div>


            </div>
        </div>
        <!-- END : Table with toolbar -->

    </div>
</div>
<script>
    $(document).ready(function() {
       // Traer_Pefil();


        let img2 = document.querySelector("#txt_img_edit");
        let input2 = document.querySelector("#inputFile_edit");
        input2.addEventListener("change", () => {
            img2.src = URL.createObjectURL(input2.files[0]);
        });


    });

    $('#inputFile_edit').on('change', function() {
        var ext = $(this).val().split('.').pop();
        if ($(this).val() != '') {
            if (ext == "png" || ext == "jpg") {
                if ($(this)[0].files[0].size > 8048576) {
                    $("#inputFile_edit").val("");
                    Swal.fire("El archivo selecionado es demasiado pesado",
                        "<label style='color:#9B0000;'>seleccionar un archivo mas liviano</label>",
                        "warning");

                } else {
                    //$("#btn_subir").attr("disabled",false);
                }
                //$("#txtformato").val(ext);
            } else {
                $("#inputFile_edit").val("");
                Swal.fire("Mensaje de Error", "Extensión no permitida: " + ext, "error");
            }
        }
    });
</script>