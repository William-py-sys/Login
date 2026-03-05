<?php
if(!empty($_POST['btn_entrar'])) {
    if(empty($_POST['usuario']) && empty($_POST['contrasena'])) {
        echo '<div class="alert alert-danger" role="alert">Los Campos Estan Vacios</div>';
    } else {
        $usuario=$_POST['usuario'];
        $password=$_POST['contrasena'];
        $usuario = htmlspecialchars($usuario);
        $password = htmlspecialchars($password);
        $sql=$conexion->query("select * from usuario where usuario='$usuario' and password='$password' ");
        if($datos=$sql->fetch_object()) {
            header("location:inicio.php"); //aqui va la pagina despues del login
        } else {
            echo '<div class="alert alert-danger" role="alert">ACCESO DENEGADO!!</div>';
        }
    }

}

?>