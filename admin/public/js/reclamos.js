var tbl_reclamo;
function listar_reclamos() {
    tbl_reclamo = $("#tabla_reclamo").DataTable({
        "ordering": false,
        "bLengthChange": true,
        "searching": { "regex": false },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "pageLength": 10,
        "destroy": true,
        "async": true,
        "processing": true,
        "ajax": {
            "url": "../controller/reclamo/controller_listar_reclamo.php",
            type: 'POST'
        },
        "columns": [
            { "defaultContent": "" },
            { "data": "rec_documento" },
            { "data": "administrado" },
            { "data": "tipo_rec" },
            { "data": "rec_fecha_registro" },
            { "defaultContent": "<button class='mas btn btn-info btn-sm'><i class='fas fa-eye'></i></button>" },

        ],

        "language": idioma_espanol,
        select: true
    });
    tbl_reclamo.on('draw.td', function () {
        var PageInfo = $("#tabla_reclamo").DataTable().page.info();
        tbl_reclamo.column(0, { page: 'current' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1 + PageInfo.start;
        });
    });

}

$('#tabla_reclamo').on('click', '.mas', function () {
    let data = tbl_reclamo.row($(this).parents('tr')).data();
    if (tbl_reclamo.row(this).child.isShown()) {
        data = tbl_reclamo.row(this).data();
    }
    $("#modal_mas").modal('show');
    document.getElementById("txt_fechareg").value = data.rec_fecha_registro;
    document.getElementById("txt_tipoincidencia").value = data.tipo_rec;
    document.getElementById("txt_fechaincidencia").value = data.rec_fecha;
    document.getElementById("txt_horaincidencia").value = data.rec_hora;
    document.getElementById("txt_asunto_incidencia").value = data.rec_asunto;

    document.getElementById("txt_dni").value = data.rec_documento;
    document.getElementById("txt_nom").value = data.rec_nombre;
    document.getElementById("txt_apepat").value = data.rec_apepat;
    document.getElementById("txt_apemat").value = data.rec_apemat;
    document.getElementById("txt_celular").value = data.rec_telefono;
    document.getElementById("txt_email").value = data.rec_email;
    document.getElementById("txt_dire").value = data.rec_direccion;



    let extension = data.rec_archivo.split('.').pop();
    if (extension == "PDF") {
        document.getElementById("box__reclamo_view").innerHTML = '<iframe id="pdf-frame" style="display:block; width:100%; min-height:420px"'+
        'src="../'+data.rec_archivo+'" frameborder="0"></iframe>';
    } else {
        document.getElementById("box__reclamo_view").innerHTML = '<img src="../'+data.rec_archivo+'" alt=""style="display:block; width:100%; min-height:420px">';
    }


});