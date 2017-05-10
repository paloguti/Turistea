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
	    <link href="css/carousel.css" rel="stylesheet">

	    <link href="css/estilo.css" rel="stylesheet" type="text/css">

	    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <title>Turistea | Parques Temáticos</title>



    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido"> 
	            <h1 class="text-center">Parques temáticos</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Parques temáticos</li>
					</ol>
	            </div>
	            <div class="row">
                    <div class="aniadir">
                        <a href="" onClick="$('#formularioParques').modal()" data-toggle="modal">
                        <span class="glyphicon glyphicon-plus"></span><h4>Añadir</h4> </a>
                        <div class="limpiar"></div> 
                    </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-6">
	                	<a href="zoodeMadrid.php"> <img class="img-circle" src= "img/zoodeMadrid.jpg" alt="zoodeMadrid"> </a>
	                </div>
	                <div class="col-lg-6">
						<a href="zoodeMadrid.php"> <h2> Zoo de Madrid </h2> </a>
						<p class="subtitulo"> Dirección: </p>
						Casa de Campo s/n <br>
						28011 Madrid Madrid <br>
						España <br>
						<br>
						<!--A mi forma de ver esto solo tiene que estar disponible para los que están logueados-->
						Precio: 23,30€ <br>
						Selección de entrada: <br>
							<select name="entrada">
								<option selected>General</option>
								<option>Reducida</option>
								<option>Familia Numerosa general(>65 años)</option>
								<option>Familia Numerosa reducida </option>
								<option>Persona discapacitada + acompañante gratis</option>
								<option>Gratuita</option>
							</select>
						<br><br><br><br>
						<button type="button" class="btn btn-success">Agregar a la cesta</button>
						Esto es un botón de agregar a la cesta <br>
	                </div>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row">
	                <div class="col-lg-6">
	                	<a href="faunia.php"> <h2> Faunia </h2> </a>
	                    <p class="subtitulo"> Dirección: </p>
	                   		Av. Comunidades, 28 <br>
							28032 Madrid Madrid <br>
							España <br>
						<br>
						Precio: 26,45€ <br>
						Selección de entrada: <br>
							<select name="entrada">
								<option selected>General</option>
								<option>Infantil</option>
								<option>Senior</option>
								<option>Persona Discapacidad + acompañante </option>
								<option>Familia Numerosa Adulto </option>
								<option>Familia Numerosa Infantil </option>
								<option>Menores de 3 años</option>
							</select>
						<br><br><br><br>
						<button type="button" class="btn btn-success">Agregar a la cesta</button>
						Esto es un botón de agregar a la cesta <br>
	                </div>
	                <div class="col-lg-6">
						<a href="faunia.php"> <img class="img-circle" src= "img/faunia_0.jpg" alt="faunia"> </a>
	                </div>
	            </div>
	            <hr class="featurette-divider">
	            <div class="row">
	                <div class="col-lg-6">
	                   <a href="aquopolisVillanueva.php"> <img class="img-circle" src= "img/aquopolis.jpg" alt="aquopolisVillanueva"> </a>
	                </div>
	                <div class="col-lg-6">
						<a href="aquopolisVillanueva.php"> <h2> Aquopolis Villanueva </h2> </a>
						<p class="subtitulo"> Dirección: </p>
							Avenida de la Dehesa, s/n <br>
							28691 Villanueva de la Cañada Madrid <br>
							España <br>
						<br>
						<!--A mi forma de ver esto solo tiene que estar disponible para los que están logueados-->
						Precio: 25,95€ <br>
						Selección de entrada: <br>
							<select name="entrada">
								<option selected>General (+140cm)</option>
								<option>Infantil (90-140cm)</option>
								<option>Senior (>65 años)</option>
								<option>Persona Discapacidad </option>
								<option>Gratis (< 90 cm) </option>
							</select>
						<br><br><br><br>
						<button type="button" class="btn btn-success">Agregar a la cesta</button>
						Esto es un botón de agregar a la cesta <br>
	                </div>
	            </div>
	            
	            <hr class="featurette-divider">
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
            	?>
           	</div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="formularioParques" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Introduce un nuevo parque temático</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
				      	     <p> Introduce el nombre*: </p>
                             <input type="text" class="form-control" placeholder="Nombre del parque" name="nombreparque" aria-describedby="basic-addon2" required>
                            <br>
                            <p>Introduce una imagen*: </p>
                            <input type="file" name="imagenparque" required>
                            <br>
				      	     <p> Introduzca una descripción acerca del mismo: </p>
				      	     <textarea class="form-control" name="descripcionparque" rows="3" placeholder="Escriba aquí la descripcion"></textarea>
						    <br>
						     <p> Introduce la dirección*: </p>
						     <input type="text" class="form-control" placeholder="Calle, Nº" name="localizacionparque1" aria-describedby="basic-addon2" required>
							 <input type="text" class="form-control" placeholder="Localidad, Provincia" name="localizacionparque2" aria-describedby="basic-addon2" required>
							 <input type="text" class="form-control" placeholder="País" name="localizacionparque3" aria-describedby="basic-addon2" required>
							<br>
							 <p> Introduce el teléfono de contacto: </p>
							 <input type="text" class="form-control" placeholder="Teléfono" name="telefonoparque" aria-describedby="basic-addon2">
							<br>
							<p> Introduce el horario*: </p>
								<ul>
								    <li><label> Lunes: </label> <input type="time" name="horaLunes" value="10:00:00" max="24:00:00" min="10:00:00" step="1" required></li>
								    <li> <label> Martes: </label> <input type="time" name="horaLunes" value="10:00:00" max="24:00:00" min="10:00:00" step="1" required> </li>
								    <li><label> Miércoles: </label> <input type="time" name="horaLunes" value="10:00:00" max="24:00:00" min="10:00:00" step="1" required> </li>
								    <li><label> Jueves: </label> <input type="time" name="horaLunes" value="10:00:00" max="24:00:00" min="10:00:00" step="1" required> </li>
								    <li><label> Viernes: </label> <input type="time" name="horaLunes" value="10:00:00" max="24:00:00" min="10:00:00" step="1" required> </li>
								    <li><label> Sábado: </label> <input type="time" name="horaLunes" value="10:00:00" max="24:00:00" min="10:00:00" step="1" required> </li>
								    <li><label> Domingo: </label> <input type="time" name="horaLunes" value="10:00:00" max="24:00:00" min="10:00:00" step="1" required> </li>
								</ul>
							<p> Introduce cómo llegar: </p>
							<textarea class="form-control" name="comoLlegarparque" rows="3" placeholder="Escriba aquí la cómo llegar"></textarea>
							<p> Precio entradas: </p>
							<textarea class="form-control" name="entradas" rows="3" placeholder="Escriba aquí la el tipo de entradas y sus respectivs precios"></textarea>

					      	<button type="submit" class="btn btn-default centrado">Añadir</button>
							<button type="reset" class="btn btn-default ">Borrar</button></center>
						</form>
						<p class="ruta"> *Campos obligatorios </p>
                    </div>
                </div>
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