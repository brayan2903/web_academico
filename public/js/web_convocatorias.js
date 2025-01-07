var tbl_convocatorias;
function listar_convocatorias() {
    let tipo = document.getElementById("tipo_conv").value;
    tbl_convocatorias = $("#tabla_convocatorias").DataTable({
        "ordering": false,
        "bLengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[5, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "bLengthChange": false,
        "pageLength": 5,
        "destroy": true,
        "async": true,
        "processing": true,
        "responsive":true,
        "ajax": {
            "url": "controller/web_controller_listar_convocatorias.php",
            type: 'POST',
            data:{
                tipo:tipo
            }
        },
        "columns": [
            { "defaultContent": "" },
            { "data": "conv_titulo" },
            { "data": "fechapublicacion" , "className": "text-center"},
            {
                "data": "conv_bases", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '' ) {
                        return '';
                    } else {
                        let filename = row.conv_titulo + '.' + data.split('.').pop();
                        return '<a href="admin/'+data+'" download="BASES_'+filename+'" target="_blank" class="link-danger "><i class="fa-solid fa-file fa-2x"></i></a>';
                    }
                }
            },
            {
                "data": "conv_preliminar_cv",  "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.conv_titulo + '.' + data.split('.').pop();
                        return '<a href="admin/'+data+'" download="RESULTADO_CURRICULAR_PRELIMINAR_'+filename+'" target="_blank" class="link-danger "><i class="fa-solid fa-file fa-2x"></i></a>';
                    }
                }
            },
            {
                "data": "conv_reclamos", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.conv_titulo + '.' + data.split('.').pop();
                        return '<a href="admin/'+data+'" download="ABSOLUCION_RECLAMOS_'+filename+'" target="_blank" class="link-danger "><i class="fa-solid fa-file fa-2x"></i></a>';
                    }
                }
            },
            {
                "data": "conv_final_cv",  "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.conv_titulo + '.' + data.split('.').pop();
                        return '<a href="admin/'+data+'" download="RESULTADO_CURRICULAR_FINAL_'+filename+'" target="_blank" class="link-danger "><i class="fa-solid fa-file fa-2x"></i></a>';
                    }
                }
            },
            {
                "data": "conv_final", "className": "text-center", render: function (data, type, row) {
                    if (data == null || data == '') {
                        return '';
                    } else {
                        let filename = row.conv_titulo + '.' + data.split('.').pop();
                        return '<a href="admin/'+data+'" download="RESULTADO_FINAL_'+filename+'" target="_blank" class="link-danger "><i class="fa-solid fa-file fa-2x"></i></a>';
                    }
                }
            },
            {
                "data": "conv_estado", render: function (data, type, row) {
                    if (data == 'ABIERTO') {
                        return '<span class="badge bg-success  rounded-pill">EN PROCESO</span>';
                    } else {
                        return '<span class="badge bg-danger rounded-pill">FINALIZADO</span>';
                    }
                }
            },
        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_convocatorias.on('draw.td', function () {
        var PageInfo = $("#tabla_convocatorias").DataTable().page.info();
        tbl_convocatorias.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });
}
