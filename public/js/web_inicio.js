function traer_recientes_comunicados() {
    let cantidad = 3;
    $.ajax({
        url: "controller/web_controller_comunicados_recientes.php",
        type: 'POST',
        data: {
            cantidad: cantidad
        }
    }).done(function (resp) {
        let data = JSON.parse(resp);
        var cadena = '<div class="row g-4 justify-content-center">'; // Fila principal
        if (data.length > 0) {
            for (let i = 0; i < data.length; i++) {
                cadena += `
                <div class="col-lg-4 col-md-6">
                    <div class="job-item bg-light p-4 border rounded">
                        <div class="text-center">
                            <img class="img-fluid border rounded mb-3" src="admin/${data[i]["com_imgprev"]}" alt="Imagen" style="width: 100%; max-height: 180px; object-fit: cover;">
                        </div>
                        <h5 class="mb-3 fs-6 text-justify">${data[i]["com_titulo"]}</h5>
                        <p class="text-muted">${limitarTexto(data[i]["com_descripcion"])}</p>
                        <a class="btn btn-secondary btn-sm" href="documento?id=${data[i]["comunicado_id"]}">
                            <i class="fa-solid fa-eye me-2"></i>Ver más
                        </a>
                        <small class="text-muted d-block mt-2">
                            <i class="far fa-calendar-alt me-1"></i>${Calcular_Fecha(data[i]["com_feccreacion"])}
                        </small>
                    </div>
                </div>`;
            }
            cadena += '</div>'; // Cierra la fila
            cadena += '<div class="text-center mt-4"><a class="btn btn-primary btn-rounded" href="eventos"><i class="fa-solid fa-plus me-2"></i>Más Eventos</a></div>';
            document.getElementById("tab-1").innerHTML = cadena;
        }
    });
}
function traer_recientes_oficios() {
    let cantidad = 3;
    $.ajax({
        url: "controller/web_controller_oficios_recientes.php",
        type: 'POST',
        data: {
            cantidad: cantidad
        }
    }).done(function (resp) {
        let data = JSON.parse(resp);
        var cadena = '<div class="row g-4 justify-content-center">'; // Fila principal
        if (data.length > 0) {
            for (let i = 0; i < data.length; i++) {
                cadena += `
                <div class="col-lg-4 col-md-6">
                    <div class="job-item bg-light2 p-4 border rounded">
                        <div class="text-center">
                            <img class="img-fluid border rounded mb-3" src="admin/${data[i]["ofi_img_prev"]}" alt="Imagen" style="width: 100%; max-height: 180px; object-fit: cover;">
                        </div>
                        <h5 class="mb-3 fs-6 text-justify">${data[i]["ofi_titulo"]}</h5>
                        <p class="text-muted">${limitarTexto(data[i]["ofi_descripcion"])}</p>
                        <a class="btn btn-secondary btn-sm" href="documentoOficio?id=${data[i]["oficio_id"]}">
                            <i class="fa-solid fa-eye me-2"></i>Ver más
                        </a>
                        <small class="text-muted d-block mt-2">
                            <i class="far fa-calendar-alt me-1"></i>${Calcular_Fecha(data[i]["ofi_feccreacion"])}
                        </small>
                    </div>
                </div>`;
            }
            cadena += '</div>'; // Cierra la fila
            cadena += '<div class="text-center mt-4"><a class="btn btn-primary btn-rounded" href="noticias"><i class="fa-solid fa-plus me-2"></i>Más Noticias</a></div>';
            document.getElementById("tab-2").innerHTML = cadena;
        }
    });
}
function traer_recientes_convocatorias() {
    let cantidad = 3;
    $.ajax({
        url: "controller/web_controller_convocatorias_recientes.php",
        type: 'POST',
        data: {
            cantidad: cantidad
        }
    }).done(function (resp) {
        let data = JSON.parse(resp);
        var cadena = '<div class="row g-4 justify-content-center">'; // Fila principal
        if (data.length > 0) {
            for (let i = 0; i < data.length; i++) {
                cadena += `
                <div class="col-lg-4 col-md-6">
                    <div class="job-item bg-light3 p-4 border rounded">
                        <div class="text-center">
                            <img class="img-fluid border rounded mb-3" src="public/img/conv_default.jpg" alt="Imagen" style="width: 100%; max-height: 180px; object-fit: cover;">
                        </div>
                        <h5 class="mb-3 fs-6 text-justify">${data[i]["conv_titulo"]}</h5>
                        <p class="text-muted"><b>Tipo de Convocatoria:</b> ${data[i]["conv_tipo"]}</p>
                        <a class="btn btn-secondary btn-sm" href="convocatorias">
                            <i class="fa-solid fa-eye me-2"></i>Ver más
                        </a>
                        <small class="text-muted d-block mt-2">
                            <i class="far fa-calendar-alt me-1"></i>${Calcular_Fecha(data[i]["conv_fecpublicacion"])}
                        </small>
                    </div>
                </div>`;
            }
            cadena += '</div>'; // Cierra la fila
            cadena += '<div class="text-center mt-4"><a class="btn btn-primary btn-rounded" href="convocatorias"><i class="fa-solid fa-plus me-2"></i>Más Convocatorias</a></div>';
            document.getElementById("tab-3").innerHTML = cadena;
        }
    });
}


