<?php
require_once "model_conexion.php";
class Modelo_Reclamo extends ConexionDB
{
    public function Listar_Reclamo()
    {
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_LISTAR_RECLAMO()";
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
    public function Registrar_Reclamo($tipodoc, $nrodoc, $nombre, $apepat, $apemat, $dire, $telefono, $email, $tipoincidencia, $fecha, $hora, $asunto, $ruta)
    {
        $c = conexionDB::conexionPDO();
        $sql = "CALL SP_REGISTRAR_RECLAMO(?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $arreglo = array();
        $query  = $c->prepare($sql);
        $query->bindParam(1, $tipodoc);
        $query->bindParam(2, $nrodoc);
        $query->bindParam(3, $nombre);
        $query->bindParam(4, $apepat);
        $query->bindParam(5, $apemat);
        $query->bindParam(6, $dire);
        $query->bindParam(7, $telefono);
        $query->bindParam(8, $email);
        $query->bindParam(9, $tipoincidencia);
        $query->bindParam(10, $fecha);
        $query->bindParam(11, $hora);
        $query->bindParam(12, $asunto);
        $query->bindParam(13, $ruta);
        $query->execute();
        if ($row = $query->fetchColumn()) {
            return $row;
        }
        conexionDB::cerrar_conexion();
    }
}
