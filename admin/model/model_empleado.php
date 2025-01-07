<?php
    require_once "model_conexion.php";
    class Modelo_Empleado extends ConexionDB{
        public function Listar_Empleado(){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_LISTAR_EMPLEADO()";
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
        public function Registrar_Empleado($nro,$nom,$apepa,$apema,$fnac,$movil,$dire,$email,$foto){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_REGISTRAR_EMPLEADO(?,?,?,?,?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$nro); 
            $query->bindParam(2,$nom);
            $query->bindParam(3,$apepa);
            $query->bindParam(4,$apema);
            $query->bindParam(5,$fnac);
            $query->bindParam(6,$movil);
            $query->bindParam(7,$dire);
            $query->bindParam(8,$email);
            $query->bindParam(9,$foto);
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }

        public function Modificar_Empleado($id,$nro,$nom,$apepa,$apema,$fnac,$movil,$dire,$email,$esta,$rutaImg){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_MODIFICAR_EMPLEADO(?,?,?,?,?,?,?,?,?,?,?)";
            $arreglo = array();
            $query  = $c->prepare($sql);
            $query->bindParam(1,$id); 
            $query->bindParam(2,$nro); 
            $query->bindParam(3,$nom);
            $query->bindParam(4,$apepa);
            $query->bindParam(5,$apema);
            $query->bindParam(6,$fnac);
            $query->bindParam(7,$movil);
            $query->bindParam(8,$dire);
            $query->bindParam(9,$email);
            $query->bindParam(10,$esta);
            $query->bindParam(11,$rutaImg);
            
            $query->execute();
            if($row = $query->fetchColumn()){
                return $row;
            }
            conexionDB::cerrar_conexion();
        }

        public function Eliminar_Empleado($id){
            $c = conexionDB::conexionPDO();
            $sql = "CALL SP_ELIMINAR_EMPLEADO(?)";
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