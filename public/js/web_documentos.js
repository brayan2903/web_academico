//TRAER DOCUEMENTOS OFICO UNICO
function ver_documento(id){
    $.ajax({
        url: "controller/web_controller_traer_oficio.php",
        type: 'POST',
        data: {
            id: id
        }
    }).done(function (resp) {
        data = JSON.parse(resp);
        document.getElementById('principal_title').innerHTML = data[0]['ofi_titulo'];
        document.getElementById('titulo_com').innerHTML = data[0]['ofi_titulo'];
        document.getElementById('descripcion_com').innerHTML = data[0]['ofi_descripcion'];
        document.getElementById('fecha_com').innerHTML = Calcular_Fecha(data[0]['ofi_feccreacion']);
        document.getElementById('document_link').href = "admin/"+data[0]['ofi_documento'];
        document.getElementById('document_link').download = data[0]['ofi_titulo'];
        document.getElementById('vista_previa').src = "admin/"+data[0]['ofi_img_prev'];
        verficar_datos_doc();
    });

}
function Calcular_Fecha(fechahora) {

    let fecha = new Date(fechahora);
    let fecha2 = fecha.toLocaleDateString();
    let fechaArray = fecha2.split('/');
    let dia = fechaArray[0];
    let mes = fechaArray[1];
    let anio = fechaArray[2];
    let mesLetra ="";
    if (dia.length < 2) {
        dia = '0' + dia;
    }
    if (mes.length < 2) {
        mes = '0' + mes;
    }
    switch (mes){
        case '01':
            mesLetra="Enero";
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
function verficar_datos_doc(){
    let caja = document.getElementById("box__all_document");
    let imagen = document.getElementById("vista_previa");
    if(imagen.src =="" || imagen.src == null){
        caja.style.display = "none";
    }else{
        caja.style.display = "flex";
    }
}
function listar_documentos() {
    tbl_documentos = $("#tabla_documentos").DataTable({
        "ordering": false,
        "bLengthChange": false,
        "searching": true, // Habilitar la búsqueda
        "lengthMenu": [[5, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
        "pageLength": 50,
        "destroy": true,
        "processing": true,
        "responsive": true,
        "ajax": {
            "url": "controller/web_controller_lista_documentos.php",
            "type": "POST"
        },
        "columns": [
            { "defaultContent": "" }, // Para numeración automática
            { "data": "doc_tipo" },
            { "data": "num_doc" },
            
            { "data": "doc_titulo" },
            { "data": "fechapublicacion", "className": "text-center" },
            {
                "data": "doc_archivo1", "className": "text-center", render: function (data, type, row) {
                    return data 
                        ? `<button class="btn btn-link text-danger descargar-archivo" 
                                  onclick="descargarArchivo('admin/controller/documentos/${data}')">
                            <i class="fa-solid fa-file-pdf fa-2x"></i>
                           </button>` 
                        : '';
                }
            },
            {
                "data": "doc_archivo2", "className": "text-center", render: function (data, type, row) {
                    return data 
                        ? `<button class="btn btn-link text-primary descargar-archivo" 
                                  onclick="descargarArchivo('admin/controller/documentos/${data}')">
                            <i class="fa-solid fa-file-pdf fa-2x"></i>
                           </button>` 
                        : '';
                }
            },            
            { "data": "area_nombre" },
            
            {
                "data": "doc_estado", "className": "text-center", render: function (data, type, row) {
                    return data === 'ABIERTO' 
                        ? '<span class="badge" style="background-color: blue; color: white; padding: 5px; border-radius: 10px;">ABIERTO</span>' 
                        : '<span class="badge" style="background-color: gray; color: white; padding: 5px; border-radius: 10px;">FINALIZADO</span>';
                }
            }
            
        ],
        "language": idioma_espanol,
        "dom": '<"top"lf>rt<"bottom"ip><"clear">', // Mueve la barra de búsqueda
        select: true,
        "initComplete": function () {
            // Mueve la barra de búsqueda a la izquierda dentro del JavaScript
            $("#tabla_documentos_filter").css({
                "text-align": "left",
                "float": "left",
                "margin-bottom": "10px"
            });

            $("#tabla_documentos_filter label").css({
                "font-weight": "bold",
                "color": "#333"
            });

            $("#tabla_documentos_filter input").css({
                "margin-left": "10px",
                "border-radius": "5px",
                "border": "1px solid #ddd",
                "padding": "5px",
                "width": "250px"
            });

            // Mejorar la paginación
            $(".dataTables_paginate .paginate_button").css({
                "background-color": "#007bff",
                "color": "white",
                "border-radius": "5px",
                "padding": "5px 10px",
                "margin": "2px"
            });

            $(".dataTables_paginate .paginate_button:hover").css({
                "background-color": "#0056b3"
            });

            // Cambiar el estilo del encabezado de la tabla
            $("#tabla_documentos thead").css({
                "background-color": "#2596be",
                "color": "white",
                "text-align": "center"
            });

            $("#tabla_documentos tbody td").css({
                "vertical-align": "middle"
            });
        }
    });

    // Enumerar las filas automáticamente
    tbl_documentos.on('draw.td', function () {
        var PageInfo = $("#tabla_documentos").DataTable().page.info();
        tbl_documentos.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}
function descargarArchivo(ruta) {
    let link = document.createElement("a");
    link.href = ruta;
    link.download = "";
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
