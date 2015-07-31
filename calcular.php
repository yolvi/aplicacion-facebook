<?php 
  	

  	$sexo = $_POST['sexo'];
  	$dormir = $_POST['dormir'];
  	$fuma = $_POST['fuma'];
  	$estres = $_POST['estres'];
  	$actividadFisica = $_POST['actividadFisica'];
  	$alcohol = $_POST['alcohol'];
  	$felicidad = $_POST['felicidad'];
  	$ansiedad = $_POST['ansiedad'];
  	$labor = $_POST['labor'];
  	$social = $_POST['social'];
  	$situacion = $_POST['situacion'];
  	$temperamento = $_POST['temperamento'];

  	//echo $sexo, $dormir, $fuma, $estres, $actividadFisica;
  	
  	$vida = 0;

  	if ($sexo != "0") {
  		//echo $sexo;
  		if ($sexo == "Varon") 
	  	{
	  		$vida = 95;
	  		//echo $vida;
	  	}
	  	if($sexo == "Mujer")
	  	{
	  		$vida = 85;
	  		//echo $vida;
	  	}
  	}

  	if ($dormir != 0) {
  		if ($dormir == 1) {
  			$vida = $vida - 4;
  			echo $vida;
  		}
  		if ($dormir == 4) {
  			$vida = $vida + 1;
  			echo $vida;
  		}
  	}
  	if ($fuma != 0) {
  		if ($fuma == 1) {
  			$vida = $vida - 6;
  			echo $vida;
  		}
  		if ($fuma == 2) {
  			$vida = $vida - 10;
  			echo $vida;
  		}
  	}

  	if ($estres != 0) {
  		if ($estres == 2) {
  			$vida = $vida - 3;
  			echo $vida;
  		}
  		if ($estres == 3) {
  			$vida = $vida - 8;
  			echo $vida;
  		}
  	}

  	if ($actividadFisica != 0) {
  		if ($actividadFisica == 1) {
  			$vida = $vida + 5;
  			echo $vida;
  		}
  		if ($actividadFisica == 2) {
  			$vida = $vida + 3;
  			echo $vida;
  		}
  		if ($actividadFisica == 3) {
  			$vida = $vida + 1;
  			echo $vida;
  		}
  		if ($actividadFisica == 4) {
  			$vida = $vida - 3;
  			echo $vida;
  		}
  	}

  	if ($alcohol != 0) {
  		if ($alcohol == 2) {
  			$vida = $vida - 1;
  			echo $vida;
  		}
  		if ($alcohol == 3) {
  			$vida = $vida - 10;
  			echo $vida;
  		}
  		if ($alcohol == 4) {
  			$vida = $vida - 37;
  			echo $vida;
  		}
  	}

  	if ($felicidad != 0) {
  		if ($felicidad == 1) {
  			$vida = $vida + 12;
  			echo $vida;
  		}
  		if ($felicidad == 3) {
  			$vida = $vida - 3;
  			echo $vida;
  		}
  		if ($felicidad == 4) {
  			$vida = $vida - 5;
  			echo $vida;
  		}
  	}

  	if ($ansiedad != 0) {
  		if ($ansiedad == 2) {
  			$vida = $vida - 1;
  			echo $vida;
  		}
  		if ($ansiedad == 3) {
  			$vida = $vida - 3;
  			echo $vida;
  		}
  		if ($ansiedad == 4) {
  			$vida = $vida - 5;
  			echo $vida;
  		}
  	}

  	if ($labor != 0) {
  		if ($labor == 1) {
  			$vida = $vida + 2;
  			echo $vida;
  		}
  		if ($labor == 3) {
  			$vida = $vida - 1;
  			echo $vida;
  		}
  		if ($labor == 4) {
  			$vida = $vida - 3;
  			echo $vida;
  		}
  	}

  	if ($social != 0) {
  		if ($social == 1) {
  			$vida = $vida + 2;
  			echo $vida;
  		}
  		if ($social == 2) {
  			$vida = $vida + 1;
  			echo $vida;
  		}
  	}

  	if ($situacion != 0) {
  		if ($situacion == 1) {
  			$vida = $vida + 1;
  			echo $vida;
  		}
  		if ($situacion == 2) {
  			$vida = $vida - 1;
  			echo $vida;
  		}
  	}

  	if ($temperamento != 0) {
  		if ($temperamento == 1) {
  			$vida = $vida + 2;
  			echo $vida;
  		}
  		if ($temperamento == 3) {
  			$vida = $vida - 5;
  			echo $vida;
  		}
  	}
  	header("location: resultado.php?vida=$vida");
  			
?>
