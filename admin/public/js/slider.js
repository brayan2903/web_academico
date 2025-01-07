var tbl_slider;
function listar_slider() {
    tbl_slider = $("#tabla_slider").DataTable({
        "ordering": false,
        "bLengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": true,
        "processing": true,
        "ajax": {
            "url": "../controller/slider/controller_listar_slider.php",
            type: 'POST'
        },
        "columns": [
            { "defaultContent": "" },
            { "data": "slider_titulo" },
            { "data": "slider_descripcion" },
            {
                "data": "slider_imagen", render: function (data, type, row) {
                    if(data==''){
                        return '<img src="../controller/empleado/foto/default.png" class="img-fluid rounded-circle" alt="..." width="40">';
                    }else{
                        return '<img src="../' + data + '" class="img-fluid" alt="..." width="200">';
                    }
                }
            },
            { "data": "slider_orden" },
            { "data": "slider_feccreacion" },
            {
                "data": "slider_estado", render: function (data, type, row) {
                    if (data == 'ACTIVO') {
                        return '<span class="badge bg-success">ACTIVO</span>';
                    } else {
                        return '<span class="badge bg-danger">INACTIVO</span>';
                    }
                }
            },
            { "defaultContent": "<button class='editar btn btn-secondary btn-sm'><i class='fas fa-pencil-alt'></i></button>&nbsp<button class=' eliminar btn btn-danger btn-sm'><i class='fa-solid fa-trash'></i></button>" },
        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_slider.on('draw.td', function () {
        var PageInfo = $("#tabla_slider").DataTable().page.info();
        tbl_slider.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}

$('#tabla_slider').on('click', '.editar', function () {
    let data = tbl_slider.row($(this).parents('tr')).data();
    if (tbl_slider.row(this).child.isShown()) {
        data = tbl_slider.row(this).data();
    }
    $("#modal_editar").modal('show');
    document.getElementById('txt_id_edit').value = data.slider_id;
    document.getElementById('txt_titulo_edit').value = data.slider_titulo;
    document.getElementById('txt_desc_edit').value = data.slider_descripcion;
    document.getElementById('select_estatus').value = data.slider_estado;
    document.getElementById('txt_img_edit').src = "../"+data.slider_imagen;
    document.getElementById('txt_orden_edit').value = data.slider_orden;
});

$('#tabla_slider').on('click', '.eliminar', function () {
    let data = tbl_slider.row($(this).parents('tr')).data();
    if (tbl_slider.row(this).child.isShown()) {
        data = tbl_slider.row(this).data();
    }
    Swal.fire({
        title: '¿Desea Eliminar el Registro Slider?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            eliminar_slider(data.slider_id);
        }
    });
});

function AbrirRegistro() {
    $("#modal_registro").modal({ keyborad: false })
    $("#modal_registro").modal('show');
}
/*function Agregar_Documentos(div) {
    let div_container = document.getElementById(div);
    let total_divs = div_container.getElementsByTagName("div");
    let div_requi = "<div class='input-group mb-3'><input type='file' class='form-control file' id='txt_archivo_"+total_divs.length+"'><button class='btn btn-danger mr-2' onclick='Eliminar_Requisto(this);'><i class='fa-solid fa-trash'></i></button></div>";
    $("#" + div).append(div_requi);

}
function Eliminar_Requisto(Input) {
    Input.parentNode.remove();
}
function Guardar_Requisitos(accion) {
    let documentos = [];
    if (accion == "REGISTRAR") {
        $("#div_documentos input").each(function () {
            documentos.push($(this).val());
        });
    } else if (accion == "EDITAR") {
        $("#div_requisito_editar input").each(function () {
            documentos.push($(this).val());
        });
    } else {
        alert("error");
    }
    let documentosJSON = JSON.stringify(requisitos);
    return documentosJSON;
}*/

function Registrar_Slider() {
    let titulo = document.getElementById("txt_titulo").value;
    let descripcion = document.getElementById("txt_desc").value;
    let img = document.getElementById("txt_img_prev").value;
    let orden = document.getElementById("txt_orden").value;
    let idarea = document.getElementById("txtprincipalareaid").value;

    if (img.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Seleccione una Imagen", "warning");
    }
    let extensionImg = img.split('.').pop();
    let nombrearchivoImg = "";
    let fImg = new Date();
    if (img.length > 0) {
        nombrearchivoImg = "SLIDER" + fImg.getDate() + "" + (fImg.getMonth() + 1) + "" + fImg.getFullYear() + "" + fImg.getHours() + "" + fImg.getMilliseconds() + "." + extensionImg;
    }
    let formData = new FormData();
    let archivoobjImg = $("#txt_img_prev")[0].files[0];
    formData.append("titulo", titulo);
    formData.append("descripcion", descripcion);
    formData.append("nombrearchivoImg", nombrearchivoImg);
    formData.append("archivoobjImg", archivoobjImg);
    formData.append("orden", orden);
    formData.append("idarea", idarea);
    $.ajax({
        "url": "../controller/slider/controller_registrar_slider.php",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (resp) {
            if (resp.length > 0) {
                Swal.fire({
                    title: 'Publicando...',
                    text: 'Subiendo Archivos al servidor',
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        Swal.fire("Mensaje de Confirmación", "Se Agrego al Slider con éxito", "success");
                        document.getElementById('txt_titulo').value = "";
                        document.getElementById('txt_desc').value = "";
                        document.getElementById('txt_img_prev').value = "";
                        document.getElementById('txt_orden').value = "";
                        tbl_slider.ajax.reload();
                        $("#modal_registro").modal('hide');
                    }
                });
            } else {
                Swal.fire("Mensaje de Error", "Comuniquese con soporte informatico", "error");
            }
        }
    });
}

function Modificar_Slider() {
    let id = document.getElementById("txt_id_edit").value;
    let titulo = document.getElementById("txt_titulo_edit").value;
    let descripcion = document.getElementById("txt_desc_edit").value;
    let img = document.getElementById("inputFile_edit").value;
    let orden = document.getElementById("txt_orden_edit").value;
    let estado = document.getElementById("select_estatus").value;

    let extensionImg = img.split('.').pop();
    let nombrearchivoImg = "";
    let fImg = new Date();
    if (img.length > 0) {
        nombrearchivoImg = "SLIDER" + fImg.getDate() + "" + (fImg.getMonth() + 1) + "" + fImg.getFullYear() + "" + fImg.getHours() + "" + fImg.getMilliseconds() + "." + extensionImg;
    }
    let formData = new FormData();
    let archivoobjImg = $("#inputFile_edit")[0].files[0];
    formData.append("id", id);
    formData.append("titulo", titulo);
    formData.append("descripcion", descripcion);
    formData.append("nombrearchivoImg", nombrearchivoImg);
    formData.append("archivoobjImg", archivoobjImg);
    formData.append("orden", orden);
    formData.append("estado", estado);

    $.ajax({
        "url": "../controller/slider/controller_modificar_slider.php",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (resp) {
            if (resp.length > 0) {
                Swal.fire({
                    title: 'Publicando...',
                    text: 'Subiendo Archivos al Servidor',
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        Swal.fire("Mensaje de Confirmación", "El Oficio Multiple se Modifico con éxito", "success");
                        tbl_slider.ajax.reload();
                        document.getElementById("inputFile_edit").value = "";
                        $("#modal_editar").modal('hide');
                    }
                });
            } else {
                Swal.fire("Mensaje de Error", "Comuniquese con Soporte Informatico", "error");
            }
        }
    });
}

function eliminar_slider(id) {
    $.ajax({
        "url": "../controller/slider/controller_eliminar_slider.php",
        type: 'POST',
        data: {
            id: id,
        }
    }).done(function (resp) {
        if (resp == 1) {
            Swal.fire("Mensaje de Confirmacion", "Registro Slider Eliminado con Exito", "success").then((value) => {
                tbl_slider.ajax.reload();
            });


        } else if (resp == 2) {
            Swal.fire("Mensaje de Advertencia", "El Oficio Multiple se Encuentra Activo", "warning");
        } else {
            Swal.fire("Mensaje de Error", "Comuniquese con Soporte Informatico", "error");
        }

    });
}