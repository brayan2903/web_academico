<?php
    require_once "web_model_conexion.php";
    class Modelo_Convocatoria extends ConexionDB{
        public function Listar_Convocatorias_Recientes($cantidad){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_CONVOCATORIAS_RECIENTES(?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$cantidad); 
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $resp){
                $arreglo[]=$resp;
            }
            return $arreglo;
            conexionDB::cerrar_conexion();
        }
        public function Traer_Documento_Com($id){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_TRAER_DOCUMENTO_COM(?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $resp){
                $arreglo[]=$resp;
            }
            return $arreglo;
            conexionDB::cerrar_conexion();
        }

        public function Buscar_Comunicado($texto){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_BUSCAR_COMUNICADO(?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$texto); 
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $resp){
                $arreglo[]=$resp;
            }
            return $arreglo;
            conexionDB::cerrar_conexion();
        }

        public function Listar_Comunicados_Recientes($cantidad){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_COMUNICADOS_RECIENTES(?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$cantidad); 
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $resp){
                $arreglo[]=$resp;
            }
            return $arreglo;
            conexionDB::cerrar_conexion();
        }
        public function Listar_Convocatoria($tipo){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_CONVOCATORIA(?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$tipo); 
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $resp){
                $arreglo["data"][]=$resp;
            }
            return $arreglo;
            conexionDB::cerrar_conexion();
        }
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