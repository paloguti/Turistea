    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <!--LOGO TURISTEA DE ARRIBA A LA IZQUIERDA-->
              <a href="index.php"> <img class="logo" src="img/LogotipoFinal.png" alt="Logo"> </a>
              <!--Esto es para cuando la pantalla se encoge-->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!--Esto son los botones de la lista-->
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--Esto me parece interesante que esté si no os gusta lo quito -->
                <li><a href="quienSomos.php">¿Quiénes somos?</a></li>
                <li><a href="queEs.php">¿Qué es Turistea?</a></li>
                <li class="dropdown">
                  <!--MENÚ DE TEATROS (desplegable, aquí habrá que poner los nombres según la base de datos)-->
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Teatros<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="teatros.php"> TODOS LOS TEATROS </a></li>
                    <li role="separator" class="divider"></li>
                    <!--ESTO SE CARGARÍA DE LA BASE DE DATOS igual estaría bien solo tener aquí los teatros más vistos o en promoción (para que no se haga muy larga la lista) -->
                    <li><a href="teatroEspanol.php">Teatro Español</a></li>
                    <li><a href="teatroMarquina.php">Teatro Marquina</a></li>
                    <li><a href="teatroNuevoAlcala.php">Teatro Nuevo Alcalá</a></li>
                    <!--ESTO DE MOMENTO NO LO QUIERO
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                    -->
                  </ul>
                </li>
                <li class="dropdown">
                  <!--MENÚ DE MUSEOS (desplegable)-->
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Museos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="museos.php"> TODOS LOS MUSEOS </a></li>
                    <li role="separator" class="divider"></li>
                    <!--ESTO SE CARGARÍA DE LA BASE DE DATOS igual estaría bien solo tener aquí los teatros más vistos o en promoción (para que no se haga muy larga la lista) -->
                    <li><a href="museoThyssen.php">Museo Thyssen</a></li>
                    <li><a href="museoReinaSofia.php">Museo Reina Sofía</a></li>
                    <li><a href="museoDelPrado.php">Museo Del Prado</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <!--MENÚ DE PARQUES TEMÁTICOS (desplegable)-->
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Parques temáticos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="parquesTematicos.php"> TODOS LOS PARQUES TEMÁTICOS </a></li>
                    <li role="separator" class="divider"></li>
                     <!--ESTO SE CARGARÍA DE LA BASE DE DATOS igual estaría bien solo tener aquí los parques más vistos o en promoción (para que no se haga muy larga la lista) -->
                    <li><a href="faunia.php">Faunia</a></li>
                    <li><a href="zooDeMadrid.php">Zoo de Madrid</a></li>
                    <li><a href="aquopolisVillanueva.php">Aquopolis Villanueva</a></li>
                  </ul>
                </li>
                 <li class="dropdown">
                  <!--MENÚ DE CINES (desplegable)-->
                  <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cines<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="cines.php"> TODOS LOS CINES </a> </li>
                    <li role="separator" class="divider"> </li>
                     <!--ESTO SE CARGARÍA DE LA BASE DE DATOS igual estaría bien solo tener aquí los cines más vistos o en promoción (para que no se haga muy larga la lista) -->
                    <li><a href="cinesaPrincipePio.php">Cinesa Príncipe Pío</a></li>
                    <li><a href="cineCoslada.php">Cine Coslada</a></li>
                    <li><a href="cinemoralejaGreen.php">Cine Moraleja Green</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">

                 <!-- Logearse -->

                  <li <?php if(!isset($_SESSION["autentificado"]) || $_SESSION["autentificado"] == "NO"){ ?> class="active">
                    <a id href="index_login.php"> Logueate <span class="glyphicon glyphicon-log-in"></span> </a></li>
                 <?php }else{ ?> ></li><?php }?>

                  <!-- crear una cuenta -->

                  <li <?php if(!isset($_SESSION["autentificado"]) || $_SESSION["autentificado"] == "NO"){ ?> class="active">
                    <a id href="index_registro.php"> Registrate <span class="glyphicon glyphicon-pencil"></span> </a> </li>
                 <?php }else{ ?> ></li><?php }?>

                 <!-- Acceso a tu cuenta -->

                  <li <?php if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"] == "SI"){ ?> class="active">
                    <a id href="pag_usu.php"> <?php echo $_SESSION["usuLogeado"]; ?> <span class="glyphicon glyphicon-user"></span> </a></li>
                     <?php }else{ ?> ></li><?php }?>

                  <!-- Cerrar sesion -->

                  <li <?php if(isset($_SESSION["autentificado"]) && $_SESSION["autentificado"] == "SI"){ ?>>
                    <a id href="validaLogout.php"> Cerrar Sesion <span class="glyphicon glyphicon-log-out"></span> </a></li>
                   <?php }else{ ?> ></li><?php }?>

              </ul>
              
            </div>
          </div>
        </nav>
      </div>
    </div>

                 