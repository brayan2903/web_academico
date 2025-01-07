function validar_informacion() {
    if (document.getElementById('_dm-inlineCheckboxes').checked == false) {
        $("#btn_registro").addClass('disabled');
    } else {
        $("#btn_registro").removeClass('disabled');
    }
}
function Register_Reclamo() {
    let tipodoc = document.getElementById("tipo_documento").value;
    let nrodoc = document.getElementById("nro_documento").value;
    let nombre = document.getElementById("nombres").value;
    let apepat = document.getElementById("apepat").value;
    let apemat = document.getElementById("apemat").value;
    let dire = document.getElementById("direccion").value;
    let telefono = document.getElementById("telefono").value;
    let email = document.getElementById("email").value;
    let tipoincidencia = document.getElementById("tipo_incidencia").value;
    let fecha = document.getElementById("fecha_incidencia").value;
    let hora = document.getElementById("hora_incidencia").value;
    let asunto = document.getElementById("asunto_incidencia").value;
    let documento = document.getElementById("archivo_incidencia").value;

    if (tipodoc == "Seleccionar") {
        return Swal.fire("Mensaje de Advetencia", "Seleccione Tipo de Documento", "warning");
    }
    if (tipoincidencia == "Seleccionar") {
        return Swal.fire("Mensaje de Advetencia", "Seleccione Tipo de Incidencia", "warning");
    }
    if (nrodoc.length == 0 || nombre.length == 0 || apepat.length == 0 || apemat.length == 0 || dire.length == 0 || telefono.length == 0 || email.length == 0 || fecha.length == 0 || hora.length == 0 || asunto.length == 0) {
        return Swal.fire("Mensaje de Advetencia", "Algunos Campos Estan Vacios", "warning");
    }
    if (validar_email(email)) {

    } else {
        return Swal.fire("Mensaje de Advetencia", "Formato de Email Incorrecto", "warning");
    }

    let extension = documento.split('.').pop();
    let nombrearchivo = "";
    let f = new Date();
    if (documento.length > 0) {
        nombrearchivo = "ARCH" + f.getDate() + "" + (f.getMonth() + 1) + "" + f.getFullYear() + "" + f.getHours() + "" + f.getMilliseconds() + "." + extension;
    }

    let formData = new FormData();
    let archivoobj = $("#archivo_incidencia")[0].files[0];

    formData.append("tipodoc", tipodoc);
    formData.append("nrodoc", nrodoc);
    formData.append("nombre", nombre);
    formData.append("apepat", apepat);
    formData.append("apemat", apemat);
    formData.append("dire", dire);
    formData.append("telefono", telefono);
    formData.append("email", email);

    formData.append("tipoincidencia", tipoincidencia);
    formData.append("fecha", fecha);
    formData.append("hora", hora);
    formData.append("asunto", asunto);
    formData.append("nombrearchivo", nombrearchivo);
    formData.append("archivoobj", archivoobj);

    $.ajax({
        url: "admin/controller/reclamo/controller_registrar_reclamo.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false
    }).done(function (resp) {
        if (resp == 1) {
            Swal.fire({
                title: 'Enviando...',
                text: 'Espero un momento por favor, estamos registrando su expediente',
                timer: 4000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    Swal.fire("Mensaje de Confirmación", "Registrado con éxito", "success");
                    document.getElementById("tipo_documento").value = "Seleccionar";
                    document.getElementById("nro_documento").value = "";
                    document.getElementById("nombres").value = "";
                    document.getElementById("apepat").value = "";
                    document.getElementById("apemat").value = "";
                    document.getElementById("direccion").value = "";
                    document.getElementById("telefono").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("tipo_incidencia").value = "Seleccionar";
                    document.getElementById("fecha_incidencia").value = "";
                    document.getElementById("hora_incidencia").value = "";
                    document.getElementById("asunto_incidencia").value = "";
                    document.getElementById("archivo_incidencia").value = "";
                }
            });
        } else {
            Swal.fire("Mensaje de Error", "Comuniquese con soporte informatico", "error");
        }

    });

}

function validar_email(email) {
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
function sololetras(e) {
    key = e.keyCode || e.which;

    teclado = String.fromCharCode(key).toLowerCase();

    letras = "qwertyuiopasdfghjklñzxcvbnm ";

    especiales = "8-37-38-46-164";

    teclado_especial = false;

    for (var i in especiales) {
        if (key == especiales[i]) {
            teclado_especial = true;
            break;
        }
    }

    if (letras.indexOf(teclado) == -1 && !teclado_especial) {
        return false;
    }
}

function soloNumeros(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8) {
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
