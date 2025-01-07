function iniciar_sesion() {
    recuerdame();
    let user = document.getElementById('txt-user').value;
    let pass = document.getElementById('txt-pass').value;
    if (user.length == 0 || pass.length == 0) {
        return Swal.fire("Mensaje de Advertencia", "Los campos estan vacios", "warning");
    }
    $.ajax({
        url: 'controller/usuario/controller_iniciar_sesion.php',
        type: 'POST',
        data: {
            u: user,
            c: pass
        }
    }).done(function (resp) {
        let data = JSON.parse(resp);
        if (data.length > 0) {
            if (data[0][5] == "INACTIVO") {
                return Swal.fire('Mensaje de Advertencia', 'El usuario <b>' + user + '</b> se encuentra incativo', 'warning');
            }
            $.ajax({
                url: 'controller/usuario/controller_crear_sesion.php',
                type: 'POST',
                data: {
                    idusuario: data[0][0],
                    usuario: data[0][1],
                    rol: data[0][6],
                    nombres: data[0][11],
                    area: data[0][10],
                    idpriarea: data[0][9],
                    fotoempleado: data[0][12]
                }
            }).done(function (r) {
                let timerInterval;
                Swal.fire({
                    title: 'Bienvenido al panel administrativo!',
                    html: 'Seras redirecionado en <b></b> milliseconds.',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                        const b = Swal.getHtmlContainer().querySelector('b')
                        timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft()
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.reload();
                    }
                });
            });
        } else {
            Swal.fire('Mensaje de Error', 'Contraseña o usuario incorrecto', 'error');
        }

    });
}

function recuerdame() {
    if (rmcheck.checked && usuarioInput.value != "" && passInput.value != "") {
        localStorage.usuario = usuarioInput.value;
        localStorage.pass = passInput.value;
        localStorage.checkbox = rmcheck.value;
    } else {
        localStorage.usuario = "";
        localStorage.pass = "";
        localStorage.checkbox = "";
    }
}

