function Traer_Pefil() {
    let id = document.getElementById("txtprincipalid").value;
    $.ajax({
        url: "../controller/perfil/controller_traer_pefil.php",
        type: "POST",
        data: {
            id: id
        }

    }).done(function (resp) {
        let data = JSON.parse(resp);
        if (data.length == 1) {
            document.getElementById("p_dni").value = data[0].emple_nrodocumento;
            document.getElementById("p_nombres").value = data[0].emple_nombre;
            document.getElementById("p_paterno").value = data[0].emple_apepat;
            document.getElementById("p_materno").value = data[0].emple_apemat;
            document.getElementById("p_celular").value = data[0].emple_movil;
            document.getElementById("p_nac").value = data[0].emple_fechanacimiento;
            document.getElementById("p_email").value = data[0].emple_email;
            document.getElementById("p_direccion").value = data[0].emple_direccion;
            document.getElementById('txt_img_edit').src = "../" + data[0].emple_fotoperfil;
            document.getElementById("p_idemple").value = data[0].empleado_id;
        }

    });

}

function Editar_Pefil() {
    let id = document.getElementById("p_idemple").value;
    let dni = document.getElementById("p_dni").value;
    let nombre = document.getElementById("p_nombres").value;
    let paterno = document.getElementById("p_paterno").value;
    let materno = document.getElementById("p_materno").value;
    let cel = document.getElementById("p_celular").value;
    let nac = document.getElementById("p_nac").value;
    let email = document.getElementById("p_email").value;
    let dir = document.getElementById("p_direccion").value;
    let foto = document.getElementById("inputFile_edit").value;

    let extensionImg = foto.split('.').pop();
    let nombrearchivoImg = "";
    let fImg = new Date();
    if (foto.length > 0) {
        nombrearchivoImg = "EMPLE" + fImg.getDate() + "" + (fImg.getMonth() + 1) + "" + fImg.getFullYear() + "" + fImg.getHours() + "" + fImg.getMilliseconds() + "." + extensionImg;
    }
    let formData = new FormData();
    let archivoobjImg = $("#inputFile_edit")[0].files[0];
    formData.append("id", id);
    formData.append("dni", dni);
    formData.append("nombre", nombre);
    formData.append("paterno", paterno);
    formData.append("materno", materno);
    formData.append("cel", cel);
    formData.append("nac", nac);
    formData.append("email", email);
    formData.append("dir", dir);
    formData.append("nombrearchivoImg", nombrearchivoImg);
    formData.append("archivoobjImg", archivoobjImg);

    $.ajax({
        "url": "../controller/perfil/controller_modificar_perfil.php",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
    }).done(function (resp) {
        if (resp == 1) {
            Swal.fire('Mensaje de Confirmacion', 'Datos de Perfil Actualizados', 'success').then(function () {
                Traer_Pefil();
                traer_foto_nav();

            });
        }
    });

}

traer_foto_nav();
function traer_foto_nav() {
    let idusu_p = document.getElementById('txtprincipalid').value;
    $.ajax({
        url: "../controller/perfil/controller_traer_pefil.php",
        type: 'POST',
        data: {
            id: idusu_p
        }
    }).done(function (resp) {
        let data = JSON.parse(resp);
        if (data.length > 0) {
            if (data[0].emple_fotoperfil == '') {
                document.getElementById('img_nav_perfil').src = '../controller/empleado/foto/default.png';
                document.getElementById("name-nav").innerHTML = data[0].namefull;
            } else {
                document.getElementById('img_nav_perfil').src = '../' + data[0].emple_fotoperfil;
                document.getElementById("name-nav").innerHTML = data[0].namefull;
            }

        }

    });
}

function cargar_modal_credenciales() {
    $("#modal_credenciales").modal({ keyborad: false })
    $("#modal_credenciales").modal('show');
    let user = document.getElementById("txtprincipalusu").value;
    document.getElementById("txt_user").value = user;
}

function Actualizar_Credenciales() {
    let id = document.getElementById("txtprincipalid").value;
    let user = document.getElementById("txt_user").value;
    let passa = document.getElementById("txt_pass_a").value;
    let passn = document.getElementById("txt_pass_n").value;

    $.ajax({
        "url": "../controller/perfil/controller_modificar_credenciales.php",
        type: 'POST',
        data: {
            id: id,
            user: user,
            passa: passa,
            passn: passn
        }
    }).done(function (resp) {
        if (resp == 1) {
            Swal.fire("Confimación", "Credenciales Actualizados", "success");
            document.getElementById('txt_pass_a').value = '';
            document.getElementById('txt_pass_n').value = '';
            $("#modal_credenciales").modal('hide');
        } else if (resp == 2) {
            Swal.fire("Advertencia", "La contraseña actual no es correcta", "warning");
        }
    });

}