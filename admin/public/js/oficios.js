var tbl_oficio;
function listar_oficio() {
    tbl_oficio = $("#tabla_oficio").DataTable({
        "ordering": false,
        "bLengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": true,
        "processing": true,
        "ajax": {
            "url": "../controller/oficio/controller_listar_oficio.php",
            type: 'POST'
        },
        "columns": [
            { "defaultContent": "" },
            { "data": "ofi_titulo" },
            { "defaultContent": "<button class='mas btn btn-info btn-sm'><i class='fas fa-eye'></i></button>" },
            { "data": "ofi_feccreacion" },
            {
                "data": "ofi_estado", render: function (data, type, row) {
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
    tbl_oficio.on('draw.td', function () {
        var PageInfo = $("#tabla_oficio").DataTable().page.info();
        tbl_oficio.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}


$('#tabla_oficio').on('click', '.mas', function () {
    let data = tbl_oficio.row($(this).parents('tr')).data();
    if (tbl_oficio.row(this).child.isShown()) {
        data = tbl_oficio.row(this).data();
    }
    $("#modal_mas").modal('show');
    document.getElementById('txt_idcom_mas').value = data.oficio_id;
    document.getElementById('txt_area_mas').value = data.area_nombre;
    document.getElementById('txt_fecha_mas').value = data.ofi_feccreacion;
    document.getElementById('txt_estado_mas').value = data.ofi_estado;
    document.getElementById('txt_titulo_mas').value = data.ofi_titulo;
    document.getElementById('txt_desc_mas').value = data.ofi_descripcion;
    document.getElementById('img_prev_mas').src = "../" + data.ofi_img_prev;
    document.getElementById('pdf_doc_mas').src = "../" + data.ofi_documento;
});

$('#tabla_oficio').on('click', '.editar', function () {
    let data = tbl_oficio.row($(this).parents('tr')).data();
    if (tbl_oficio.row(this).child.isShown()) {
        data = tbl_oficio.row(this).data();
    }
    $("#modal_editar").modal('show');
    document.getElementById('txt_id_edit').value = data.oficio_id;
    document.getElementById('txt_titulo_edit').value = data.ofi_titulo;
    document.getElementById('txt_desc_edit').value = data.ofi_descripcion;
    document.getElementById('select_estatus').value = data.ofi_estado;
    document.getElementById('imagen__prev_e').src = "../" + data.ofi_img_prev;
});

$('#tabla_oficio').on('click', '.eliminar', function () {
    let data = tbl_oficio.row($(this).parents('tr')).data();
    if (tbl_oficio.row(this).child.isShown()) {
        data = tbl_oficio.row(this).data();
    }
    Swal.fire({
        title: '¿Desea Eliminar el Oficio Multiple?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            eliminar_oficio(data.oficio_id);
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

function Registrar_Oficio() {
    let titulo = document.getElementById("txt_titulo").value;
    let descripcion = document.getElementById("txt_desc").value;
    let img = document.getElementById("txt_img_prev").value;
    let documento = document.getElementById("txt_documento").value;
    let idarea = document.getElementById("txtprincipalareaid").value;

    if (titulo.length == 0 || descripcion.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Algunos campos estan vacios", "warning");
    }
    if (documento.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Seleccione un documento PDF", "warning");
    }
    let extension = documento.split('.').pop();
    let nombrearchivo = "";
    let f = new Date();
    if (documento.length > 0) {
        nombrearchivo = "ARCH" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    let extensionImg = img.split('.').pop();
    let nombrearchivoImg = "";
    let fImg = new Date();
    if (img.length > 0) {
        nombrearchivoImg = "IMG" + fImg.getDate() + "" + (fImg.getMonth() + 1) + "" + fImg.getFullYear() + "" + fImg.getHours() + "" + fImg.getMilliseconds() + "." + extensionImg;
    }
    let formData = new FormData();
    let archivoobj = $("#txt_documento")[0].files[0];
    let archivoobjImg = $("#txt_img_prev")[0].files[0];
    formData.append("titulo", titulo);
    formData.append("descripcion", descripcion);
    formData.append("nombrearchivo", nombrearchivo);
    formData.append("nombrearchivoImg", nombrearchivoImg);
    formData.append("archivoobjImg", archivoobjImg);
    formData.append("archivoobj", archivoobj);
    formData.append("idarea", idarea);
    $.ajax({
        "url": "../controller/oficio/controller_registrar_oficio.php",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (resp) {
            if (resp== 1) {
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
                        Swal.fire("Mensaje de Confirmación", "El oficio se registró con éxito", "success");
                        document.getElementById('txt_titulo').value = "";
                        document.getElementById('txt_desc').value = "";
                        document.getElementById('txt_img_prev').value = "";
                        document.getElementById('txt_documento').value = "";
                        tbl_oficio.ajax.reload();
                        $("#modal_registro").modal('hide');
                    }
                });
            } else {
                Swal.fire("Mensaje de Error", "Comuniquese con soporte informatico", "error");
            }
        }
    });
}

function Modificar_Oficio() {
    let idcom = document.getElementById("txt_id_edit").value;
    let titulo = document.getElementById("txt_titulo_edit").value;
    let descripcion = document.getElementById("txt_desc_edit").value;
    let img = document.getElementById("txt_img_prev_edit").value;
    let documento = document.getElementById("txt_documento_edit").value;
    let estado = document.getElementById("select_estatus").value;

    if (titulo.length == 0 || descripcion.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Algunos campos estan vacios", "warning");
    }
    let extension = documento.split('.').pop();
    let nombrearchivo = "";
    let f = new Date();
    if (documento.length > 0) {
        nombrearchivo = "ARCH" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    let extensionImg = img.split('.').pop();
    let nombrearchivoImg = "";
    let fImg = new Date();
    if (img.length > 0) {
        nombrearchivoImg = "IMG" + fImg.getDate() + "" + (fImg.getMonth() + 1) + "" + fImg.getFullYear() + "" + fImg.getHours() + "" + fImg.getMilliseconds() + "." + extensionImg;
    }
    let formData = new FormData();
    let archivoobj = $("#txt_documento_edit")[0].files[0];
    let archivoobjImg = $("#txt_img_prev_edit")[0].files[0];
    formData.append("idcom", idcom);
    formData.append("titulo", titulo);
    formData.append("descripcion", descripcion);
    formData.append("nombrearchivo", nombrearchivo);
    formData.append("nombrearchivoImg", nombrearchivoImg);
    formData.append("archivoobjImg", archivoobjImg);
    formData.append("archivoobj", archivoobj);
    formData.append("estado", estado);

    $.ajax({
        "url": "../controller/oficio/controller_modificar_oficio.php",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (resp) {
            if (resp == 1) {
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
                        tbl_oficio.ajax.reload();
                        document.getElementById("txt_img_prev_edit").value = "";
                        document.getElementById("txt_documento_edit").value = "";
                        $("#modal_editar").modal('hide');
                    }
                });
            } else {
                Swal.fire("Mensaje de Error", "Comuniquese con Soporte Informatico", "error");
            }
        }
    });
}

function eliminar_oficio(id) {
    $.ajax({
        "url": "../controller/oficio/controller_eliminar_oficio.php",
        type: 'POST',
        data: {
            id: id,
        }
    }).done(function (resp) {
        if (resp == 1) {
            Swal.fire("Mensaje de Confirmacion", "Oficio Multiple Eliminado con Exito", "success").then((value) => {
                tbl_oficio.ajax.reload();
            });


        } else if (resp == 2) {
            Swal.fire("Mensaje de Advertencia", "El Oficio Multiple se Encuentra Activo", "warning");
        } else {
            Swal.fire("Mensaje de Error", "Comuniquese con Soporte Informatico", "error");
        }

    });
}