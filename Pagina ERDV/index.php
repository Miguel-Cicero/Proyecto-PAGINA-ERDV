<link rel="stylesheet" type="text/css" href="css/slider.css">
<link rel="stylesheet" type="text/css" href="css/recomendados.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="css/custom.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script defer src="js/slider.js"></script>


<?php 
	include 'nav.html';
?>

<section id="container-slider">	
   <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
   <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
   <ul class="listslider">
     <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
     <li><a itlist="itList_1" href="#"></a></li>
     <li><a itlist="itList_2" href="#"></a></li>
   </ul>
   <ul id="slider">
     <li style="background-image: url('img/slider1.png');  z-index:0; opacity: 1;">
       </div>
     </li>
     <li style="background-image: url('img/slider2.png'); ">
       <div class="content_slider" >
         <div>
           <h2>NUESTROS PRODUCTOS!</h2>
	   <a href="productos.php" class="btnSlider">Ver más</a>
	 </div>
       </div>
     </li>
     <li style="background-image: url('img/slider3.png'); ">
       <div class="content_slider" >
         <div>
           <h2>¿COMO COMPRAR?</h2>
	   <p>Ingresá acá si tenes dudas de como comprar!</p>
	   <a href="#" class="btnSlider">Ver más</a>
	 </div>
       </div>
     </li>
  </ul>
</section>

<center>
  <img src="img/vector2.png" width="300">
</center>

<?php 
  include('Backend/conexion.php');
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn,$query);
?>

<div class="recomendados">ALGUNOS DE NUESTROS PRODUCTOS</div>



    <div id="exampleSlider">
       <div class="MS-content">
          <?php foreach($resultado as $row){ ?>
           <div class="item">
               <img width="auto" height="270" class="iimgarticulo" src="Backend/imagenes/<?php echo $row['imagen']; ?>"  alt="...">
           </div>
           <?php }?>
       </div>
       <div class="MS-controls">
           <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
           <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
       </div>
   </div>


  
       </div>
    </div>

    <!-- Include jQuery -->
    <script src="js/jquery-2.2.4.min.js"></script>

    <!-- Include Multislider -->
    <script src="js/multislider.min.js"></script>

    <!-- Initialize element with Multislider -->
    <script>
    $('#exampleSlider').multislider({
        interval: 4000,
        slideAll: true,
        duration: 1500
    });
    </script>


    <?php include ('footer.php'); ?>