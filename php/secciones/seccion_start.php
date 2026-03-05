<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: loginindex.php");
    exit();
}

?>