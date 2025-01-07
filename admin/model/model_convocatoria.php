<?php
    require_once "model_conexion.php";
    class Modelo_Convocatoria extends ConexionDB{
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
        public function Registrar_Convocatoria($tipo,$titulo,$ruta1,$ruta2,$ruta3,$ruta4,$ruta5,$idarea){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_REGISTRAR_CONVOCATORIA(?,?,?,?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$tipo); 
            $query->bindParam(2,$titulo);
            $query->bindParam(3,$ruta1);
            $query->bindParam(4,$ruta2);
            $query->bindParam(5,$ruta3);
            $query->bindParam(6,$ruta4);
            $query->bindParam(7,$ruta5);
            $query->bindParam(8,$idarea);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }
        public function Modificar_Convocatoria($id,$titulo,$ruta1,$ruta2,$ruta3,$ruta4,$ruta5,$estado){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_MODIFICAR_CONVOCATORIA(?,?,?,?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->bindParam(2,$titulo);
            $query->bindParam(3,$ruta1);
            $query->bindParam(4,$ruta2);
            $query->bindParam(5,$ruta3);
            $query->bindParam(6,$ruta4);
            $query->bindParam(7,$ruta5);
            $query->bindParam(8,$estado);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }

        public function Eliminar_Convocatoria($id){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_ELIMINAR_CONVOCATORIA(?)";
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