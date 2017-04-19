<!DOCTYPE html>
<html lang="es">
    <head> 
        
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <link rel="sstylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg320mUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	    <!-- Bootstrap core CSS-->
	    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">

	    <!-- Custom styles for this template -->
	    <!--<link href="css/carousel.css" rel="stylesheet">-->

	    <link href="css/estilo.css" rel="stylesheet" type="text/css">

	    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | Teatro Marquina</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">
	            <h1 class="text-center">Teatro Marquina</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="index.php"> Inicio </a>
						 >> <a href="teatros.php"> Teatros </a>
						 >> Teatro Marquina
					</nav>
	            </div>
	            <hr class="featurette-divider">
	            <!--AHORA AQUÍ VA LA INFORMACIÓN DEL TEATRO -->
	            <div class="row">
	            	<nav class="text-center">
						<img src= "img/teatroMarquina.jpg" alt="teatroMarquina"><br><br>
						<p>El teatro Marquina es una sala de teatro situada en el barrio de Justicia en el distrito Centro en Madrid, España. Se levanta sobre un solar que el dramaturgo Eduardo Marquina legó al Montepío de Autores, de ahí que se diera su nombre al mismo.</p><br>
					</nav>
				</div>
				<div class="row">
					<div class="col-lg-2">
						<p class="subtitulo"> Horario: </p>
					</div>
					<div class="col-lg-4">
						<table> 
							<tr>
								<td> Lunes: </td>
								<td> Cerrado </td>
							</tr>
							<tr>
								<td> Martes: </td>
								<td> Cerrado </td>
							</tr>
							<tr>
								<td> Miércoles: </td>
								<td> 16:00 a 24:00 </td>
							</tr>
							<tr>
								<td> Jueves: </td>
								<td> 16:00 a 24:00 </td>
							</tr>
							<tr>
								<td> Viernes: </td>
								<td> 16:00 a 24:00 </td>
							</tr>
							<tr>
								<td> Sábado: </td30>
								<td> 16:00 a 24:00 </td>
							</tr>
							<tr>
								<td> Domingo: </td>
								<td> 16:00 a 24:00 </td>
							</tr>
						</table>
					</div>
					<div class="col-lg-2">
						<p class="subtitulo"> Dirección: </p>
					</div>
					<div class="col-lg-4">
						<p> Calle de Prim, 11  </p>
						<p>	28004 Madrid Madrid </p>
						<p>	España </p>
					</div>
				</div>
				<div class="row">
					<div class="text-center">
			 			<p> <img src="img/entrada.jpg" alt="entrada"> </p>
			 			<!--A mi forma de ver esto solo tiene que estar disponible para los que están logueados-->
						<p> Selección de entrada:</p>
							<select name="entrada">
								<option selected>Normal</option>
								<option>Niño</option>
								<option>Otro tipo de entrada</option>
							</select>
						<br><br><br><br>
						<!--ESTO CAMBIARÁ CON EL TIPO DE ENTRADA SELECCIONADO-->
						<p> Precio: 15,00€ </p>
						<button type="button" class="btn btn-success">Agregar a la cesta</button>
					</div>
	            </div>
	            
	            <hr class="featurette-divider">
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
	            ?>
	        </div>
        </div>
    
	    <!-- Bootstrap core JavaScript
	    ================================================== -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	    <!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	    <!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
	</body>
</html>