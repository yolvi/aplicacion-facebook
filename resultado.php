<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Test</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

body {
	background-color: #000;
	color: #CCC;
}

    </style>
</head>

  <body>
    <div class="starter-template">
      <div class="container">
        <h1>RESULTADO DEL TEST</h1>
              <p>El suelo tiembla bajo tus pies, es increíble, ¿cómo puede pasar esto?,</br> un terremoto como jamás en la historia del hombre había existido se traga todo a su paso, </br>acaba con miles de vidas, incluyendo la tuya...</p>
        <h3>
          <?php 
            if(isset($_GET['vida'])){
              $vida = $_GET['vida'];
              echo "$vida";
            }
          ?>
          Años de Vida
        </h3>
        <br>
        <br>
        <h3>PUBLICAR MI MUERTE</h3>
        <br>
        <form class="form-horizontal" role="form" method="post" action="funeral.php">
          <div class="col-sm-12">
              <div class="form-group">
                <label class="col-sm-4 control-label">Nombre Completo</label>
                <div class="col-sm-5">
                  <input class="form-control" name="nombre" id="nombre"/>
                </div>
              </div>
          </div>
          <label class="col-sm-4 control-label">Fecha Nacimiento</label>
          <div class="col-sm-7">
            <div class="form-group">
              <label class="col-sm-1 control-label">Año</label>
              <div class="col-sm-2">
                <input class="form-control" name="anio" id="anio"/>
                <label class="col-sm-1 control-label">Muerte</label>
                <input class="form-control" name="vida" id="vida" value=<?php echo $vida;  ?> />
              </div>
              <label class="col-sm-1 control-label">Mes</label>
              <div class="col-sm-2">
                <input class="form-control" name="mes" id="mes"/>
              </div>
              <label class="col-sm-1 control-label">Día</label>
              <div class="col-sm-2">
                <input class="form-control" name="dia" id="dia"/>

              </div>
            </div>

          </div>
           <div class="col-sm-12">
            <div class="col-sm-5">
            <label class="col-sm-5 control-label">Primer Párrafo</label>
            <textarea class="form-control" rows="3" name="primer" id="primer"></textarea>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="col-sm-5">
            <label class="col-sm-5 control-label">Invitación al funeral</label>
            <textarea class="form-control" rows="3" name="invitacion" id="invitacion"></textarea>
            </div>
          </div>     
          
          
          <div class="col-sm-12">
            <button type="submit" class="btn btn-danger">Ver</button>
          </div>
        </form>
      </div>
    </div>
  	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <audio src="audio/terror1.m4a" preload="auto" autoplay loop></audio
  >
  </body>
</html>