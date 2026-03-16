<?php
include_once('./base_de_datos/configuracion.php');
include_once('./base_de_datos/conexion.php');

    if (isset($_POST['nombre']) && (isset(_POST['user']))
    {
        $nombre = _POST['nombre'];
        $correo = _POST['correo'];
        $usuario = _POST['usuario'];
        $pass = _POST['password'];
    }
    
    $INS = $link -> query(INSERT INTO usuario (Nombre, Correo, usuario, password) VALUES ("", "$nombre",
                                                                                                 "$correo", 
                                                                                                 "$usuario",
                                                                                                 "pass"); 
    
    if ($INS)
    {
        echo "Guardo"
    }
    else
    {
        echo "No guardo"
    }
?>