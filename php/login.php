<?php
include_once('../base_de_datos/configuracion.php');
include_once('../base_de_datos/conexion.php');

if (isset($_POST["entrar"])) {

    if (empty($_POST["user"]) || empty($_POST["pass"])) {

        echo "<div class='alert alert-danger'>Campos vacíos</div>";

    } else {

        $usuario = $_POST["user"];
        $password = $_POST["pass"];

        $sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND password='$password'";
        $resultado = mysqli_query($link, $sql);

        if ($datos = mysqli_fetch_object($resultado)) {

            if ($password == $datos->password) {
                
                echo "<div class='alert alert-success'>Inicio de sesión exitoso</div>";

                $sql = "SELECT * FROM usuario WHERE usuario='$usuario'";
                
                header("Location: ../php/index.php");

            } else {

                echo "<div class='alert alert-danger'>Contraseña incorrecta</div>";
            }

        } else {

            echo "<div class='alert alert-danger'>Usuario no encontrado</div>";
        }

    }
}

include_once('../html/grupo 3.html');

?>