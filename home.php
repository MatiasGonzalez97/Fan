<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>
<html>

    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Fan Theories</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/style.css" />


  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Fan theories</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print $_SESSION['name'];?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="cerrar_sesion.php">Cerrar sesion</a></li>
                </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
            <img src="Imagenes\Logotipo.png"WIDTH=500 HEIGHT=300 />
        <p>
           Bienvenido a Fan Theories, una pagina donde los usuarios se loguean para debatir sobre las diferentes series determinadas.
        </p>






        <p>
            <em>Fan Theories es una pagina diferente.</em>
            Fan Theories es una pagina donde los usuarios una vez logueados pueden debatir sobre las diferentes series determinadas y teorias, debajo de cada teoria habra un boton de me gusta y uno de no me gusta, si el usuario llegase a hacer click  en cualquiera de los casos aparecera un pedido de justificacion del porque de la votación, también puede optar por solo votar sin dar su opinión del porqué.
        </p>







        <h3>Lista de Series</h3>



        <div class="clase1">
        <h2>The Flash</h2>

        </div>

            <a href="Flash/The Flash.php">
            <img src="Flash/The Flash.jpg"WIDTH=200 HEIGHT=300 />

        </a>




        <div class="clase2">
        <h2>Arrow</h2>
		</div>
        <a href="Arrow/arrow.php">
            <img src="Arrow/arrow.jpg"WIDTH=200 HEIGHT=300/>
        </a>


            


            <div class="clase3">
        <h2>The Walking dead</h2>
		</div>
        <a href="The Walking Dead/The Walking Dead.php">
            <img src="The Walking Dead/twe.jpg"WIDTH=200 HEIGHT=300 />

        </a>


           


            <div class="clase4">
        <h2>DC Legends Of Tomorrow</h2>
		 </div>

        <a href="DC Legends Of Tomorrow/DC Legends Of Tomorrow.php">
            <img src="DC Legends Of Tomorrow/DC Legends Of Tomorrow.jpg"  WIDTH=200 HEIGHT=300/>

        </a>


           



            <div class="clase5">
        <h2>Supergirl</h2>
		</div>
        <a href="Supergirl/Supergirl.php">
            <img src="Supergirl/Supergirl.jpg"  WIDTH=200 HEIGHT=300/>
        </a>

            


            <div class="clase6">
         <h2>Gotham</h2>
		  </div>
        <a href="Gotham/Gotham.php">
            <img src="Gotham/gotham.jpg"  WIDTH=200 HEIGHT=300/>
        </a>


           

      </div>


         <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.dropotron.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/skel-viewport.min.js"></script>
  <script src="assets/js/util.js"></script>

  <script src="assets/js/main.js"></script>

    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </body>
</html>
<script src="js/bootstrap.min.js"></script>

<?php
}//si no hay sesión
else{
//se redirecciona
header ('location: ./');
}
?>
