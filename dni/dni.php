<?php
$nombre =htmlspecialchars( $_POST["nombre"]);
$apellidos =htmlspecialchars( $_POST["apellidos"]);
$dni = htmlspecialchars($_POST["dni"]);


$letras = ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E","O"];

$valor = round($dni % 23);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DNI</title>
</head>
<body>
	



<p><?php echo($nombre . " " . $apellidos . ", con dni " . $dni . $letras[$valor]);  ?>!!!!</p>


</body>
</html>