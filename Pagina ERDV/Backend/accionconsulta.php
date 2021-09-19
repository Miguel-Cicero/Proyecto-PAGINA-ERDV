<?php

include("conexion.php");

    $nombreapell = $_POST['nombreapell'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $consulta = $_POST['consulta'];

    $insertar = "INSERT INTO tb_consultas (nombreapell, telefono, correo, consulta ) VALUES('$nombreapell', '$telefono', '$correo', '$consulta')";

    $resultado = mysqli_query($conn, $insertar);

    header("Location: ../index.php");

?>