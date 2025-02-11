<?php
require "../../model/model_documento.php"; // Importamos el modelo de documentos
$MU = new Modelo_Documento(); // Instanciamos el modelo de documentos

// Obtenemos y sanitizamos los datos enviados desde el formulario
$id = strtoupper(htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8'));
$titulo = strtoupper(htmlspecialchars($_POST['titulo'], ENT_QUOTES, 'UTF-8'));
$nombrearchivo1 = strtoupper(htmlspecialchars($_POST['nombrearchivo1'], ENT_QUOTES, 'UTF-8'));
$nombrearchivo2 = strtoupper(htmlspecialchars($_POST['nombrearchivo2'], ENT_QUOTES, 'UTF-8'));
$nombrearchivo3 = strtoupper(htmlspecialchars($_POST['nombrearchivo3'], ENT_QUOTES, 'UTF-8'));
$nombrearchivo4 = strtoupper(htmlspecialchars($_POST['nombrearchivo4'], ENT_QUOTES, 'UTF-8'));
$nombrearchivo5 = strtoupper(htmlspecialchars($_POST['nombrearchivo5'], ENT_QUOTES, 'UTF-8'));
$estado = strtoupper(htmlspecialchars($_POST['estado'], ENT_QUOTES, 'UTF-8'));

// Definimos las rutas para los archivos
$ruta1 = !empty($nombrearchivo1) ? 'controller/documentos/docs/' . $nombrearchivo1 : '';
$ruta2 = !empty($nombrearchivo2) ? 'controller/documentos/docs/' . $nombrearchivo2 : '';
$ruta3 = !empty($nombrearchivo3) ? 'controller/documentos/docs/' . $nombrearchivo3 : '';
$ruta4 = !empty($nombrearchivo4) ? 'controller/documentos/docs/' . $nombrearchivo4 : '';
$ruta5 = !empty($nombrearchivo5) ? 'controller/documentos/docs/' . $nombrearchivo5 : '';

// Llamamos al método del modelo para modificar el documento
$consulta = $MU->Modificar_Documento($id, $titulo, $ruta1, $ruta2, $ruta3, $ruta4, $ruta5, $estado);

// Enviamos la respuesta al frontend
echo $consulta;

// Si la consulta fue exitosa, movemos los archivos subidos a la carpeta correspondiente
if ($consulta == 1) {
    if (!empty($nombrearchivo1)) {
        move_uploaded_file($_FILES['archivoobj1']['tmp_name'], "../../docs/" . $nombrearchivo1);
    }
    if (!empty($nombrearchivo2)) {
        move_uploaded_file($_FILES['archivoobj2']['tmp_name'], "../../docs/" . $nombrearchivo2);
    }
    if (!empty($nombrearchivo3)) {
        move_uploaded_file($_FILES['archivoobj3']['tmp_name'], "../../docs/" . $nombrearchivo3);
    }
    if (!empty($nombrearchivo4)) {
        move_uploaded_file($_FILES['archivoobj4']['tmp_name'], "../../docs/" . $nombrearchivo4);
    }
    if (!empty($nombrearchivo5)) {
        move_uploaded_file($_FILES['archivoobj5']['tmp_name'], "../../docs/" . $nombrearchivo5);
    }
}
?>
