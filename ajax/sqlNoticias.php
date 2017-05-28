
  <?php
   
      $db = mysqli_connect('localhost','root','','turistea');
      if(!$db){
        exit('Error en la conexion.');
      }
      $sql = "SELECT Titulo, Subtitulo, Resumen, Fecha, Imagen, ID FROM noticias ORDER BY Fecha;";
      $consulta = mysqli_query($db, $sql);
      $fila = mysqli_fetch_row($consulta);
      $aux = 0;
      
      while($fila){
        if ($aux % 2 == 0) {  //si es par
          echo '<div class="row">';
            echo '<div class="col-md-6">';
              //imagen
             ?>
            <img id="image-gallery-image" class="img-circle img-responsive" src="<?php echo $fila[4]; ?>" alt="Imagen Noticia">
            <?php
            echo '</div>';
            echo '<div class="col-md-6">';
              //contenido
              echo '<h2>' .$fila[0]. '</h2>';
              echo '<h4>' .$fila[1]. '</h4> <br>';
              echo '<hr>';
              echo '<p class="textoNoticias">' .$fila[2]. '</p><br>';
              echo '<p>' .$fila[3]. '</p>'; ?>
              <button type="button" onclick="muestraModalNoticia('<?php echo $fila[5]; ?>')" class="btn btn-lg btn-primary">Leer Mas</button><?php
            echo '</div>';
          echo '</div>';
          echo '<hr class="featurette-divider">';
        }
        else{                 //si es impar
          echo '<div class="row">';
            echo '<div class="col-md-6">';
              //contenido
              echo '<h2>' .$fila[0]. '</h2>';
              echo '<h4>' .$fila[1]. '</h4> <br>';
              echo '<hr>';
              echo '<p class="textoNoticias">' .$fila[2]. '</p><br>';
              echo '<p>' .$fila[3]. '</p>'; ?>
              <button type="button" onclick="muestraModalNoticia('<?php echo $fila[5]; ?>')" class="btn btn-lg btn-primary">Leer Mas</button><?php
            echo '</div>';
            echo '<div class="col-md-6">';
              //imagen
             ?>
            <img id="image-gallery-image" class="img-circle img-responsive" src="<?php echo $fila[4]; ?>" alt="Imagen Noticia">
            <?php
            echo '</div>';
          echo '</div>';
          echo '<hr class="featurette-divider">';
        }      
        $aux++;
        $fila = mysqli_fetch_row($consulta);
      }
      
      mysqli_close($db);
    
  ?>

                  

                