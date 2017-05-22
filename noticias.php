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

	    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

	    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | Noticias</title>

        
        
    </head> 
    <body onload="muestraNoticias()"> 
        <?php 
            include("navbar.php");
        ?>
        <div class="container">
            <div class="contenido">
	            <h1 class="text-center">Noticias</h1>
	            <div class="row">
	            	<!--Ruta donde te encuentras -->
	            	<ol class="breadcrumb">
					  	<li><a href="index.php">Inicio</a></li>
					  	<li class="active">Noticias</li>
					</ol>
	            </div>

	            <div class="row">
                    <div class="aniadir">
                        <a href="" onClick="$('#formularioNoticias').modal()" data-toggle="modal">
                        <span class="glyphicon glyphicon-plus"></span><h4>Añadir</h4> </a>
                        <div class="limpiar"></div> 
                    </div>
	            </div>

	            <!-- div que se mostrará solo cuando haya algun error relativo a la img en el formulario de crear una noticia  -->

	            <div class="row">	            	
	            	<div <?php if(isset($_GET["errorDatos"]) && $_GET["errorDatos"]=="si"){ ?> class="panel panel-danger">
			            <div class="panel-heading">La imagen que has intentado subir para la noticia no cumple con alguno de los siguientes requisitos:
			            	<ul>
			            		<li>La imagen no puede superar los 5KB permitidos.</li>
			            		<li>Debe ser una imagen que no exista.</li>
			            		<li>Debe ser extrictamente una imagen de tipo PNG o JPG.</li>
			            	</ul>
			            </div>
			            <?php }else{ ?> > 
			            <?php } ?>
			        </div>
	            </div>

	            <!-- div que se mostrará solo cuando haya algun error en los datos en el formulario de crear una noticia -->

	            <div class="row">	            	
	            	<div <?php if(isset($_GET["errorForm"]) && $_GET["errorForm"]=="si"){ ?> class="panel panel-danger">
			            <div class="panel-heading">Los campos del formulario no son corretos.</div>
			            <?php }else{ ?> > 
			            <?php } ?>
			        </div>
	            </div>

	            <!--                         Contenido de la página                         -->

	            <div class="noticias">

	            </div>


	            <!--                            Modal Noticias                              -->

	            <div class="modal fade" id="modalNoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			        <div class="modal-dialog" role="document" style="color: black;">
			          <div class="modal-content">
			            <div class="modal-header">
			            	<h4 class="tituloNoticia">Descubre más sobre la noticia.</h4>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                <span aria-hidden="true" style="color: black;">&times;</span>
			              </button>
			            </div>
			            
			            <div class="modal-body">
			            

			            </div>
			           
			          </div>
			        </div>
			      </div>      
	            
	            <!-- FOOTER -->
	            <?php
	                include("footer.html");
	            ?>
	        </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="formularioNoticias" role="dialog">
            <div class="modal-dialog">

            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">X</button>
                        <h4 class="modal-title text-center">Introduce una nueva noticia</h4>
                    </div>
                    <div class="modal-body">
                        <form action="validaNoticia.php" enctype="multipart/form-data" method="POST">

                        	<label for="titulonoticia" class="label">· Introduce el título de la noticia: </label>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="glyphicon glyphicon-leaf"></i></span>
				                <input type="text" class="form-control" placeholder="Título de la noticia" id="titulonoticia" name="titulonoticia" aria-describedby="basic-addon2" required>
				            </div>
				            <br>

				            <label for="subtitulonoticia" class="label">· Introduce el subtítulo de la noticia: </label>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="glyphicon glyphicon-leaf"></i></span>
				                <input type="text" class="form-control" placeholder="Subtítulo de la noticia" id="subtitulonoticia" name="subtitulonoticia" aria-describedby="basic-addon2" required>
				            </div>
				            <br>

				            <label for="fileToUpload" class="label">· Seleccione una imagen: </label>
				            <div class="input-group">				             
				                <input id="fileToUpload" name="fileToUpload" type="file" multiple class="file-loading">
				            </div>
				            <br>

				            <label for="descripcionnoticia" class="label">· Introduzca un resumen de la misma: </label>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="glyphicon glyphicon-align-left"></i></span>
				            	<textarea class="form-control" id="resumennoticia" name="resumennoticia" rows="3" placeholder="Escriba aquí el resumen de la noticia" required></textarea>
				            </div>
				            <br>

				            <label for="descripcionnoticia" class="label">· Introduzca una descripción acerca de la misma: </label>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="glyphicon glyphicon-align-left"></i></span>
				            	<textarea class="form-control" id="descripcionnoticia" name="descripcionnoticia" rows="3" placeholder="Escriba aquí la descripcion" required></textarea>
				            </div>
				            <br>

				            <label for="fuentenoticia" class="label">· Indique la fuente de la noticia: </label>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
				                <input type="text" class="form-control" placeholder="url del sitio donde encontraste la noticia" id="fuentenoticia" name="fuentenoticia" aria-describedby="basic-addon2" required>
				            </div>
				            <br>
				            <div class="centrado">
				            	<input name="botonEnviarNoticia" class="btn btn-lg btn-primary" type="submit" value="Enviar">
				            	<input name="botonResetearNoticia" class="btn btn-lg btn-primary" type="reset" value="Restaurar campos">
						      	
							</div>
						</form>
						
                    </div>
                </div>
            </div>
        </div> 
    
	</body>

	<script type="text/javascript">
		
	function muestraNoticias(){
		
		$.ajax({
	        type: "POST",
	        dataType: "html",
	        url: "ajax/sqlNoticias.php",
	        data: {},
	        success: function(data, textStatus) {
				$(".noticias").html(data);
			}
	    }).done(function(msg) {
	 
	        
	    });

	}

	function muestraModalNoticia(id_noticia) {   //funcion ajax para enviar datos(usado en la modal)
	    // Send the value in PHP
	    $.ajax({
	        type: "POST",
	        dataType: "html",
	        url: "ajax/modalMostrarNoticia.php",
	        data: { "id": id_noticia},
	        success: function(data, textStatus) {
	            $("#modalNoticia .modal-body").html(data);
	            $("#modalNoticia").modal('show');    
	        }
	    	}).done(function(msg) {
	 
	        
	    });
	};

	</script>
</html>
