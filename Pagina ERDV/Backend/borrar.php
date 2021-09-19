<?php 
include("function.php");
$id = $_GET['cod_imagen'];
delete('imagenes','cod_imagen',$id);
header("location:../index.php");
?>