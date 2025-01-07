<?php
require_once "model_conexion.php";
class Modelo_Modal extends ConexionDB
{
    public function Listar_Modal()
    {
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_LISTAR_MODAL()";
        $arreglo = array();
        $query  = $c->prepare($sql);
        $query->execute();
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $resp) {
            $arreglo["data"][] = $resp;
        }
        return $arreglo;
        conexionDB::cerrar_conexion();
    }

    public function Registrar_Modal($comunicado,$ruta,$idarea)
    {
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_REGISTRAR_MODAL(?,?,?)";
        $arreglo = array();
        $query  = $c->prepare($sql);
        $query->bindParam(1, $comunicado);
        $query->bindParam(2, $ruta);
        $query->bindParam(3, $idarea);
        $query->execute();
        if ($row = $query->fetchColumn()) {
            return $row;
        }
        conexionDB::cerrar_conexion();
    }
    public function Modificar_Modal($id,$comunicado,$ruta)
    {
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_MODIFICAR_MODAL(?,?,?)";
        $arreglo = array();
        $query  = $c->prepare($sql);
        $query->bindParam(1, $id);
        $query->bindParam(2, $comunicado);
        $query->bindParam(3, $ruta);
        $query->execute();
        if ($row = $query->fetchColumn()) {
            return $row;
        }
        conexionDB::cerrar_conexion();
    }

    public function Eliminar_Modal($id){
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_ELIMINAR_MODAL(?)";
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
