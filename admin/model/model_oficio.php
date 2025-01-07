<?php
    require_once "model_conexion.php";
    class Modelo_Oficio extends ConexionDB{
        public function Listar_Oficio(){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_OFICIO()";
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
        public function Registrar_Oficio($titulo,$descripcion,$rutaImg,$ruta,$idarea){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_REGISTRAR_OFICIO(?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$titulo); 
            $query->bindParam(2,$descripcion);
            $query->bindParam(3,$rutaImg);
            $query->bindParam(4,$ruta);
            $query->bindParam(5,$idarea);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }
        public function Modificar_Oficio($id,$titulo,$descripcion,$rutaImg,$ruta,$estado){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_MODIFICAR_OFICIO(?,?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->bindParam(2,$titulo);
            $query->bindParam(3,$descripcion);
            $query->bindParam(4,$rutaImg);
            $query->bindParam(5,$ruta);
            $query->bindParam(6,$estado);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }

        public function Eliminar_Oficio($id){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_ELIMINAR_OFICIO(?)";
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