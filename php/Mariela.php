<?php
<<<<<<< HEAD


include_once("conexion.php");

if (isset($_POST["entrar"])) {
    
     echo "Estoy entrando al login";

    if (empty($_POST["user"]) || empty($_POST["pass"])) {

        echo "<div class='alert alert-danger'>Campos vacíos</div>";
=======
include_once('../base_de_datos/conexion.php');

if (empty($_POST['usuario']) || empty($_POST['contrasena'])) {

    echo '<div class="alert alert-danger" role="alert">Los campos están vacíos</div>';
>>>>>>> 65c1a1653590db520eeabe587ef4422087962ad1

} else {

<<<<<<< HEAD
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

=======
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['contrasena']);

    $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");

    if ($datos = $sql->fetch_object()) {

        if ($password == $datos->password) {
            header("Location: inicioindex.php");
            exit();

        } else {

            echo '<div class="alert alert-danger" role="alert">Contraseña incorrecta</div>';
        }

    } else {

        echo '<div class="alert alert-danger" role="alert">Usuario no encontrado</div>';
>>>>>>> 65c1a1653590db520eeabe587ef4422087962ad1
    }
}

?>