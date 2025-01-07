<?php
    require_once "web_model_conexion.php";
    class Modelo_Oficio extends ConexionDB{
        public function Listar_Oficios(){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_OFICIO()";
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
        public function Traer_Documento_Ofi($id){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_TRAER_DOCUMENTO_OFI(?)";
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

        public function Buscar_Oficios($texto){
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

        public function Listar_Oficios_Recientes($cantidad){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_OFICIOS_RECIENTES(?)";
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