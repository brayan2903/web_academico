var tbl_documentos;

function listar_documentos() {
    let tipo = document.getElementById("tipo_doc").value; // Adaptamos el ID al selector correspondiente
    tbl_documentos = $("#tabla_documentos").DataTable({
        "ordering": false,
        "bLengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": true,
        "processing": true,
        "ajax": {
            "url": "../controller/documentos/controller_listar_documentos.php", // Adaptamos al controlador correspondiente
            type: 'POST',
            data: {
                tipo: tipo
            }
        },
        "columns": [
            { "defaultContent": "" },
            { "data": "num_doc", "className": "text-center" },
            { "data": "doc_titulo" },
            { "data": "fechapublicacion", "className": "text-center" },
            {
                "data": "doc_archivo1", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.doc_titulo + '.' + data.split('.').pop();
                        return '<a href="../controller/documentos/' + data + '" download="DOCUMENTO_' + filename + '" target="_blank" class="link-danger fa-2x"><i class="fa-solid fa-file"></i></a>';
                    }
                }
            },
            {
                "data": "doc_archivo2", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.doc_titulo + '.' + data.split('.').pop();
                        return '<a href="../controller/documentos/' + data + '" download="DOCUMENTO_' + filename + '" target="_blank" class="link-danger fa-2x"><i class="fa-solid fa-file"></i></a>';
                    }
                }
            },
            {
                "data": "doc_archivo3", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.doc_titulo + '.' + data.split('.').pop();
                        return '<a href="../controller/documentos/' + data + '" download="DOCUMENTO_' + filename + '" target="_blank" class="link-danger fa-2x"><i class="fa-solid fa-file"></i></a>';
                    }
                }
            },
            {
                "data": "doc_archivo4", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.doc_titulo + '.' + data.split('.').pop();
                        return '<a href="../controller/documentos/' + data + '" download="DOCUMENTO_' + filename + '" target="_blank" class="link-danger fa-2x"><i class="fa-solid fa-file"></i></a>';
                    }
                }
            },
            {
                "data": "doc_archivo5", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.doc_titulo + '.' + data.split('.').pop();
                        return '<a href="../controller/documentos/' + data + '" download="DOCUMENTO_' + filename + '" target="_blank" class="link-danger fa-2x"><i class="fa-solid fa-file"></i></a>';
                    }
                }
            },
            {
                "data": "doc_estado", render: function (data, type, row) {
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

    tbl_documentos.on('draw.td', function () {
        var PageInfo = $("#tabla_documentos").DataTable().page.info();
        tbl_documentos.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}
// Acción para el botón "Editar"
$('#tabla_documentos').on('click', '.editar', function () {
    let data = tbl_documentos.row($(this).parents('tr')).data();
    if (tbl_documentos.row(this).child.isShown()) {
        data = tbl_documentos.row(this).data();
    }
    $("#modal_editar").modal('show');
    document.getElementById('txt_id_doc').value = data.doc_id; // ID del documento
    document.getElementById('txt_titulo_edit').value = data.doc_titulo; // Título del documento
    document.getElementById('txt_area_edit').value = data.area_nombre; // Nombre del área
    document.getElementById('select_estatus').value = data.doc_estado; // Estado del documento
});

// Acción para el botón "Eliminar"
$('#tabla_documentos').on('click', '.eliminar', function () {
    let data = tbl_documentos.row($(this).parents('tr')).data();
    if (tbl_documentos.row(this).child.isShown()) {
        data = tbl_documentos.row(this).data();
    }
    Swal.fire({
        title: '¿Desea eliminar el documento?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            eliminar_documento(data.doc_id); // Llama a la función para eliminar documento
        }
    });
});

// Función para abrir el modal de registro
function AbrirRegistro() {
    $("#modal_registro").modal({ keyboard: false });
    $("#modal_registro").modal('show');
}
function Registrar_Documento() {
    let numdoc = document.getElementById("txt_numdoc")?.value; // Nuevo campo
    let titulo = document.getElementById("txt_titulo")?.value;
    let doc1 = document.getElementById("txt_doc_archivo1")?.value;
    let doc2 = document.getElementById("txt_doc_archivo2")?.value;
    let doc3 = document.getElementById("txt_doc_archivo3")?.value;
    let doc4 = document.getElementById("txt_doc_archivo4")?.value;
    let doc5 = document.getElementById("txt_doc_archivo5")?.value;
    //let idarea = document.getElementById("txt_area_id")?.value; // Cambiar si es diferente el ID
    let idarea = document.getElementById("txtprincipalareaid").value;
    let tipo = document.getElementById("tipo_doc").value; // O el ID que uses

    // Validación básica
    if (!numdoc || numdoc.trim().length === 0) {
        return Swal.fire("Mensaje de Advertencia", "El número de documento es obligatorio", "warning");
    }
    if (!titulo || titulo.trim().length === 0) {
        return Swal.fire("Mensaje de Advertencia", "El título del documento está vacío", "warning");
    }
    if (!doc1 || doc1.trim().length === 0) {
        return Swal.fire("Mensaje de Advertencia", "El primer archivo es obligatorio", "warning");
    }

    // Continuar con los pasos para registrar
    let extension = "PDF";
    let nombrearchivo1 = "";
    let nombrearchivo2 = "";
    let nombrearchivo3 = "";
    let nombrearchivo4 = "";
    let nombrearchivo5 = "";
    let f = new Date();

    if (doc1.length > 0) {
        nombrearchivo1 = "DOC1" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc2.length > 0) {
        nombrearchivo2 = "DOC2" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc3.length > 0) {
        nombrearchivo3 = "DOC3" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc4.length > 0) {
        nombrearchivo4 = "DOC4" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc5.length > 0) {
        nombrearchivo5 = "DOC5" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }

    let formData = new FormData();
    let archivoobj1 = $("#txt_doc_archivo1")[0].files[0];
    let archivoobj2 = $("#txt_doc_archivo2")[0].files[0];
    let archivoobj3 = $("#txt_doc_archivo3")[0].files[0];
    let archivoobj4 = $("#txt_doc_archivo4")[0].files[0];
    let archivoobj5 = $("#txt_doc_archivo5")[0].files[0];

    formData.append("numdoc", numdoc);
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
    formData.append("tipo", tipo); // <--- IMPORTANTE

    // Supongamos que ya creaste tu FormData, agregaste los archivos y campos
// ...
$.ajax({
    url: "../controller/documentos/controller_registrar_documento.php",
    type: 'POST',
    data: formData,
    contentType: false,
    processData: false,
    success: function(resp) {
        // Limpia espacios en caso de que el servidor retorne con saltos de línea
        resp = resp.trim();

        // Si el controlador PHP retornó '1', significa éxito
        if (resp == "1") {
            Swal.fire({
                title: 'Guardando...',
                text: 'Subiendo archivos al servidor',
                timer: 3000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    Swal.fire(
                        "Mensaje de Confirmación",
                        "El documento se registró con éxito",
                        "success"
                    );
                    // Limpiar campos del formulario
                    document.getElementById('txt_numdoc').value = "";
                    document.getElementById('txt_titulo').value = "";
                    document.getElementById('txt_doc_archivo1').value = "";
                    document.getElementById('txt_doc_archivo2').value = "";
                    document.getElementById('txt_doc_archivo3').value = "";
                    document.getElementById('txt_doc_archivo4').value = "";
                    document.getElementById('txt_doc_archivo5').value = "";
                    
                    // Recargar la tabla DataTable
                    tbl_documentos.ajax.reload();
                    
                    // Cerrar modal (si estás usando Bootstrap)
                    $("#modal_registro").modal('hide');
                }
            });
        } else {
            // Si resp NO es '1', mostramos error
            Swal.fire(
                "Mensaje de Error",
                "Hubo un problema, contacte al soporte técnico",
                "error"
            );
        }
    }
});

}


function Modificar_Documento() {
    let id = document.getElementById("txt_id_doc").value;
    let numdoc = document.getElementById("txt_numdoc_edit").value;
    let titulo = document.getElementById("txt_titulo_edit").value;
    let doc1 = document.getElementById("txt_doc_archivo1_edit").value;
    let doc2 = document.getElementById("txt_doc_archivo2_edit").value;
    let doc3 = document.getElementById("txt_doc_archivo3_edit").value;
    let doc4 = document.getElementById("txt_doc_archivo4_edit").value;
    let doc5 = document.getElementById("txt_doc_archivo5_edit").value;
    let estado = document.getElementById("select_estatus").value;

    if (titulo.length == 0) {
        return Swal.fire("Mensaje de Advertencia", "El título del documento está vacío", "warning");
    }

    let extension = "PDF";
    let nombrearchivo1 = "";
    let nombrearchivo2 = "";
    let nombrearchivo3 = "";
    let nombrearchivo4 = "";
    let nombrearchivo5 = "";
    let f = new Date();
    if (doc1.length > 0) {
        nombrearchivo1 = "DOC1" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc2.length > 0) {
        nombrearchivo2 = "DOC2" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc3.length > 0) {
        nombrearchivo3 = "DOC3" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc4.length > 0) {
        nombrearchivo4 = "DOC4" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }
    if (doc5.length > 0) {
        nombrearchivo5 = "DOC5" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }

    let formData = new FormData();
    let archivoobj1 = $("#txt_doc_archivo1_edit")[0].files[0];
    let archivoobj2 = $("#txt_doc_archivo2_edit")[0].files[0];
    let archivoobj3 = $("#txt_doc_archivo3_edit")[0].files[0];
    let archivoobj4 = $("#txt_doc_archivo4_edit")[0].files[0];
    let archivoobj5 = $("#txt_doc_archivo5_edit")[0].files[0];

    formData.append("id", id);
    formData.append("numdoc", numdoc);
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
        "url": "../controller/documentos/controller_modificar_documento.php",
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
                        Swal.fire("Mensaje de Confirmación", "El documento se modificó con éxito", "success");
                        tbl_documentos.ajax.reload();
                        document.getElementById("txt_doc_archivo1_edit").value = "";
                        document.getElementById("txt_doc_archivo2_edit").value = "";
                        document.getElementById("txt_doc_archivo3_edit").value = "";
                        document.getElementById("txt_doc_archivo4_edit").value = "";
                        document.getElementById("txt_doc_archivo5_edit").value = "";

                        $("#modal_editar").modal('hide');
                    }
                });
            } else {
                Swal.fire("Mensaje de Error", "Comuníquese con soporte informático", "error");
            }
        }
    });
}

function eliminar_documento(id) {
    $.ajax({
        "url": "../controller/documentos/controller_eliminar_documento.php",
        type: 'POST',
        data: {
            id: id,
        }
    }).done(function (resp) {
        if (resp == 1) {
            Swal.fire("Mensaje de Confirmación", "Documento eliminado con éxito", "success").then((value) => {
                tbl_documentos.ajax.reload();
            });
        } else if (resp == 2) {
            Swal.fire("Mensaje de Advertencia", "El documento está en proceso", "warning");
        } else {
            Swal.fire("Mensaje de Error", "Comuníquese con soporte informático", "error");
        }
    });
}
