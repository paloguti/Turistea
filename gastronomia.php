<!DOCTYPE html>
<html lang="es">
    <head> 
        
        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="wid=device-wid, initial-scale=1, shrink-to-fit=no">

	    <link rel="sstylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg320mUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	    <!-- Bootstrap core CSS-->
	    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	    <link rel="stylesheet" href="css/bootstrap-eme.min.css" crossorigin="anonymous">

	    <!-- Custom styles for is template -->
	    <link href="css/carousel.css" rel="stylesheet">

	    <link href="css/estilo.css" rel="stylesheet" type="text/css">

	    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | Gastronomía</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">     
	            <h1 class="text-center">Gastronomía</h1>
	            <h3 class="text-center"> Nuestra mejor gastronomía</h3>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
					<nav class="ruta">
						<a href="index.php"> Inicio </a>
						 >> Gastronomía
					</nav>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row">
	                <h4>¡¡Conoce cuáles son los tres restaurantes y bares más valorados de Madrid!!</h4>
	            </div>
	            <div class="row">
	            	<!--LAS RESEÑAS FUNCIONARÁN MÁS ADELANTE -->
	            	<table class="table table-hover">  	
						<tr>
						    <td>Posición</td>
						    <td>Título</td> 
						    <td>Descripción</td>
						    <td>Localización</td>
						    <td>Reseñas</td>
	  					</tr>
					  	<tr>
					    	<td>1</td>
					    	<td><a href="lambuzo.php">Lambuzo</a></td>
					    	<td>El bar Lambuzo es uno de esos sitios que se nota que está montado con cariño. En Madrid existen dos locales de la misma compañía, uno en la calle Ponzano y otro en las Conchas. Para este post nos centraremos en el bar situado en la calle Ponzano que es el más concurrido en la ciudad. Este bar es ideal para ir de tapas con un toque andaluz. Podrás viajar directamente a Cadiz a través de las maravillosas tapas que este fantástico bar ofrece.</td>
					    	<td>CHAMBERÍ 
						    	Calle Ponzano, 8
								28010 Madrid 
								Madrid, España</td>
					    	<td>BRUH</td>
					  	</tr>
					  	<tr>
					    	<td>2</td>
					    	<td><a href="elMandil.php">El Mandil</a></td>
					    	<td>El Mandil es un restaurante situado en pleno corazón de Chueca. La decoración es rústica y elegante mezclandolo con un toque clásico a través de una enorme pared de ladrillo que recorre todo el local</td>
					    	<td>C/ Colón 5
								28040 Madrid 
								Madrid, España</td>
					    	<td>BRUH</td>
					  	</tr>
					  	<tr>
					    	<td>3</td>
					    	<td><a href="montesDeGalicia.php">Los Montes de Galicia</a></td>
					    	<td>Jose Espasandín, empresario y restaurador propietario de Los Montes de Galicia desde 1997 ha sido fiel a su compromiso con los comensales que han pasado por el restaurante de Azcona, 46. El concepto de Montes de Galicia es muy sencillo. Consiste en ofrecer una experiencia gastronómica completa, desde un picoteo en barra con vinos de prestigio por copas, variedad de recetas tanto clásicas como modernas y coctelería de autor. Y todo ello, en un entorno agradable y rodeados por un servicio que transmita pasión y ganas de hacer disfrutar al cliente.</td>
					    	<td>Calle Azcona, 46
								28028 Madrid
								Madrid, España</td>
					    	<td>BRUH</td>
					  	</tr>
					</table>
					<p> Deleítate con la mejor gastronomía que nuestra ciudad ofrece con maravillosos e increíbles platos que nuestro chefs madrileños preparan con amor y entusiasmos. ¿A que estás esperando para probarlos?</p>
					<p></p>
					<p> A continuación podrás deleitarte con nuestro top 3 de los mejores restaurantes de Madrid de todos los estilos. </p>
					<div class="row">
						<div class="col-lg-6">
	                		<a href="lambuzo.php"> <img class="img-circle" src= "img/lambuzo.jpg" alt="Lambuzo"> </a>              
	                	</div>
	                	<div class="col-lg-6">
							<a href="lambuzo.php"> <h2 class="featurette-heading"> Lambuzo </h2> </a>
							<p class="subtitulo"> Localización: </p>
					          	Calle Azcona, 46 <br>
					          	28028 Madrid Madrid <br>
					          	España <br><br>
				        	<p class="subtitulo"> Teléfono: </p>
				          		913552786 <br>
				          	<p class="subtitulo"> Plato estrella: </p>
				          		Espuda de Yogurt <br>
				          	<p class=" subtitulo"> Reseñas: </p>
				          		BRUH <br> <!--ESTO FALTA POR IMPLEMENTAR-->
				        </div>
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
	    <!-- Placed at e end of e document so e pages load faster -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	    <!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- Just to make our placeholder images work. Don't actually copy e next line! -->
	    <!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
	</body>
</html>

<!--b class="clar.."-->


<!DOCTYPE html>

	<body>
		
			Deleítate con la mejor gastronomía que nuestra ciudad ofrece con maravillosos e increíbles platos que nuestro chefs madrileños preparan con amor y entusiasmos. ¿A que estás esperando para probarlos?<br><br>

			A continuación podrás deleitarte con nuestro top 10 de los mejores restaurantes de Madrid de todos los estilos.

			
			

			<hr>

			<h2>El Mandil</h2>
			<img src="aw/Elmandil.jpg"><br>
			<p1 class="negrita">Localización</p1><br>
			Calle Colón, 5<br>
			28040 Madrid Madrid<br>
			España<br>
			<p1 class="negrita">Teléfono:</p1> 915316255<br>
			<p1 class="negrita">Plato estrella:</p1> Calamares con Cebolla Confitada y Alioli<br>
			<p1 class="negrita">Reseñas:</p1> BRUH<br>

			<hr>

			<h2>Los Montes de Galicia</h2>
			<img src="aw/Losmontesdegalicia.jpg"><br>
			<p1 class="negrita">Localización</p1><br>
			Calle Azcona, 46<br>
			28028 Madrid Madrid<br>
			España<br>
			<p1 class="negrita">Teléfono:</p1> 913552786<br>
			<p1 class="negrita">Plato estrella:</p1> Espuma de Yogurt<br>
			<p1 class="negrita">Reseñas:</p1> BRUH<br>
		</div>
	</body>
</html>