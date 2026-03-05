<?php


include_once("conexion.php");

if (isset($_POST["entrar"])) {
    
     echo "Estoy entrando al login";

    if (empty($_POST["user"]) || empty($_POST["pass"])) {

        echo "<div class='alert alert-danger'>Campos vacíos</div>";

    } else {

        $usuario = $_POST["user"];
        $password = $_POST["pass"];

        $sql = "SELECT * FROM usuario WHERE usuario='$usuario'";
        $resultado = mysqli_query($link, $sql);

        if ($datos = mysqli_fetch_object($resultado)) {

            if ($password == $datos->password) {
                
                echo "<div class='alert alert-success'>Inicio de sesión exitoso</div>";

                header("Location: ../php/index.php");
                exit();

            } else {

                echo "<div class='alert alert-danger'>Contraseña incorrecta</div>";
            }

        } else {

            echo "<div class='alert alert-danger'>Usuario no encontrado</div>";
        }

    }
}

?>