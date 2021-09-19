  <link rel="stylesheet" type="text/css" href="../css/subprod.css">
<?php (include 'nav.html') ?>
  <?php 
    include('Backend/conexion.php');
    $query = "select * from imagenes";
    $resultado = mysqli_query($conn,$query);
  ?>
    
    <title>SUBIR PRODUCTO</title>
    <script type="text/javascript" src="js/mayusinput.js"></script>

<center>
<form action="Backend/subir.php" method="post" enctype="multipart/form-data" id="formulariosubir">
          <div class="form-group">
              <input class="btn_ingreso" type="text" name="titulo" onkeyup="mayus(this);" placeholder="NOMBRE PRODUCTO" required>
          </div>
          <div class="form-group">
              <input class="btn_ingreso" placeholder="MEDIDA PRODUCTO" type="text" name="medida" required>
          </div>

          <div class="form-group">
              <input class="btn_ingreso" type="text" name="precio" required="" placeholder="PRECIO PRODUCTO">
          </div>

          <div class="form-group">
              <label class="selecimagen">Seleccione una Imagen</label><br>
              <input type="file" name="imagen" required>
          </div>

          <?php if(isset($_SESSION['mensaje'])){ ?>

	          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show" role="alert">
	         	<strong>
	         		<?php echo $_SESSION['mensaje']; ?>
	         	</strong>

		      	<button type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
		     	</button>
		     </div>

          <?php session_unset(); } ?>
          
          <input type="submit" value="Guardar" class="btn btn-primary" name="Guardar">
         </form>
</center>

         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>