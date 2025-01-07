<?php
require_once "web_model_conexion.php";
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
            $arreglo[] = $resp;
        }
        return $arreglo;
        conexionDB::cerrar_conexion();
    }
}
