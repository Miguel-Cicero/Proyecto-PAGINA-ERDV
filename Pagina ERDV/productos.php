<?php 
  include('Backend/conexion.php');
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn,$query);
?>

<link rel="stylesheet" type="text/css" href="/css/produ.css">

<?php  include('nav.html');  ?>

    <div class="ssublistado">
      <?php foreach($resultado as $row){ ?>

      <div class="card">

        <img class="iimgarticulo" src="Backend/imagenes/<?php echo $row['imagen']; ?>"  alt="...">

          <div id="ddatos">
            <strong id="codigoprod" class="ddato"><?php echo 'Código #' . $row['cod_imagen']; ?></strong>
            <br>
            <strong class="ddato"><?php echo $row['nombre']; ?></strong>
            <br>
            <strong class="ddato"><?php echo $row['medida']; ?></strong>
            <br>
            <strong class="ddato" id="precio"><?php echo '$' . $row['precio']; ?></strong>
          </div>

      </div>  

  <?php }?>
       </div>
    </div>


</body>
</html>

<?php include ('footer.php'); ?>