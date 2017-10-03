<?php
	$fecha = htmlspecialchars($_POST['fecha']);

	//print_r($fecha);

	$birthdate = new DateTime( $fecha );
	$currentDate = new DateTime( 'now' );

	$days = $birthdate->diff($currentDate)->format('%a');

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculadora Edad Planetaria</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<h2>Calculadora Edad Planetaria</h2>
			<br>
		</div>
		<div class="row">
			<div class="planet col-md-4">
				<h2>Mercurio</h2>
				<img src="" alt="">
				<p><?=?></p>
				<p></p>
			</div>
			<div class="planet col-md-4">
				<h2>Venus</h2>
				<img src="" alt="">
				<p></p>
				<p></p>
			</div>
			<div class="planet col-md-4">
				<h2>Tierra</h2>
				<img src="" alt="">
				<p></p>
				<p></p>
			</div>
			<div class="planet col-md-4">
				<h2>Marte</h2>
				<img src="" alt="">
				<p></p>
				<p></p>
			</div>
			<div class="planet col-md-4">
				<h2>Jupiter</h2>
				<img src="" alt="">
				<p></p>
				<p></p>
			</div>
			<div class="planet col-md-4">
				<h2>Saturno</h2>
				<img src="" alt="">
				<p></p>
				<p></p>
			</div>
			<div class="planet col-md-4">
				<h2>Urano</h2>
				<img src="" alt="">
				<p></p>
				<p></p>
			</div>
			<div class="planet col-md-4">
				<h2>Neptuno</h2>
				<img src="" alt="">
				<p></p>
				<p></p>
			</div>
			<div class="planet col-md-4">
				<h2>Pluton</h2>
				<img src="" alt="">
				<p></p>
				<p></p>
			</div>
		</div>
	</div>
</body>
</html>