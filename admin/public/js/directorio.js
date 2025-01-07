function AbrirRegistro() {
    $("#modal_registro").modal({ backdrop: 'static', keyborad: false })
    $("#modal_registro").modal('show');
}

var tbl_directorio;
function listar_directorio() {
    tbl_directorio = $("#tabla_directorio").DataTable({
        "ordering": false,
        "bLengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": true,
        "processing": true,
        "ajax": {
            "url": "../controller/directorio/controller_listar_directorio.php",
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
            { "data": "namecomplet" },
            { "data": "dir_profesion" },
            { "data": "area_nombre" },
            { "data": "dir_cargo" },
            { "data": "dir_orden" },
            { "defaultContent": "<button class=' editar btn btn-secondary btn-sm'><i class='fas fa-pencil-alt'></i></button>&nbsp<button class=' eliminar btn btn-danger btn-sm'><i class='fa-solid fa-trash'></i></button>" },
        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_directorio.on('draw.td', function () {
        var PageInfo = $("#tabla_directorio").DataTable().page.info();
        tbl_directorio.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}

$('#tabla_directorio').on('click', '.editar', function () {
    let data = tbl_directorio.row($(this).parents('tr')).data();
    if (tbl_directorio.row(this).child.isShown()) {
        data = tbl_directorio.row(this).data();
    }
    $("#modal_editar").modal('show');
    document.getElementById('txt_id').value = data.directorio_id;
    document.getElementById('txt_cargo_edit').value = data.dir_cargo;
    document.getElementById('txt_profesion_edit').value = data.dir_profesion;
    document.getElementById('txt_orden_edit').value = data.dir_orden;
    $('#select_empleado_edit').select2().val(data.empleado_id).trigger('change.select2');
    $('#select_area_edit').select2().val(data.area_id).trigger('change.select2');
});

function Cargar_Select_Empleado() {
    $.ajax({
        "url": "../controller/usuario/controller_cargar_select_empleado.php",
        type: 'POST',
    }).done(function (resp) {
        let data = JSON.parse(resp);
        if (data.length > 0) {
            let cadena = "";
            for (let i = 0; i < data.length; i++) {
                cadena += " <option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
            }
            document.getElementById('select_empleado').innerHTML = cadena;
            document.getElementById('select_empleado_edit').innerHTML = cadena;
        } else {
            cadena += " <option value=''>No hay empleados disponibles</option>";
            document.getElementById('select_empleado').innerHTML = cadena;
            document.getElementById('select_empleado_edit').innerHTML = cadena;
        }
    });
}

function Cargar_Select_Area() {
    $.ajax({
        "url": "../controller/usuario/controller_cargar_select_area.php",
        type: 'POST',
    }).done(function (resp) {
        let data = JSON.parse(resp);
        if (data.length > 0) {
            let cadena = "";
            for (let i = 0; i < data.length; i++) {
                cadena += " <option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
            }
            document.getElementById('select_area').innerHTML = cadena;
            document.getElementById('select_area_edit').innerHTML = cadena;
        } else {
            cadena += " <option value=''>No hay empleados disponibles</option>";
            document.getElementById('select_area').innerHTML = cadena;
            document.getElementById('select_area_edit').innerHTML = cadena;
        }
    });
}

function registrar_directorio() {
    let cargo = document.getElementById("txt_cargo").value;
    let area = document.getElementById("select_area").value;
    let empleado = document.getElementById("select_empleado").value;
    let profesion = document.getElementById("txt_profesion").value;
    let orden = document.getElementById("txt_orden").value;

    $.ajax({
        url: "../controller/directorio/controller_registrar_directorio.php",
        type: 'POST',
        data: {
            cargo: cargo,
            area: area,
            empleado: empleado,
            profesion: profesion,
            orden: orden
        }
    }).done(function (resp) {
        if (resp > 0) {
            if (resp == 1) {
                Swal.fire("Mensaje de Confirmacion", "Nuevo Directorio Registrado", "success").then((value) => {
                    document.getElementById('txt_cargo').value = "";
                    document.getElementById('select_area').value = "";
                    document.getElementById('select_empleado').value = "";
                    document.getElementById('txt_profesion').value = "";
                    document.getElementById('txt_orden').value = "";
                    tbl_directorio.ajax.reload();
                    $("#modal_registro").modal('hide');
                })
            } else {
                Swal.fire("Mensaje de Advertencia", "El Directorio ya se encuentra en la base de datos", "warning");
            }

        } else {
            return Swal.fire("Mensaje de Error", "Comuniquese con soporte informatico", "error");
        }
    });
}

function editar_directorio() {
    let id = document.getElementById("txt_id").value;
    let cargo = document.getElementById("txt_cargo_edit").value;
    let area = document.getElementById("select_area_edit").value;
    let empleado = document.getElementById("select_empleado_edit").value;
    let profesion = document.getElementById("txt_profesion_edit").value;
    let orden = document.getElementById("txt_orden_edit").value;

    $.ajax({
        url: "../controller/directorio/controller_actualizar_directorio.php",
        type: 'POST',
        data: {
            id:id,
            cargo: cargo,
            area: area,
            empleado: empleado,
            profesion: profesion,
            orden: orden
        }
    }).done(function (resp) {
        if (resp > 0) {
            if (resp == 1) {
                Swal.fire("Mensaje de Confirmacion", "Directorio Actualizado", "success").then((value) => {
                    tbl_directorio.ajax.reload();
                    $("#modal_editar").modal('hide');
                })
            } else {
                Swal.fire("Mensaje de Advertencia", "El Directorio ya se encuentra en la base de datos", "warning");
            }
        } else {
            return Swal.fire("Mensaje de Error", "Comuniquese con soporte informatico", "error");
        }
    });
}

$('#tabla_directorio').on('click', '.eliminar', function () {
    let data = tbl_directorio.row($(this).parents('tr')).data();
    if (tbl_directorio.row(this).child.isShown()) {
        data = tbl_directorio.row(this).data();
    }
    Swal.fire({
        title: '¿Desea Eliminar el Directorio?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            eliminar_directorio(data.directorio_id);
        }
    })
});

function eliminar_directorio(id) {
    $.ajax({
        "url": "../controller/directorio/controller_eliminar_directorio.php",
        type: 'POST',
        data: {
            id: id,
        }
    }).done(function (resp) {
        if (resp == 1) {
            Swal.fire("Mensaje de Confirmacion", "Directorio Eliminado con Exito", "success").then((value) => {
                tbl_directorio.ajax.reload();
            });
        } else if (resp == 2) {
            Swal.fire("Mensaje de Advertencia", "No se puede Eliminar, el Directorio se Encuentra Activo", "warning");
        } else {
            Swal.fire("Mensaje de Error", "Comuniquese con soporte informatico", "error");
        }

    });
}