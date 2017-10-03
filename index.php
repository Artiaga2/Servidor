<!DOCTYPE html>
<html>
<head>
	<title>Mi primera web</title>
</head>
<body>
	<h1> Mi pagina web</h1>

 	<?php

  		//$edad = 25; 

		//echo "Mi edad es " . $edad;#Para concatenar se utiliza . 

		//echo "Mi edad es $edad"; # Las comillas dobles muestran el valor de la variable 

		//echo 'Mi edad es $edad'; #Las comillas simples muestran la cadena literal

		//echo "Mi edad es <strong>$edad</strong>"; #Se puede usar html dentro de php

	

		//=$edad


	//$vble = 50.0;
	//$vble *=3;
	//$vble /=7;

	//printf("%2.f", $vble);


	//$nombres = array (" Sergio", "Eloy" ,"adolfo", "Juanjo"); #Array en php
	//echo $nombres[2];

/*

		 $array2d = [ #Array de dos dimensiones.
			["hola", "k", "ase"],
			["adio", "feo"]

		];

		print($array2d [0] [1]);
		echo '<pre>';
		print_r($array2d);
		echo '</pre>';

*/

 			$capitales = [ #Array asociativo
		
 			'España' => 'Madrid',
 			'Francia' => 'Paris',
 			'UK' => 'Londres',
 			'Portugal' => 'Lisboa'


		];

		print_r($capitales ['España']);

		echo "<br>";

		$capitales['UK'] ='Manchester';
		print_r($capitales['UK']);

   ?>

 	
</body>
</html>

