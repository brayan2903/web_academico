<?php
class ConexionDB{
    private $pdo;
    public function conexionPDO(){
        $host   = "localhost";
        $usuario = "root";
        $password = "";
        $dbname   = "web_ugel"; 
        
        try{
            $pdo = new PDO("mysql:host=$host;dbname=$dbname",$usuario,$password);
            $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo -> exec("set names utf8");
            return $pdo;
        }catch (PDOException $e){
            echo 'Fallo de Conexion: '.$e->getMessage();

        }
    }

    function cerrar_conexion(){
        $this->pdo = null; 
    }
}

?>