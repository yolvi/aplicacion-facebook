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

    <title>Funeral</title>

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
	color: #999;
}

      </style>
  </head>

  <body>
    <div class="starter-template">
      <div class="container">
        <h2>
          <?php
            $nombre = $_POST['nombre'];
            $año = $_POST['anio'];
            $mes = $_POST['mes'];
            $dia = $_POST['dia'];
            $nombre = $_POST['nombre'];
            $vida = $_POST['vida'];

            $primer = $_POST['primer'];
            $invitacion = $_POST['invitacion'];
            echo $nombre;
            $añoF = $año + $vida;
            $diaF = $dia + 2;
          ?>
        </h2>
        <p>&nbsp;</p>
        
   

<?php
$vector = array(
1 => "murio  en un accidente de transito " ,
2 => "murio alcoholizado",
3 => "murio bailando en su cumpleaños",
4 => "fallecio en su cama",
5 => "falleció por culpa de su amigo",
6 => "falleció en la tercera guerra mundial",
7 => "falleció por gracioso",
);
$numero = rand(1,7);
echo "$vector[$numero]" ;
?>


        <p>&nbsp;</p>
        
             <div class="flex-container">
    <div class="flexslider">
<ul class="slides">
  <img src="img/resultado.jpg"/>
</ul>
  <ul class="slides">  
  </ul>
    </div>
</div>
        <br>
        <h3>Fallecido el: <?php $d = rand(1,30);$m = rand(1,12);  echo $d."/".$m."/".$añoF?>  </h3>
        <br>

        <h4>
          Sus apenados familiares como sus hijos, esposa(o), padres y amigos.
          <?php echo $primer ?>
        </h4>
        <p>s
          <?php echo $invitacion." " ?>
          a participar a sus amistades tan dolorosa pérdida ruegan lo tengan presente en sus oraciones
          y asistan al funeral 'corper insepulto' que por el eterno descanso de su alma tendrá
          lugar a la fecha de <?php  
		  echo $d."/".$m."/".$añoF?>, a las <?php $h = rand(1,24); echo $h?>  horas y <?php $mi = rand(0,60);$m = rand(1,12);  echo $mi?> minutos, acto seguido inbumación
          del cadáver en el mensionado cementerio, por cuyos favores les quedarán muy agradecidos. 
        </p>
        <p>&nbsp;</p>
        <p>compartir con mis amigos:<a href="https://www.facebook.com/sharer/sharer.php?u=http://elmuerto.hol.es/"><img src="img/compartir.png" width="92" height="22"></a></p>
        <p>&nbsp;</p>
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
  </body>
</html>