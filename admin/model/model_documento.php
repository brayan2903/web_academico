<?php
require_once "model_conexion.php";

class Modelo_Documento extends ConexionDB {

    // Método para listar documentos
    public function Listar_Documento($tipo) {
        try {
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_DOCUMENTOS(?)";
            $query = $c->prepare($sql);
            $query->bindParam(1, $tipo, PDO::PARAM_STR);
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

            $arreglo = array("data" => $resultado);
            return $arreglo;
        } catch (PDOException $e) {
            return array("error" => $e->getMessage());
        } finally {
            conexionDB::cerrar_conexion();
        }
    }

    // Método para registrar un documento
    public function Registrar_Documento($numdoc, $tipo, $titulo, $ruta1, $ruta2, $ruta3, $ruta4, $ruta5, $idarea) {
        try {
            $c = conexionDB::conexionPDO();
            
            // Añadimos un parámetro más en el llamado al SP
            $sql = "CALL SP_REGISTRAR_DOCUMENTO(?,?,?,?,?,?,?,?,?)";
            $query = $c->prepare($sql);

            // Añadimos la vinculación del nuevo parámetro
            $query->bindParam(1, $numdoc, PDO::PARAM_STR);
            $query->bindParam(2, $tipo, PDO::PARAM_STR);
            $query->bindParam(3, $titulo, PDO::PARAM_STR);
            $query->bindParam(4, $ruta1, PDO::PARAM_STR);
            $query->bindParam(5, $ruta2, PDO::PARAM_STR);
            $query->bindParam(6, $ruta3, PDO::PARAM_STR);
            $query->bindParam(7, $ruta4, PDO::PARAM_STR);
            $query->bindParam(8, $ruta5, PDO::PARAM_STR);
            $query->bindParam(9, $idarea, PDO::PARAM_INT);

            $query->execute();
            return $query->fetchColumn(); // Retorna el resultado del procedimiento
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        } finally {
            conexionDB::cerrar_conexion();
        }
    }


    // Método para modificar un documento
    public function Modificar_Documento($id, $numdoc, $titulo, $ruta1, $ruta2, $ruta3, $ruta4, $ruta5, $estado) {
        try {
            $c = conexionDB::conexionPDO();

            //  Ajustamos la llamada para 9 parámetros
            $sql = "CALL SP_MODIFICAR_DOCUMENTO(?,?,?,?,?,?,?,?,?)";
            $query = $c->prepare($sql);

            //  Enviamos los 9 parámetros en orden
            $query->bindParam(1, $id, PDO::PARAM_INT);
            $query->bindParam(2, $numdoc, PDO::PARAM_STR);  //  NUEVO PARÁMETRO
            $query->bindParam(3, $titulo, PDO::PARAM_STR);
            $query->bindParam(4, $ruta1, PDO::PARAM_STR);
            $query->bindParam(5, $ruta2, PDO::PARAM_STR);
            $query->bindParam(6, $ruta3, PDO::PARAM_STR);
            $query->bindParam(7, $ruta4, PDO::PARAM_STR);
            $query->bindParam(8, $ruta5, PDO::PARAM_STR);
            $query->bindParam(9, $estado, PDO::PARAM_STR);

            $query->execute();
            return $query->fetchColumn();
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        } finally {
            conexionDB::cerrar_conexion();
        }
    }


    // Método para eliminar un documento
    public function Eliminar_Documento($id) {
        try {
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_ELIMINAR_DOCUMENTO(?)";
            $query = $c->prepare($sql);
            $query->bindParam(1, $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchColumn();
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        } finally {
            conexionDB::cerrar_conexion();
        }
    }
}
?>
