<link rel="stylesheet" type="text/css" href="../css/borrar.css">


<div class="main-wrapper">
<h1>Eliminar Productos</h1>

<?php
	include("Backend/function.php");
?>


<table border="1" width="100%">
	<tr>
		<th width="41%">Nombres</th>
		<th width="50%">Apellidos</th>
		<th width="9%">Opcion</th>
	</tr>
<?php 
	$sql = "select * from imagenes";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->cod_imagen;?></td>
		<td><?php echo $row->nombre;?></td>
		<td>
   <a class="btn btn-primary" href="borrar.php?cod_imagen=<?php echo $row->cod_imagen;?>">Borrar</a>
        </td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>