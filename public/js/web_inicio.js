function traer_recientes_comunicados() {
    let cantidad = 3; // Solo 3 comunicados en una fila
    $.ajax({
        url: "controller/web_controller_comunicados_recientes.php",
        type: 'POST',
        data: {
            cantidad: cantidad
        }
    }).done(function (resp) {
        let data = JSON.parse(resp);
        let cadena = '<div class="row g-4 justify-content-center" >'; // Fondo azul detrás de los comunicados

        if (data.length > 0) {
            for (let i = 0; i < data.length; i++) {
                cadena += `
                <div class="col-lg-4 col-md-6 animated zoomIn">
                    <div class="blog-item bg-white rounded overflow-hidden shadow border h-100" 
                        style="transition: 0.3s; border: 1px solid #ddd; display: flex; flex-direction: column; height: 100%; cursor: pointer;"
                        onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0px 4px 15px rgba(212, 212, 226, 0.3)';"
                        onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                        
                        <div class="blog-img position-relative overflow-hidden" style="position: relative; height: 300px; overflow: hidden;">
                            <img class="img-fluid w-100 fixed-height" src="admin/${data[i]["com_imgprev"]}" alt="Imagen comunicado"
                                style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                                onmouseover="this.style.transform='scale(1.1)';"
                                onmouseout="this.style.transform='scale(1)';">
                        </div>

                        <div class="p-4">
                            <div class="d-flex mb-3 text-muted">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>VRA</small>
                                <small class="me-3"><i class="fas fa-folder text-primary me-2"></i> Evento</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i> ${Calcular_Fecha(data[i]["com_feccreacion"])}</small>
                            </div>
                            <h5 class="mb-3 text-dark fw-bold">${data[i]["com_titulo"]}</h5>
                            <p class="text-muted">${limitarTexto(data[i]["com_descripcion"], 90)}</p>
                            <a class="text-uppercase text-primary fw-bold" href="evento?id=${data[i]["comunicado_id"]}">VER EVENTO →</a>
                        </div>
                    </div>
                </div>
                `;
            }

            cadena += `
    </div> <!-- Cierra la fila de comunicados -->
    <div class="text-center mt-4">
        <a href="eventos" class="btn btn-lg btn-primary fw-bold px-4 py-2 rounded-pill shadow-lg"
            style="
                background: linear-gradient(135deg, #007bff, #0056b3);
                border: none;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
            "
            onmouseover="this.style.transform='scale(1.1)'; this.querySelector('i').style.transform='rotate(90deg)';"
            onmouseout="this.style.transform='scale(1)'; this.querySelector('i').style.transform='rotate(0deg)';">
            <i class="fa-solid fa-arrow-right me-2"
                style="transition: transform 0.3s ease;"></i> 
            Más Eventos
        </a>
    </div>
`;
            document.getElementById("tab-1").innerHTML = cadena;
        }
    });
}


function traer_recientes_oficios() {
    let cantidad = 3; // Solo 3 noticias en una fila
    $.ajax({
        url: "controller/web_controller_oficios_recientes.php",
        type: 'POST',
        data: {
            cantidad: cantidad
        }
    }).done(function (resp) {
        let data = JSON.parse(resp);
        let cadena = '<div class="row g-4 justify-content-center">'; // Fondo azul detrás de las noticias

        if (data.length > 0) {
            for (let i = 0; i < data.length; i++) {
                cadena += `
                <div class="col-lg-4 col-md-6 animated zoomIn" data-wow-delay="0.1s">
                    <div class="blog-item bg-white rounded overflow-hidden shadow border h-100"
                        style="transition: 0.3s; border: 1px solid #ddd; display: flex; flex-direction: column; height: 100%; cursor: pointer;"
                        onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0px 4px 15px rgba(0, 0, 255, 0.3)';"
                        onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
                        
                        <div class="blog-img position-relative overflow-hidden" style="position: relative; height: 300px; overflow: hidden;">
                            <img class="img-fluid w-100 fixed-height" src="admin/${data[i]["ofi_img_prev"]}" alt="Imagen noticia"
                                style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;"
                                onmouseover="this.style.transform='scale(1.1)';"
                                onmouseout="this.style.transform='scale(1)';">
                            <div class="position-absolute top-0 end-0 bg-primary text-white rounded-start mt-3 py-2 px-3">
                                ${Calcular_Fecha(data[i]["ofi_feccreacion"])}
                            </div>
                        </div>

                        <div class="p-4">
                            <div class="d-flex mb-3 text-muted">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>VRA</small>
                                <small class="me-3"><i class="fas fa-folder text-primary me-2"></i> Noticias</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i> ${Calcular_Fecha(data[i]["ofi_feccreacion"])}</small>
                            </div>
                            <h5 class="mb-3 text-dark fw-bold">${data[i]["ofi_titulo"]}</h5>
                            <p class="text-muted">${limitarTexto(data[i]["ofi_descripcion"], 90)}</p>
                            <a class="text-uppercase text-primary fw-bold" href="noticia?id=${data[i]["oficio_id"]}">VER NOTICIA →</a>
                        </div>
                    </div>
                </div>
                `;
            }

            cadena += `
                </div> <!-- Cierra la fila de noticias -->
                <div class="text-center mt-4">
                    <a href="noticias" class="btn btn-lg btn-primary fw-bold px-4 py-2 rounded-pill shadow-lg"
                        style="
                            background: linear-gradient(135deg, #007bff, #0056b3);
                            border: none;
                            transition: all 0.3s ease;
                            display: inline-flex;
                            align-items: center;
                        "
                        onmouseover="this.style.transform='scale(1.1)'; this.querySelector('i').style.transform='rotate(90deg)';"
                        onmouseout="this.style.transform='scale(1)'; this.querySelector('i').style.transform='rotate(0deg)';">
                        <i class="fa-solid fa-arrow-right me-2"
                            style="transition: transform 0.3s ease;"></i> 
                        Más Noticias
                    </a>
                </div>
            `;

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