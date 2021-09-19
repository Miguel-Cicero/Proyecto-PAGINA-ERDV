<link rel="stylesheet" type="text/css" href="css/contacto.css">
<script type="text/javascript" src="js/mayusinput.js"></script>

<?php include ('nav.html'); ?>

<center>

  <section id="formuconsulta">
    <div id="tituloconsulta">¿Tenés preguntas? Hacelas acá!</div>


    <form id="formularioconsulta" action="Backend/accionconsulta.php" method="POST">
      <ul>
        <li>
          <i class="icon-user"><input type="text" placeholder="NOMBRE Y APELLIDO" name="nombreapell" class="dato" onkeyup="mayus(this);" required></i></li>

        <li><i class="icon-phone"><input type="number" placeholder="TELEFONO" name="telefono" class="dato" required></i></li>

        <li><i class="icon-envelope"><input type="email" placeholder="CORREO" name="correo" class="dato" onkeyup="mayus(this);" required></i></li>

        <label><b>TU CONSULTA:</b></label>
        <li><textarea name="consulta" placeholder="TU CONSULTA.." onkeyup="mayus(this);" required></textarea></li>

        <button type="submit" class="btn btn-success" id="btnenviar">
            ENVIAR  <i class="icon-angle-right"></i>
        </button>
      </ul>
    </form>
  </section>
</center>

