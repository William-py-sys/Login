<?php

include_once("configuracion.php");

// Link conexion con variables
// SLink = mysqli_connect($host, $user, $password, $database);
// Link conexion con constantes mas recomendable
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

// comprobar
if (mysqli_connect_errno()) {
echo mysqli_connect_errno();
exit();
} else {
//echo ("Conexión exitosa!!!");
}

if(isset($_POST['btn_entrar'])){
    if (empty($_POST['usuario']) || empty($_POST['contrasena'])) {

        echo '<div class="alert alert-danger" role="alert">Los campos están vacíos</div>';

    } else {

        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['contrasena']);

        $sql = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario='$usuario'");

        if ($datos = mysqli_fetch_object($sql)) {

            if ($password == $datos->password) {
                header("Location: inicioindex.php");
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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - Grupo 3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
    height:100vh;
    background: linear-gradient(135deg,#141e30,#243b55);
    display:flex;
    justify-content:center;
    align-items:center;
    font-family: Arial, Helvetica, sans-serif;
}

/* Tarjeta */
.login-box{
    background:white;
    padding:40px;
    border-radius:20px;
    width:420px;
    box-shadow:0 15px 40px rgba(0,0,0,0.3);
    animation: aparecer 0.8s ease;
}

/* Animación */
@keyframes aparecer{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* Iconos dentro del input */
.input-group-text{
    background:#243b55;
    color:white;
    border:none;
}

/* Botón */
.btn-login{
    background:#243b55;
    color:white;
    font-weight:bold;
    transition:0.3s;
}

.btn-login:hover{
    background:#141e30;
    transform:scale(1.03);
}

a{
    text-decoration:none;
}

</style>

</head>

<body>

<div class="login-box">

    <div class="text-center mb-4">
        <h2 class="fw-bold">Bienvenido</h2>
        <p class="text-muted">Inicia sesión en tu cuenta</p>
    </div>

    <form action="" method="POST">

       
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fa-solid fa-user"></i>
            </span>
            <input type="text"
                   name="usuario"
                   class="form-control"
                   placeholder="Usuario"
                   required>
        </div>

       
        <div class="input-group mb-4">
            <span class="input-group-text">
                <i class="fa-solid fa-lock"></i>
            </span>
            <input type="password"
                   name="contrasena"
                   class="form-control"
                   placeholder="Contraseña"
                   required>
        </div>

       
        <div class="d-grid mb-3">
            <button type="submit"
                    name="btn_entrar"
                    class="btn btn-login">
                <i class="fa-solid fa-right-to-bracket"></i>
                Entrar
            </button>
        </div>

       
        <div class="text-center">
            <small>¿No tienes cuenta?</small><br>
            <a href="registro.php" class="fw-bold">
                Crear una cuenta
            </a>
        </div>

    </form>

</div>

<hr>
    <footer>
        <strong>  © <?php echo date("Y"); ?> Programación I</strong>
    </footer>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>