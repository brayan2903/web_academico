<?php
require_once "model_conexion.php";
class Modelo_Usuario extends ConexionDB{
    public function Verificar_Usuario($usu,$con){
        $conexion = ConexionDB::conexionPDO();
            $sql = "CALL SP_VERIFICAR_USUARIO(?)";
            $arreglo = array();
            $query = $conexion->prepare($sql);
            $query->bindParam(1,$usu);
            $query->execute();
            $resultado = $query->fetchAll();
            foreach($resultado as $resp){
                if(password_verify($con,$resp['usu_contra'])){
                    $arreglo[] = $resp;
                }     
            }
            return $arreglo;
            ConexionDB::cerrar_conexion();
    }
    public function Listar_Usuario(){
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_LISTAR_USUARIO()";
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
    public function Registrar_Usuario($usu,$con,$ide,$ida,$rol){
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_REGISTRAR_USUARIO(?,?,?,?,?)";
        $arreglo = array();
        $query  = $c->prepare($sql);
        $query->bindParam(1,$usu); 
        $query->bindParam(2,$con); 
        $query->bindParam(3,$ide); 
        $query->bindParam(4,$ida); 
        $query->bindParam(5,$rol); 
        $query->execute();
        if($row = $query->fetchColumn()){
            return $row;
        }
        conexionDB::cerrar_conexion();
    }
    public function Cargar_Select_Empleado(){
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_CARGAR_SELECT_EMPLEADO()";
        $arreglo = array();
        $query  = $c->prepare($sql);
        $query->execute();
        $resultado = $query->fetchAll();
        foreach($resultado as $resp){
            $arreglo[]=$resp;
        }
        return $arreglo;
        conexionDB::cerrar_conexion();
    }
    public function Cargar_Select_Area(){
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_CARGAR_SELECT_AREA()";
        $arreglo = array();
        $query  = $c->prepare($sql);
        $query->execute();
        $resultado = $query->fetchAll();
        foreach($resultado as $resp){
            $arreglo[]=$resp;
        }
        return $arreglo;
        conexionDB::cerrar_conexion();
    }
    public function Modificar_Usuario($id,$ide,$ida,$rol){
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_MODIFICAR_USUARIO(?,?,?,?)";
        $query  = $c->prepare($sql);
        $query->bindParam(1,$id); 
        $query->bindParam(2,$ide); 
        $query->bindParam(3,$ida); 
        $query->bindParam(4,$rol); 
        $result = $query->execute();
        if($result){
            return 1;
        }else{
            return 0;
        }
        conexionDB::cerrar_conexion();
    }
    public function Modificar_Usuario_Estatus($id,$estatus){
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_MODIFICAR_USUARIO_ESTATUS(?,?)";
        $arreglo = array();
        $query  = $c->prepare($sql);
        $query->bindParam(1,$id); 
        $query->bindParam(2,$estatus); 
        $result = $query->execute();
        if($result){
            return 1;
        }else{
            return 0;
        }
        conexionDB::cerrar_conexion();
    }
}
