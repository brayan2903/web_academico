var tbl_convocatorias;
function listar_convocatorias() {
    let tipo = document.getElementById("tipo_conv").value;
    tbl_convocatorias = $("#tabla_convocatorias").DataTable({
        "ordering": false,
        "bLengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": true,
        "processing": true,
        "ajax": {
            "url": "../controller/convocatorias/controller_listar_convocatorias.php",
            type: 'POST',
            data:{
                tipo:tipo
            }
        },
        "columns": [
            { "defaultContent": "" },
            { "data": "conv_titulo" },
            { "data": "fechapublicacion" , "className": "text-center"},
            {
                "data": "conv_bases", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '' ) {
                        return '';
                    } else {
                        let filename = row.conv_titulo + '.' + data.split('.').pop();
                        return '<a href="../'+data+'" download="BASES_'+filename+'" target="_blank" class="link-danger fa-2x"><i class="fa-solid fa-file"></i></a>';
                    }
                }
            },
            {
                "data": "conv_preliminar_cv",  "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.conv_titulo + '.' + data.split('.').pop();
                        return '<a href="../'+data+'" download="RESULTADO_CURRICULAR_PRELIMINAR_'+filename+'" target="_blank" class="link-danger fa-2x"><i class="fa-solid fa-file"></i></a>';
                    }
                }
            },
            {
                "data": "conv_reclamos", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.conv_titulo + '.' + data.split('.').pop();
                        return '<a href="../'+data+'" download="ABSOLUCION_RECLAMOS_'+filename+'" target="_blank" class="link-danger fa-2x"><i class="fa-solid fa-file"></i></a>';
                    }
                }
            },
            {
                "data": "conv_final_cv",  "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.conv_titulo + '.' + data.split('.').pop();
                        return '<a href="../'+data+'" download="RESULTADO_CURRICULAR_FINAL_'+filename+'" target="_blank" class="link-danger fa-2x"><i class="fa-solid fa-file"></i></a>';
                    }
                }
            },
            {
                "data": "conv_final", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.conv_titulo + '.' + data.split('.').pop();
                        return '<a href="../'+data+'" download="RESULTADO_FINAL_'+filename+'" target="_blank" class="link-danger fa-2x"><i class="fa-solid fa-file"></i></a>';
                    }
                }
            },
            {
                "data": "conv_estado", render: function (data, type, row) {
                    if (data == 'ABIERTO') {
                        return '<span class="badge bg-success">EN PROCESO</span>';
                    } else {
                        return '<span class="badge bg-danger">FINALIZADO</span>';
                    }
                }
            },
            { "defaultContent": "<button class='editar btn btn-secondary btn-sm'><i class='fas fa-pencil-alt'></i></button>&nbsp<button class=' eliminar btn btn-danger btn-sm'><i class='fa-solid fa-trash'></i></button>" },
        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_convocatorias.on('draw.td', function () {
        var PageInfo = $("#tabla_convocatorias").DataTable().page.info();
        tbl_convocatorias.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}


$('#tabla_convocatorias').on('click', '.editar', function () {
    let data = tbl_convocatorias.row($(this).parents('tr')).data();
    if (tbl_convocatorias.row(this).child.isShown()) {
        data = tbl_convocatorias.row(this).data();
    }
    $("#modal_editar").modal('show');
    document.getElementById('txt_id_conv').value = data.convocatoria_id;
    document.getElementById('txt_titulo_edit').value = data.conv_titulo;
    document.getElementById('txt_area_edit').value = data.area_nombre;
    document.getElementById('select_estatus').value = data.conv_estado;
});

$('#tabla_convocatorias').on('click', '.eliminar', function () {
    let data = tbl_convocatorias.row($(this).parents('tr')).data();
    if (tbl_convocatorias.row(this).child.isShown()) {
        data = tbl_convocatorias.row(this).data();
    }
    Swal.fire({
        title: '¿Desea Eliminar la Convoatoria?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            eliminar_convocatoria(data.convocatoria_id);
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

function Registrar_Convocatoria() {
    let tipo = document.getElementById("tipo_conv").value;
    let titulo = document.getElementById("txt_titulo").value;
    let doc1 = document.getElementById("txt_doc_bases").value;
    let doc2 = document.getElementById("txt_doc_preliminar_cv").value;
    let doc3 = document.getElementById("txt_doc_reclamos").value;
    let doc4 = document.getElementById("txt_doc_final_cv").value;
    let doc5 = document.getElementById("txt_doc_final").value;
    let idarea = document.getElementById("txtprincipalareaid").value;

    if (titulo.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "El Nombre de la Convocatoria esta Vacia", "warning");
    }
    if (doc1.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Obligatorio Subir las Bases", "warning");
    }
    let extension = "PDF";
    let nombrearchivo1 = "";
    let nombrearchivo2 = "";
    let nombrearchivo3 = "";
    let nombrearchivo4 = "";
    let nombrearchivo5 = "";
    let f = new Date();
    if (doc1.length > 0) {
        nombrearchivo1 = "CONV1" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc2.length > 0) {
        nombrearchivo2 = "CONV2" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc3.length > 0) {
        nombrearchivo3 = "CONV3" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc4.length > 0) {
        nombrearchivo4 = "CONV4" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc5.length > 0) {
        nombrearchivo5 = "CONV5" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }

    let formData = new FormData();
    let archivoobj1 = $("#txt_doc_bases")[0].files[0];
    let archivoobj2 = $("#txt_doc_preliminar_cv")[0].files[0];
    let archivoobj3 = $("#txt_doc_reclamos")[0].files[0];
    let archivoobj4 = $("#txt_doc_final_cv")[0].files[0];
    let archivoobj5 = $("#txt_doc_final")[0].files[0];

    formData.append("tipo", tipo);
    formData.append("titulo", titulo);
    formData.append("nombrearchivo1", nombrearchivo1);
    formData.append("nombrearchivo2", nombrearchivo2);
    formData.append("nombrearchivo3", nombrearchivo3);
    formData.append("nombrearchivo4", nombrearchivo4);
    formData.append("nombrearchivo5", nombrearchivo5);
    formData.append("archivoobj1", archivoobj1);
    formData.append("archivoobj2", archivoobj2);
    formData.append("archivoobj3", archivoobj3);
    formData.append("archivoobj4", archivoobj4);
    formData.append("archivoobj5", archivoobj5);
    formData.append("idarea", idarea);
    $.ajax({
        "url": "../controller/convocatorias/controller_registrar_convocatoria.php",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (resp) {
            if (resp == 1) {
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
                        Swal.fire("Mensaje de Confirmación", "la Convocatoria se registró con éxito", "success");
                        document.getElementById('txt_titulo').value = "";
                        document.getElementById('txt_doc_bases').value = "";
                        document.getElementById('txt_doc_preliminar_cv').value = "";
                        document.getElementById('txt_doc_reclamos').value = "";
                        document.getElementById('txt_doc_final_cv').value = "";
                        document.getElementById('txt_doc_final').value = "";
                        tbl_convocatorias.ajax.reload();
                        $("#modal_registro").modal('hide');
                    }
                });
            } else {
                Swal.fire("Mensaje de Error", "Comuniquese con soporte informatico", "error");
            }
        }
    });
}

function Modificar_Convocatoria() {
    let id = document.getElementById("txt_id_conv").value;
    let titulo = document.getElementById("txt_titulo_edit").value;
    let doc1 = document.getElementById("txt_doc_bases_edit").value;
    let doc2 = document.getElementById("txt_doc_preliminar_cv_edit").value;
    let doc3 = document.getElementById("txt_doc_reclamos_edit").value;
    let doc4 = document.getElementById("txt_doc_final_cv_edit").value;
    let doc5 = document.getElementById("txt_doc_final_edit").value;
    let estado = document.getElementById("select_estatus").value;

    if (titulo.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "El Nombre de la Convocatoria esta Vacia", "warning");
    }

    let extension = "PDF";
    let nombrearchivo1 = "";
    let nombrearchivo2 = "";
    let nombrearchivo3 = "";
    let nombrearchivo4 = "";
    let nombrearchivo5 = "";
    let f = new Date();
    if (doc1.length > 0) {
        nombrearchivo1 = "CONV1" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc2.length > 0) {
        nombrearchivo2 = "CONV2" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc3.length > 0) {
        nombrearchivo3 = "CONV3" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc4.length > 0) {
        nombrearchivo4 = "CONV4" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc5.length > 0) {
        nombrearchivo5 = "CONV5" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }

    let formData = new FormData();
    let archivoobj1 = $("#txt_doc_bases_edit")[0].files[0];
    let archivoobj2 = $("#txt_doc_preliminar_cv_edit")[0].files[0];
    let archivoobj3 = $("#txt_doc_reclamos_edit")[0].files[0];
    let archivoobj4 = $("#txt_doc_final_cv_edit")[0].files[0];
    let archivoobj5 = $("#txt_doc_final_edit")[0].files[0];

    formData.append("id", id);
    formData.append("titulo", titulo);
    formData.append("nombrearchivo1", nombrearchivo1);
    formData.append("nombrearchivo2", nombrearchivo2);
    formData.append("nombrearchivo3", nombrearchivo3);
    formData.append("nombrearchivo4", nombrearchivo4);
    formData.append("nombrearchivo5", nombrearchivo5);
    formData.append("archivoobj1", archivoobj1);
    formData.append("archivoobj2", archivoobj2);
    formData.append("archivoobj3", archivoobj3);
    formData.append("archivoobj4", archivoobj4);
    formData.append("archivoobj5", archivoobj5);
    formData.append("estado", estado);

    $.ajax({
        "url": "../controller/convocatorias/controller_modificar_convocatoria.php",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function (resp) {
            if (resp ==1) {
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
                        Swal.fire("Mensaje de Confirmación", "La Convocatoria se Modifico con éxito", "success");
                        tbl_convocatorias.ajax.reload();
                        document.getElementById("txt_doc_bases_edit").value = "";
                        document.getElementById("txt_doc_preliminar_cv_edit").value = "";
                        document.getElementById("txt_doc_reclamos_edit").value = "";
                        document.getElementById("txt_doc_final_cv_edit").value = "";
                        document.getElementById("txt_doc_final_edit").value = "";
                        
                        $("#modal_editar").modal('hide');
                    }
                });
            } else {
                Swal.fire("Mensaje de Error", "Comuniquese con Soporte Informatico", "error");
            }
        }
    });
}

function eliminar_convocatoria(id) {
    $.ajax({
        "url": "../controller/convocatorias/controller_eliminar_convocatoria.php",
        type: 'POST',
        data: {
            id: id,
        }
    }).done(function (resp) {
        if (resp == 1) {
            Swal.fire("Mensaje de Confirmacion", "Convocatoria Eliminada con Exito", "success").then((value) => {
                tbl_convocatorias.ajax.reload();
            });


        } else if (resp == 2) {
            Swal.fire("Mensaje de Advertencia", "La convocatoria se Encuentra En Proceso", "warning");
        } else {
            Swal.fire("Mensaje de Error", "Comuniquese con Soporte Informatico", "error");
        }

    });
}