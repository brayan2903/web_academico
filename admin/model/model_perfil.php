<?php
    require_once "model_conexion.php";
    class Modelo_Perfil extends ConexionDB{
        public function Traer_Perfil($id){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_TRAER_PERFIL(?)";
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

        public function Modificar_Perfil($id,$dni,$nombre,$paterno,$materno,$cel,$nac,$email,$dir,$rutaImg){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_MODIFICAR_PERFIL(?,?,?,?,?,?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->bindParam(2,$dni); 
            $query->bindParam(3,$nombre);
            $query->bindParam(4,$paterno);
            $query->bindParam(5,$materno);
            $query->bindParam(6,$cel);
            $query->bindParam(7,$nac);
            $query->bindParam(8,$email);
            $query->bindParam(9,$dir);
            $query->bindParam(10,$rutaImg);
            
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }

        public function Traer_Password($id){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_TRAER_PASSWORD(?)";
            $arreglo = "";
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->execute();
            $resultado = $query->fetchAll();
            foreach($resultado as $resp){
                $arreglo=$resp;
            }
            return $arreglo;
            conexionDB::cerrar_conexion();
        }

        public function Modificar_Credenciales($id,$user,$password_nuevo){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_MODIFICAR_CREDENCIALES(?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->bindParam(2,$user);
            $query->bindParam(3,$password_nuevo);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }
        

    }
?>