function Calcular_Fecha(fechahora) {

    let fecha = new Date(fechahora);
    let fecha2 = fecha.toLocaleDateString();
    let fechaArray = fecha2.split('/');
    let dia = fechaArray[0];
    let mes = fechaArray[1];
    let anio = fechaArray[2];
    let mesLetra = "";
    if (dia.length < 2) {
        dia = '0' + dia;
    }
    if (mes.length < 2) {
        mes = '0' + mes;
    }
    switch (mes) {
        case '01':
            mesLetra = "Enero";
            break;
        case '02':
            mesLetra = "Febrero";
            break;
        case '03':
            mesLetra = "Marzo";
            break;
        case '04':
            mesLetra = "Abril";
            break;
        case '05':
            mesLetra = "Mayo";
            break;
        case '06':
            mesLetra = "Junio";
            break;
        case '07':
            mesLetra = "Julio";
            break;
        case '08':
            mesLetra = "Agosto";
            break;
        case '09':
            mesLetra = "Setiembre";
            break;
        case '10':
            mesLetra = "Octubre";
            break;
        case '11':
            mesLetra = "Noviembre";
            break;
        case '12':
            mesLetra = "Diciembre";
            break;

    }
    return dia + ' ' + mesLetra + ' ' + anio;
}

function limitarTexto(texto) {
    let limite = 7;
    if (texto.split(" ").length > limite) {
        const palabras = texto.split(" ");
        const nuevoTexto = palabras.slice(0, limite).join(" ") + "...";
        return nuevoTexto;
    }
    return texto;
}


function mostrar_comunicado_externo() {
    $.ajax({
        "url": "controller/web_controller_traer_modal.php",
        type: 'POST',
    }).done(function (resp) {
        let data = JSON.parse(resp);

        // función para mostrar alertas de forma consecutiva
        function mostrarAlertas(i) {
            if (i < data.length) {
                Swal.fire({
                    title: 'COMUNICADO',
                    html:
                        '<div class="mb-1" style="text-align: justify;font-size:14px">' + data[i]["modal_desc"] + '</div><br>' +
                        (data[i]["modal_imagen"] ? '<div class="mb-1 figure" style="width:100%; height:340px;overflow:auto"><img src="admin/' + data[i]["modal_imagen"] + '" alt="" style="width:100%;objet-fit:contain;"></div>' : '<div class="figure" style="display:none"></div>') +
                        '<div style="text-align: left;font-size:14px">' + '<b>Fecha Creacion: </b>' +Calcular_Fecha(data[i]["modal_fecha"])  + '</div>',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    },
                    width:500,
                }).then((value) => {
                    mostrarAlertas(i + 1);
                })

            }

        }

        if (data.length > 0) {
            mostrarAlertas(0); // empezar a mostrar las alertas desde la primera
        }



    })
}