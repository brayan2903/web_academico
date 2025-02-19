<?php
require "../model/web_model_documentos.php"; // Llamamos al nuevo modelo de documentos
$MU = new Modelo_Documentos(); // Instancia del modelo

$consulta = $MU->Listar_Documentos(); // Llamada a la función sin parámetros

if ($consulta) {
    echo json_encode($consulta);
} else {
    echo '{
        "sEcho": 1,
        "iTotalRecords": "0",
        "iTotalDisplayRecords": "0",
        "aaData": []
    }';
}
?>
