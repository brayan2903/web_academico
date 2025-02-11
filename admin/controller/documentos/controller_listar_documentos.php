<?php
require "../../model/model_documento.php"; // Importamos el modelo adaptado
$MU = new Modelo_Documento(); // Instanciamos el modelo de documentos

// Obtenemos y sanitizamos el parámetro enviado desde el frontend
$tipo = strtoupper(htmlspecialchars($_POST['tipo'], ENT_QUOTES, 'UTF-8'));

// Llamamos al método para listar documentos
$consulta = $MU->Listar_Documento($tipo); 

// Validamos si la consulta devuelve datos y formateamos la respuesta
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
