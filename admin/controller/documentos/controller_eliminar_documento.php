<?php
require "../../model/model_documento.php"; // Importamos el modelo de documentos
$MU = new Modelo_Documento(); // Instanciamos el modelo de documentos

// Obtenemos y sanitizamos el ID enviado desde el formulario
$id = strtoupper(htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8'));

// Llamamos al método del modelo para eliminar el documento
$consulta = $MU->Eliminar_Documento($id);

// Enviamos la respuesta al frontend
echo $consulta;
?>
