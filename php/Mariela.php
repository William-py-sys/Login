<?php
if(!empty($_POST['btn_entrar'])) {
    if(empty($_POST['usuario']) && empty($_POST['contrasena'])) {
        echo '<div class="alert alert-danger" role="alert>Los Campos Estan Vacios</div>';
    } else {
        $usuario=$_POST['usuario'];
        $password=$_POST['contrasena'];
        $sql=$conexion->query("select * from usuario where usuario='$usuario' and password='$password' ");
        if($datos=$sql ->fetch:object()) {
            header("location:inicio.php");
        } else {
            echo '<div class="alert alert-danger" role="alert>ACCESO DENEGADO!!</div>';
        }
    }

}

?>