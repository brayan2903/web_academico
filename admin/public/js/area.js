var tbl_area;
function listar_area() {
    tbl_area = $("#tabla_area").DataTable({
        "ordering": false,
        "bLengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": true,
        "processing": true,
        "ajax": {
            "url": "../controller/area/controller_listar_area.php",
            type: 'POST'
        },
        "columns": [
            { "defaultContent": "" },
            { "data": "area_nombre" },
            { "data": "area_fecha_registro" },
            {
                "data": "area_estado", render: function (data, type, row) {
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
    tbl_area.on('draw.td', function () {
        var PageInfo = $("#tabla_area").DataTable().page.info();
        tbl_area.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

}

function AbrirRegistro() {
    $("#modal_registro").modal({ backdrop: 'static', keyborad: false })
    $("#modal_registro").modal('show');
}

function Registrar_Area() {
    let area = document.getElementById('txt_area').value;
    if (area.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Tiene campos vacios", "warning");
    }
    $.ajax({
        "url": "../controller/area/controller_registro_area.php",
        type: 'POST',
        data: {
            a: area
        }
    }).done(function (resp) {
        if (resp > 0) {
            if (resp == 1) {
                Swal.fire("Mensaje de Confirmacion", "Nuevo Area Registrado", "success").then((value) => {
                    document.getElementById('txt_area').value = "";
                    tbl_area.ajax.reload();
                    $("#modal_registro").modal('hide');

                })

            } else {
                Swal.fire("Mensaje de Advertencia", "El Area ingresada ya se encuentra en la base de datos", "warning");
            }

        } else {
            return Swal.fire("Mensaje de Error", "No se completo el registro", "error");
        }
    });
}

$('#tabla_area').on('click', '.editar', function () {
    let data = tbl_area.row($(this).parents('tr')).data();
    if (tbl_area.row(this).child.isShown()) {
        data = tbl_area.row(this).data();
    }
    $("#modal_editar").modal('show');
    document.getElementById('txt_area_editar').value = data.area_nombre;
    document.getElementById('txt_idarea').value = data.area_cod;
    document.getElementById('select_estatus').value = data.area_estado;
});
$('#tabla_area').on('click', '.eliminar', function () {
    let data = tbl_area.row($(this).parents('tr')).data();
    if (tbl_area.row(this).child.isShown()) {
        data = tbl_area.row(this).data();
    }
    Swal.fire({
        title: '¿Desea Eliminar el Area?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            eliminar_area(data.area_cod);
        }
    });
});
function eliminar_area(id) {
    $.ajax({
        "url": "../controller/area/controller_eliminar_area.php",
        type: 'POST',
        data: {
            id: id,

        }
    }).done(function (resp) {
        if (resp == 1) {
            Swal.fire("Mensaje de Confirmacion", "Tipo Documento Eliminado con Exito", "success").then((value) => {
                tbl_area.ajax.reload();
            });


        } else if (resp == 2) {
            Swal.fire("Mensaje de Advertencia", "No se puede Eliminar, el Tipo Documento se Encuentra Activo", "warning");
        } else {
            Swal.fire("Mensaje de Error", "No se completo la operacion, El registro esta siendo utilizado por otra instancia, comuniquese con Soporte", "error");
        }

    });

}

function Modificar_Area() {
    let id = document.getElementById('txt_idarea').value;
    let area = document.getElementById('txt_area_editar').value;
    let esta = document.getElementById('select_estatus').value;
    if (area.length == 0 || id.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Tiene campos vacios", "warning");
    }
    $.ajax({
        "url": "../controller/area/controller_modificar_area.php",
        type: 'POST',
        data: {
            id: id,
            are: area,
            esta: esta
        }
    }).done(function (resp) {
        if (resp > 0) {
            if (resp == 1) {
                Swal.fire("Mensaje de Confirmacion", "Datos Actualizados", "success").then((value) => {
                    tbl_area.ajax.reload();
                    $("#modal_editar").modal('hide');

                })

            } else {
                Swal.fire("Mensaje de Advertencia", "El area ingresada ya se encuentra en la base de datos", "warning");
            }

        } else {
            return Swal.fire("Mensaje de Error", "No se completo la modificacion", "error");
        }
    })
}


