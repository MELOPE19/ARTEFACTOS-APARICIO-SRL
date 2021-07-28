<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Artefactos Aparicio SRL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Team programación">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/pascomputacion.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Nuestras raíces</h4>
				  <p>
				  Tenemos nuestra cantera propia en Ayacucho, del cual extraemos la piedra semipreciosa de ónix.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/pastopografia.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Productos</h4>
				  <p>
				  Lo que queremos transmitir a través de nuestros productos es la calidad y la pasión que nosotros le ponemos a cada uno de ellos, ya que cuidamos cada detalle.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/pasalgebra.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Comunidad</h4>
				  <p>
				  Todos nuestros campos de trabajo, son realizados manualmente. Nuestras máquinas son elaboradas por nosotros mismos y trabajamos siempre en equipo.
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>NUESTROS VALORES</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>RESPETO</h4>
					
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>INICIATIVA</h4>
					
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>PUNTUALIDAD</h4>
					
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>COMPROMISO</h4>
					
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>HUMILDAD</h4>
					
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>OPTIMISMO</h4>
					
				</div>
			</div>

	
			<div class="span12">
				<div class="well well-small">
					<h4 >Relación de trabajadores</h4>
					<a href="http://localhost/trabajadores/index.php"><small>Ver detalles</small></a>
				</div>
			</div>
		
			
</div>
<h3>Nuestros trabajadores del mes</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">APARICIO ALARCÓN, Carlos</h3>	
	<img src="images/algebra.jpg" alt="#"/>
	<div class="caption">
	<h5>Destacó en:</h5>	
	<p align="justify">
	
	Carlos llegó puntual al trabajo, realizó sus deberes con excelente calidad y aportó nuevas ideas a la empresa.
	</p>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">APARICIO ALARCÓN, Manuel</h3>	
	<img src="images/topografia.jpg" />
	<div class="caption">
	<h5> Destacó en:</h5>	
	<p align="justify">
	
	Manuel se desenvolvió con optimismo durante todo el mes de julio, alentando a sus compañeros de trabajo a llegar a su meta a pesar de cualquier obstáculo.
	</p>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">APARICIO ALARCÓN, Rolando</h3>	
	<img src="images/computacion.jpg"/>
	<div class="caption">
	<h5>Destacó en:</h5>	
	<p align="justify">
	
	Rolando siempre tiene la iniciativa de organizar actividades de calentamiento antes de iniciar nuestras actividades laborales. La cual hace que todo el equipo se sienta motivado para cumplir sus metas.
	</p>
	<br/>
	</div>
	</div>
	</div>


</div>
<hr/>
<div class="row">
	<div class="span6">
	<div class="well well-small">
		<h3>RECORDAR</h3>	
		<p>
		** Pileta ajedréz - Miércoles 11 de agosto.</p>
		<br>
		<p>** 2 Tigres  - Jueves 12 de agosto.</p>
		<br>
		<p>** 1 Gruta  -  Viernes 13 de agosto.
		</p>
	</div>
	</div>
	<div class="span6">
	<div class="well well-small">
		<h3> FRASE DEL MES</h3>
		<h5>«Si todos se mueven hacia adelante juntos, entonces el éxito ocurre de forma automática.»</h5>
		<br>
		<p> (HENRY FORD) </p>	
		
		
	</div>
	</div>
	
	
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Team programación <br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>