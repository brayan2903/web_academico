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
    public function Registrar_Documento($tipo, $titulo, $ruta1, $ruta2, $ruta3, $ruta4, $ruta5, $idarea) {
        try {
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_REGISTRAR_DOCUMENTO(?,?,?,?,?,?,?,?)";
            $query = $c->prepare($sql);
            
            $query->bindParam(1, $tipo, PDO::PARAM_STR);
            $query->bindParam(2, $titulo, PDO::PARAM_STR);
            $query->bindParam(3, $ruta1, PDO::PARAM_STR);
            $query->bindParam(4, $ruta2, PDO::PARAM_STR);
            $query->bindParam(5, $ruta3, PDO::PARAM_STR);
            $query->bindParam(6, $ruta4, PDO::PARAM_STR);
            $query->bindParam(7, $ruta5, PDO::PARAM_STR);
            $query->bindParam(8, $idarea, PDO::PARAM_INT);
            
            // Validar si idarea es NULL
            // if ($idarea === null) {
            //     $query->bindValue(8, null, PDO::PARAM_NULL);
            // } else {
            //     $query->bindParam(8, $idarea, PDO::PARAM_INT);
            // }

            $query->execute();
            return $query->fetchColumn(); // Retorna el ID insertado o un valor de éxito
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        } finally {
            conexionDB::cerrar_conexion();
        }
    }

    // Método para modificar un documento
    public function Modificar_Documento($id, $titulo, $ruta1, $ruta2, $ruta3, $ruta4, $ruta5, $estado) {
        try {
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_MODIFICAR_DOCUMENTO(?,?,?,?,?,?,?,?)";
            $query = $c->prepare($sql);
            
            $query->bindParam(1, $id, PDO::PARAM_INT);
            $query->bindParam(2, $titulo, PDO::PARAM_STR);
            $query->bindParam(3, $ruta1, PDO::PARAM_STR);
            $query->bindParam(4, $ruta2, PDO::PARAM_STR);
            $query->bindParam(5, $ruta3, PDO::PARAM_STR);
            $query->bindParam(6, $ruta4, PDO::PARAM_STR);
            $query->bindParam(7, $ruta5, PDO::PARAM_STR);
            $query->bindParam(8, $estado, PDO::PARAM_INT);

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
