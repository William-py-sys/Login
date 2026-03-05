<?php
if (!empty($_POST['btn_entrar'])) {

    if (empty($_POST['usuario']) || empty($_POST['contrasena'])) {

        echo '<div class="alert alert-danger" role="alert">Los campos están vacíos</div>';

    } else {

        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['contrasena']);

        $sql = $conexion->query("SELECT * FROM usuario WHERE usuario='$usuario'");

        if ($datos = $sql->fetch_object()) {

            if ($password == $datos->password) {
                header("Location: inicio.php");
                exit();

            } else {

                echo '<div class="alert alert-danger" role="alert">Contraseña incorrecta</div>';
            }

        } else {

            echo '<div class="alert alert-danger" role="alert">Usuario no encontrado</div>';
        }
    }
}
?>