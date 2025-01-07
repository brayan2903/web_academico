<?php
    require_once "model_conexion.php";
    class Modelo_Slider extends ConexionDB{
        public function Listar_Slider(){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_SLIDER()";
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
        public function Registrar_Slider($titulo,$descripcion,$rutaImg,$orden,$idarea){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_REGISTRAR_SLIDER(?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$titulo); 
            $query->bindParam(2,$descripcion);
            $query->bindParam(3,$rutaImg);
            $query->bindParam(4,$orden);
            $query->bindParam(5,$idarea);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }
        public function Modificar_Slider($id,$titulo,$descripcion,$rutaImg,$orden,$estado){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_MODIFICAR_SLIDER(?,?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->bindParam(2,$titulo);
            $query->bindParam(3,$descripcion);
            $query->bindParam(4,$rutaImg);
            $query->bindParam(5,$orden);
            $query->bindParam(6,$estado);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }

        public function Eliminar_Slider($id){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_ELIMINAR_SLIDER(?)";
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