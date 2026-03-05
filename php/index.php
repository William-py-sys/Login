

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bienvenido</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

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
.welcome-box{
    background:white;
    padding:60px;
    border-radius:20px;
    width:420px;
    box-shadow:0 15px 40px rgba(0,0,0,0.3);
    text-align:center;
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

.btn-custom{
    background:#243b55;
    color:white;
    font-weight:bold;
    transition:0.3s;
}

.btn-custom:hover{
    background:#141e30;
    transform:scale(1.05);
}

</style>
</head>
<body>

<div class="alert alert-success" role="alert">
  Usted inicio seccion correctamente <a href="#" class="alert-link">
</div>

<div class="welcome-box">

    <h1 class="fw-bold text-dark">BIENVENIDO</h1>
    <p class="text-muted mt-3">Has iniciado sesión correctamente.</p>

    <a href="login.php" class="btn btn-custom mt-4 w-100">
        Cerrar Sesión
    </a>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>