<?php
    require_once "web_model_conexion.php";
    class Modelo_Directorio extends ConexionDB{
        public function Listar_Directorio(){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_DIRECTORIO()";
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

    }
?>