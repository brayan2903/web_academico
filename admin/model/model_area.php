<?php
    require_once "model_conexion.php";
    class Modelo_Area extends ConexionDB{
        public function Listar_Area(){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_AREA()";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->execute();
            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultado as $resp){
                $arreglo["data"][]=$resp;
            }
            return $arreglo;
            conexionDB::cerrar_conexion();
        }
        public function Registrar_Area($area){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_REGISTRAR_AREA(?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$area); 
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }
        public function Modificar_Area($id,$are,$esta){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_MODIFICAR_AREA(?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->bindParam(2,$are);
            $query->bindParam(3,$esta);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }

        public function Eliminar_Area($id){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_ELIMINAR_AREA(?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }

    }
?>