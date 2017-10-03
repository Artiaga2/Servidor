<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calculadora Edad planetaria</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>Calculadora Edad Planetaria</h1> 
		</div>
		<div class="row">
			<form action="planetsResponse.php" method="post">
				<div>
					<label for="fecha">Fecha de nacimiento:</label>
					<input type="date" name="fecha" id="fecha">
				</div>
				<div>
					<input type="submit" value="Calcular" id="calcular">
				</div>
			</form>
		</div>
	</div>
</body>
</html>