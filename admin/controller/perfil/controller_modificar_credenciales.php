<?php
require "../../model/model_perfil.php";
$MU = new Modelo_Perfil(); //Instaciamos
$id = $_POST['id'];
$user = $_POST['user'];
$password_actual = $_POST['passa'];
$password_nuevo =password_hash($_POST['passn'], PASSWORD_DEFAULT, ['cost' => 12]);

$consulta;
if (password_verify($password_actual, $MU->Traer_Password($id)[0])) {
    $consulta = $MU->Modificar_Credenciales($id,$user,$password_nuevo);
} else {
    $consulta = 2;
}

echo $consulta;
