<?php
include_once('./base_de_datos/configuracion.php');
include_once('./base_de_datos/conexion.php');

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['password'];
    
    $INS = $link -> mysqli_query("INSERT INTO usuario (Nombre, Correo, usuario, password) VALUES ("", '$nombre', '$correo', '$usuario', '$pass')"); 
    
    if ($INS)
    {
        echo "Guardo";
    }
    else
    {
        echo "No guardo";
    }
    
include_once('./');

?>