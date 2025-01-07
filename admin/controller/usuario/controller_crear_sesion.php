<?php
    session_start();
    $idusuario = htmlspecialchars($_POST['idusuario'],ENT_QUOTES,'UTF-8');
    $usuario = htmlspecialchars($_POST['usuario'],ENT_QUOTES,'UTF-8');
    $rol = htmlspecialchars($_POST['rol'],ENT_QUOTES,'UTF-8');
    $nombres = htmlspecialchars($_POST['nombres'],ENT_QUOTES,'UTF-8');
    $area = htmlspecialchars($_POST['area'],ENT_QUOTES,'UTF-8');
    $idpriarea = htmlspecialchars($_POST['idpriarea'],ENT_QUOTES,'UTF-8');
    $fotoempleado = htmlspecialchars($_POST['fotoempleado'],ENT_QUOTES,'UTF-8');
    $_SESSION['S_ID']=$idusuario;
    $_SESSION['S_USU']=$usuario;
    $_SESSION['S_ROL']=$rol;
    $_SESSION['S_NOMBRES']=$nombres;
    $_SESSION['S_AREA']=$area;
    $_SESSION['S_IDAREA']=$idpriarea;
    $_SESSION['S_FOTOEMPLE']=$fotoempleado;
?>