var tbl_usuario;
function listar_usuario() {
    tbl_usuario = $("#tabla_usuario").DataTable({
        "ordering": false,
        "bLengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": true,
        "processing": true,
        "responsive": true,
        "ajax": {
            "url": "../controller/usuario/controller_listar_usuario.php",
            type: 'POST'
        },
        "columns": [
            { "defaultContent": "" },
            { "data": "usu_usuario" },
            { "data": "area_nombre" },
            { "data": "usu_rol" },
            { "data": "nempleado" },
            {
                "data": "usu_estatus", render: function (data, type, row) {
                    if (data == 'ACTIVO') {
                        return '<span class="badge bg-success">ACTIVO</span>';
                    } else {
                        return '<span class="badge bg-danger">INACTIVO</span>';
                    }
                }
            },
            {
                "data": "usu_estatus", render: function (data, type, row) {
                    if (data == 'ACTIVO') {
                        return "<button class='editar btn btn-secondary btn-sm'><i class='fas fa-pencil-alt'></i></button>&nbsp<button class='desactivar btn btn-outline-danger btn-sm'><i class='fa-solid fa-lock-open'></i></button>&nbsp";
                    } else {
                        return "<button class='editar btn btn-secondary btn-sm' disabled><i class='fas fa-pencil-alt'></i></button>&nbsp<button class='activar btn btn-danger btn-sm'><i class='fa-solid fa-lock'></i></button>&nbsp";
                    }
                }
            }
        ],
        "createdRow": function (row, data, dataIndex) {
            // Deshabilitar la primera fila
            if (dataIndex === 0) {
                $(row).find('button').prop('disabled', true);
            }
        },

        "language": idioma_espanol,
        select: true
    });
    tbl_usuario.on('draw.td', function () {
        var PageInfo = $("#tabla_usuario").DataTable().page.info();
        tbl_usuario.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}

function AbrirRegistro() {
    $("#modal_registro").modal({ backdrop: 'static', keyborad: false })
    $("#modal_registro").modal('show');
}


function Registrar_Usuario() {
    let usu = document.getElementById('txt_usu').value;
    let con = document.getElementById('txt_con').value;
    let ide = document.getElementById('select_empleado').value;
    let ida = document.getElementById('select_area').value;
    let rol = document.getElementById('select_rol').value;
    if (usu.length == 0 || con.length == 0 || ide.length == 0 || ida.length == 0 || rol.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Tiene campos vacios", "warning");
    }
    $.ajax({
        "url": "../controller/usuario/controller_registro_usuario.php",
        type: 'POST',
        data: {
            usu: usu,
            con: con,
            ide: ide,
            ida: ida,
            rol: rol
        }
    }).done(function (resp) {

        if (resp > 0) {
            if (resp == 1) {
                Swal.fire("Mensaje de Confirmacion", "Nuevo Usuario Registrado", "success").then((value) => {
                    document.getElementById('txt_usu').value = "";
                    document.getElementById('txt_con').value = "";
                    document.getElementById('select_empleado').value = "";
                    document.getElementById('select_area').value = "";
                    document.getElementById('select_rol').value = "";
                    tbl_usuario.ajax.reload();
                    $("#modal_registro").modal('hide');

                })

            } else {
                Swal.fire("Mensaje de Advertencia", "El Usuario ingresado ya se encuentra en la base de datos", "warning");
            }

        } else {
            return Swal.fire("Mensaje de Error", "No se completo el registro", "error");
        }
    });
}

function Cargar_Select_Empleado() {
    $.ajax({
        "url": "../controller/usuario/controller_cargar_select_empleado.php",
        type: 'POST',
    }).done(function (resp) {
        let data = JSON.parse(resp);
        if (data.length > 0) {
            let cadena = "<option value=''></option>";
            for (let i = 0; i < data.length; i++) {
                cadena += " <option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
            }
            document.getElementById('select_empleado').innerHTML = cadena;
            document.getElementById('select_empleado_editar').innerHTML = cadena;
        } else {
            cadena += " <option value=''>No hay empleados disponibles</option>";
            document.getElementById('select_empleado').innerHTML = cadena;
            document.getElementById('select_empleado_editar').innerHTML = cadena;
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
            let cadena = "<option value=''></option>";
            for (let i = 0; i < data.length; i++) {
                cadena += " <option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
            }
            document.getElementById('select_area').innerHTML = cadena;
            document.getElementById('select_area_editar').innerHTML = cadena;
        } else {
            cadena += " <option value=''>No hay empleados disponibles</option>";
            document.getElementById('select_area').innerHTML = cadena;
            document.getElementById('select_area_editar').innerHTML = cadena;
        }
    });
}

$('#tabla_usuario').on('click', '.editar', function () {
    let data = tbl_usuario.row($(this).parents('tr')).data();
    if (tbl_usuario.row(this).child.isShown()) {
        data = tbl_usuario.row(this).data();
    }
    $("#modal_editar").modal('show');
    document.getElementById('txt_idusuario').value = data.usu_id;
    document.getElementById('txt_usu_editar').value = data.usu_usuario;
    $('#select_empleado_editar').select2().val(data.empleado_id).trigger('change.select2');
    $('#select_area_editar').select2().val(data.area_id).trigger('change.select2');
    $('#select_rol_editar').select2().val(data.usu_rol).trigger('change.select2');

});
$('#tabla_usuario').on('click', '.desactivar', function () {
    let data = tbl_usuario.row($(this).parents('tr')).data();
    if (tbl_usuario.row(this).child.isShown()) {
        data = tbl_usuario.row(this).data();
    }
    Swal.fire({
        title: '¿Desea desactivar el usuario ' + data.usu_usuario + '?',
        text: "Una vez desactivado el usuario, No tendra acceso al sistema!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'SI'
    }).then((result) => {
        if (result.isConfirmed) {
            Modificar_Estatus_Usuario(parseInt(data.usu_id), 'INACTIVO');
        }
    });
});

$('#tabla_usuario').on('click', '.activar', function () {
    let data = tbl_usuario.row($(this).parents('tr')).data();
    if (tbl_usuario.row(this).child.isShown()) {
        data = tbl_usuario.row(this).data();
    }
    Swal.fire({
        title: '¿Desea activar el usuario ' + data.usu_usuario + '?',
        text: "Una vez activado el usuario, Podra tener acceso al sistema!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'SI'
    }).then((result) => {
        if (result.isConfirmed) {
            Modificar_Estatus_Usuario(parseInt(data.usu_id), 'ACTIVO');
        }
    });
});

function Modificar_Usuario() {
    let id = document.getElementById('txt_idusuario').value;
    let ide = document.getElementById('select_empleado_editar').value;
    let ida = document.getElementById('select_area_editar').value;
    let rol = document.getElementById('select_rol_editar').value;
    if (id.length == 0 || ide.length == 0 || ida.length == 0 || rol.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Tiene campos vacios", "warning");
    }
    $.ajax({
        "url": "../controller/usuario/controller_modificar_usuario.php",
        type: 'POST',
        data: {
            id: id,
            ide: ide,
            ida: ida,
            rol: rol
        }
    }).done(function (resp) {
        if (resp > 0) {
            Swal.fire("Mensaje de Confirmacion", "Datos del Usuario Actualizado", "success").then((value) => {
                tbl_usuario.ajax.reload();
                $("#modal_editar").modal('hide');

            })

        } else {
            return Swal.fire("Mensaje de Error", "No se completo la actualizacion", "error");
        }
    });
}

function Modificar_Estatus_Usuario(id, estatus) {
    let esta = estatus;
    if (esta == 'INACTIVO') {
        esta = 'DESACTIVADO'
    } else {
        esta = 'ACTIVADO';
    }
    $.ajax({
        "url": "../controller/usuario/controller_modificar_usuario_estatus.php",
        type: 'POST',
        data: {
            id: id,
            estatus: estatus
        }
    }).done(function (resp) {
        if (resp > 0) {
            Swal.fire("Mensaje de Confirmacion", "Usuario " + esta + " con exito", "success").then((value) => {
                tbl_usuario.ajax.reload();
            });

        } else {
            return Swal.fire("Mensaje de Error", "No se completo la actualizacion", "error");
        }
    });
}