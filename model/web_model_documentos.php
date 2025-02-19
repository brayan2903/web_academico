<?php
require_once "web_model_conexion.php";

class Modelo_Documentos extends ConexionDB {
    public function Listar_Documentos(){
        $c = conexionDB::conexionPDO(); // Conexión a la BD
        $sql = "CALL SP_LISTAR_WDOCUMENTOS()"; // Llamada al procedimiento almacenado
        $arreglo = array();
        
        try {
            $query  = $c->prepare($sql);
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($resultado as $resp){
                $arreglo["data"][] = $resp;
            }
    
            return $arreglo;
        } catch (PDOException $e) {
            return ["error" => $e->getMessage()];
        } finally {
            conexionDB::cerrar_conexion(); // Cierra la conexión
        }
    }
}
?>
