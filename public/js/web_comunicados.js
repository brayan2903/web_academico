function mostrar_comunicados_web(pagina_actual = 1, elementos_por_pagina = 5) {
    $.ajax({
        url: "controller/web_controller_listar_comunicados.php",
        type: 'POST',
    }).done(function (resp) {
        let data = JSON.parse(resp);
        let cadena = "";

        if (data.length > 0) {
            const inicio = (pagina_actual - 1) * elementos_por_pagina;
            const fin = inicio + elementos_por_pagina;

            for (let i = inicio; i < fin && i < data.length; i++) {
                cadena += `
                    <div class="col-lg-12">
                        <div class="card comunicado-card shadow-lg border-0 mb-4">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <div class="img-container">
                                        <img src="admin/${data[i]["com_imgprev"]}" class="img-fluid img-comunicado" alt="Imagen del comunicado">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="card-title text-dark fw-bold">${data[i]["com_titulo"]}</h4>
                                        <p class="card-text">${data[i]["com_descripcion"]}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="text-muted">
                                                <i class="fa-solid fa-calendar-days me-2"></i> ${Calcular_Fecha(data[i]["com_feccreacion"])}
                                            </span>
                                            <a href="evento?id=${data[i]["comunicado_id"]}" class="btn btn-primary btn-sm">
                                                <i class="fa-solid fa-eye me-2"></i> Ver Documento
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }

            document.getElementById("contenet__comunicados").innerHTML = cadena;
            crear_botones_paginacion(Math.ceil(data.length / elementos_por_pagina), pagina_actual);
        } else {
            document.getElementById("contenet__comunicados").innerHTML = `<div class="alert alert-warning text-center">No hay comunicados disponibles.</div>`;
        }
    });
}

function crear_botones_paginacion(numero_paginas, pagina_actual) {
    const contenedor = document.getElementById("paginacion");
    contenedor.innerHTML = "";
    const maximo_botones = 3; // máximo de botones a mostrar en la paginación
    let inicio = 1;
    let fin = numero_paginas;

    if (numero_paginas > maximo_botones) {
        // Si el número de páginas es mayor a maximo_botones, se muestra solo los primeros 3 botones y el último
        if (pagina_actual <= 3) {
            fin = maximo_botones;
        } else if (pagina_actual >= numero_paginas - 2) {
            inicio = numero_paginas - maximo_botones + 1;
        } else {
            inicio = pagina_actual - 2;
            fin = pagina_actual + 2;
        }
    }

    // Agregar botón anterior si no es la primera página
    if (pagina_actual > 1) {
        const botonAnterior = document.createElement("button");
        botonAnterior.innerText = "Anterior";
        botonAnterior.onclick = () => {
            mostrar_comunicados_web(pagina_actual - 1, 5);
        };
        botonAnterior.classList.add("btn", "btn-link");
        contenedor.appendChild(botonAnterior);
    }

    // Agregar botones de paginación
    for (let i = inicio; i <= fin; i++) {
        const boton = document.createElement("button");
        boton.innerText = i;
        boton.onclick = () => {
            mostrar_comunicados_web(i, 5);
        };
        if (i === pagina_actual) {
            boton.disabled = true;
        }
        boton.classList.add("btn", "btn-link");
        contenedor.appendChild(boton);
    }

    // Agregar botón siguiente si no es la última página
    if (pagina_actual < numero_paginas) {
        const botonSiguiente = document.createElement("button");
        botonSiguiente.innerText = "Siguiente";
        botonSiguiente.onclick = () => {
            mostrar_comunicados_web(pagina_actual + 1, 5);
        };
        botonSiguiente.classList.add("btn", "btn-link");
        contenedor.appendChild(botonSiguiente);
    }
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


function busqueda_general(){
    let texto = document.getElementById("texto_search").value;
    $.ajax({
        url: "controller/web_controller_busqueda_comunicados.php",
        type: 'POST',
        data: {
            texto: texto
        }
    }).done(function (resp) {
        let data = JSON.parse(resp);
        var cadena ="";
        if(data.length > 0){
            for(let i=0;i<data.length;i++){
                cadena +='<a href="evento?id=' + data[i]["comunicado_id"] + '" class="py-1 text-justify" ><p>'+data[i]["com_titulo"]+'</p></a>';
            }
            document.getElementById("search__comunicados").innerHTML = cadena;
        }
    });
}

