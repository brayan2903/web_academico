var tbl_empleado;
function listar_empleado() {
    tbl_empleado = $("#tabla_empleado").DataTable({
        "ordering": false,
        "bLengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": true,
        "processing": true,
        "ajax": {
            "url": "../controller/empleado/controller_listar_empleado.php",
            type: 'POST'
        },
        "columns": [
            { "defaultContent": "" },
            {
                "data": "emple_fotoperfil", render: function (data, type, row) {
                    if (data == null) {
                        return '<img src="../controller/empleado/foto/default.png" class="img-fluid rounded-circle" alt="..." width="40">';
                    } else {
                        return '<img src="../' + data + '" class="img-fluid rounded-circle" alt="..." width="40">';
                    }

                }
            },
            { "data": "emple_nrodocumento" },
            { "data": "em" },
            { "data": "emple_movil" },
            { "data": "emple_email" },
            { "data": "emple_direccion" },
            {
                "data": "emple_estatus", render: function (data, type, row) {
                    if (data == 'ACTIVO') {
                        return '<span class="badge bg-success">ACTIVO</span>';
                    } else {
                        return '<span class="badge bg-danger">INACTIVO</span>';
                    }
                }
            },
            { "defaultContent": "<button class=' editar btn btn-secondary btn-sm'><i class='fas fa-pencil-alt'></i></button>&nbsp<button class=' eliminar btn btn-danger btn-sm'><i class='fa-solid fa-trash'></i></button>" },
        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_empleado.on('draw.td', function () {
        var PageInfo = $("#tabla_empleado").DataTable().page.info();
        tbl_empleado.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

}

$('#tabla_empleado').on('click', '.editar', function () {
    let data = tbl_empleado.row($(this).parents('tr')).data();
    if (tbl_empleado.row(this).child.isShown()) {
        data = tbl_empleado.row(this).data();
    }
    $("#modal_editar").modal('show');
    document.getElementById('txt_idempleado').value = data.empleado_id;
    document.getElementById('txt_nro_editar').value = data.emple_nrodocumento;
    document.getElementById('txt_nom_editar').value = data.emple_nombre;
    document.getElementById('txt_apepa_editar').value = data.emple_apepat;
    document.getElementById('txt_apema_editar').value = data.emple_apemat;
    document.getElementById('txt_fnac_editar').value = data.emple_fechanacimiento;
    document.getElementById('txt_movil_editar').value = data.emple_movil;
    document.getElementById('txt_dire_editar').value = data.emple_direccion;
    document.getElementById('txt_email_editar').value = data.emple_email;
    document.getElementById('select_estatus').value = data.emple_estatus;
    document.getElementById('imagen__prev_edit').src = "../"+data.emple_fotoperfil;
});
$('#tabla_empleado').on('click', '.eliminar', function () {
    let data = tbl_empleado.row($(this).parents('tr')).data();
    if (tbl_empleado.row(this).child.isShown()) {
        data = tbl_empleado.row(this).data();
    }
    Swal.fire({
        title: '¿Desea Eliminar el Empleado?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            eliminar_empleado(data.empleado_id);
        }
    })
});

function eliminar_empleado(id) {
    $.ajax({
        "url": "../controller/empleado/controller_eliminar_empleado.php",
        type: 'POST',
        data: {
            id: id,

        }
    }).done(function (resp) {
        if (resp == 1) {
            Swal.fire("Mensaje de Confirmacion", "Empleado Eliminado con Exito", "success").then((value) => {
                tbl_empleado.ajax.reload();
            });
        } else if (resp == 2) {
            Swal.fire("Mensaje de Advertencia", "No se puede Eliminar, el Empleado se Encuentra Activo", "warning");
        } else {
            Swal.fire("Mensaje de Error", "No se completo la operacion, El registro esta siendo utilizado por otra instancia, comuniquese con Soporte", "error");
        }

    });
}

function AbrirRegistro() {
    $("#modal_registro").modal({ backdrop: 'static', keyborad: false })
    $("#modal_registro").modal('show');
}
/*INICIO REGISTRAR AREA*/
function Registrar_Empleado() {
    let nro = document.getElementById('txt_nro').value;
    let nom = document.getElementById('txt_nom').value;
    let apepa = document.getElementById('txt_apepa').value;
    let apema = document.getElementById('txt_apema').value;
    let fnac = document.getElementById('txt_fnac').value;
    let movil = document.getElementById('txt_movil').value;
    let dire = document.getElementById('txt_dire').value;
    let email = document.getElementById('txt_email').value;
    let foto = document.getElementById('txt_foto').value;
    if (nro.length == 0 || nom.length == 0 || apepa.length == 0 || apema.length == 0 || fnac.length == 0 || movil.length == 0 || dire.length == 0 || email.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Tiene campos vacios", "warning");
    }
    if (validar_email(email)) {

    } else {
        return Swal.fire("Mensaje de Advetencia", "Formato de Email Incorrecto", "warning");
    }

    let extensionImg = foto.split('.').pop();
    let nombrearchivoImg = "";
    let fImg = new Date();
    if (foto.length > 0) {
        nombrearchivoImg = "EMPLE" + fImg.getDate() + "" + (fImg.getMonth() + 1) + "" + fImg.getFullYear() + "" + fImg.getHours() + "" + fImg.getMilliseconds() + "." + extensionImg;
    }
    let formData = new FormData();
    let archivoobjImg = $("#txt_foto")[0].files[0];
    formData.append("nro", nro);
    formData.append("nom", nom);
    formData.append("apepa", apepa);
    formData.append("apema", apema);
    formData.append("fnac", fnac);
    formData.append("movil", movil);
    formData.append("dire", dire);
    formData.append("email", email);
    formData.append("nombrearchivoImg", nombrearchivoImg);
    formData.append("archivoobjImg", archivoobjImg);
    $.ajax({
        "url": "../controller/empleado/controller_registro_empleado.php",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,

    }).done(function (resp) {
        if (resp > 0) {
            if (resp == 1) {
                Swal.fire("Mensaje de Confirmacion", "Nuevo Empleado Registrado", "success").then((value) => {
                    document.getElementById('txt_nro').value = "";
                    document.getElementById('txt_nom').value = "";
                    document.getElementById('txt_apepa').value = "";
                    document.getElementById('txt_apema').value = "";
                    document.getElementById('txt_fnac').value = "";
                    document.getElementById('txt_movil').value = "";
                    document.getElementById('txt_dire').value = "";
                    document.getElementById('txt_email').value = "";
                    document.getElementById('txt_foto').value = "";
                    tbl_empleado.ajax.reload();
                    $("#modal_registro").modal('hide');

                })

            } else {
                Swal.fire("Mensaje de Advertencia", "El Nro de Documento ya se encuentra en la base de datos", "warning");
            }

        } else {
            return Swal.fire("Mensaje de Error", "No se completo el registro", "error");
        }
    })
}
/*FIN REGISTRAR AREA*/

function Modificar_Empleado() {
    let id = document.getElementById('txt_idempleado').value;
    let nro = document.getElementById('txt_nro_editar').value;
    let nom = document.getElementById('txt_nom_editar').value;
    let apepa = document.getElementById('txt_apepa_editar').value;
    let apema = document.getElementById('txt_apema_editar').value;
    let fnac = document.getElementById('txt_fnac_editar').value;
    let movil = document.getElementById('txt_movil_editar').value;
    let dire = document.getElementById('txt_dire_editar').value;
    let email = document.getElementById('txt_email_editar').value;
    let esta = document.getElementById('select_estatus').value;
    let foto = document.getElementById('txt_foto_edit').value;
    if (id.length == 0 || esta.length == 0 || nro.length == 0 || nom.length == 0 || apepa.length == 0 || apema.length == 0 || fnac.length == 0 || movil.length == 0 || dire.length == 0 || email.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Tiene campos vacios", "warning");
    }
    if (validar_email(email)) {

    } else {
        return Swal.fire("Mensaje de Advetencia", "Formato de Email Incorrecto", "warning");
    }

    let extensionImg = foto.split('.').pop();
    let nombrearchivoImg = "";
    let fImg = new Date();
    if (foto.length > 0) {
        nombrearchivoImg = "EMPLE" + fImg.getDate() + "" + (fImg.getMonth() + 1) + "" + fImg.getFullYear() + "" + fImg.getHours() + "" + fImg.getMilliseconds() + "." + extensionImg;
    }
    let formData = new FormData();
    let archivoobjImg = $("#txt_foto_edit")[0].files[0];
    formData.append("id", id);
    formData.append("nro", nro);
    formData.append("nom", nom);
    formData.append("apepa", apepa);
    formData.append("apema", apema);
    formData.append("fnac", fnac);
    formData.append("movil", movil);
    formData.append("dire", dire);
    formData.append("email", email);
    formData.append("esta", esta);
    formData.append("nombrearchivoImg", nombrearchivoImg);
    formData.append("archivoobjImg", archivoobjImg);
    $.ajax({
        "url": "../controller/empleado/controller_modificar_empleado.php",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
    }).done(function (resp) {
        if (resp > 0) {
            if (resp == 1) {
                Swal.fire("Mensaje de Confirmacion", "Datos del Empleado Actualizado", "success").then((value) => {
                    tbl_empleado.ajax.reload();
                    $("#modal_editar").modal('hide');

                })

            } else {
                Swal.fire("Mensaje de Advertencia", "El Nro de Documento ya se encuentra en la base de datos", "warning");
            }

        } else {
            return Swal.fire("Mensaje de Error", "No se completo la actualizacion", "error");
        }
    })
}

///////VALIDAR EMAIL
function validar_email(email) {
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}