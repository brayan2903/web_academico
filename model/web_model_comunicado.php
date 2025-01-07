<?php
    require_once "web_model_conexion.php";
    class Modelo_Comunicado extends ConexionDB{
        public function Listar_Comunicado(){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_COMUNICADO()";
            $arreglo = array();
            $query  = $c->prepare($sql);
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

    }
?>