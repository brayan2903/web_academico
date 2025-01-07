<?php
    require_once "model_conexion.php";
    class Modelo_Directorio extends ConexionDB{
        public function Listar_Directorio(){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_DIRECTORIO()";
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
        public function Registrar_Directorio($cargo,$area,$empleado,$profesion,$orden){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_REGISTRAR_DIRECTORIO(?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$cargo); 
            $query->bindParam(2,$area);
            $query->bindParam(3,$empleado);
            $query->bindParam(4,$profesion);
            $query->bindParam(5,$orden);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }

        public function Actualizar_Directorio($id,$cargo,$area,$empleado,$profesion,$orden){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_MODIFICAR_DIRECTORIO(?,?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->bindParam(2,$cargo); 
            $query->bindParam(3,$area);
            $query->bindParam(4,$empleado);
            $query->bindParam(5,$profesion);
            $query->bindParam(6,$orden);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }

        public function Eliminar_Directorio($id){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_ELIMINAR_DIRECTORIO(?)";
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