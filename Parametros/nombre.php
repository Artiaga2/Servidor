<?php
$nombre =htmlspecialchars( $_POST["nombre"]);
$apellidos =htmlspecialchars( $_POST["apellidos"]);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pasando parámetros</title>
</head>
<body>
<p>Hola que ase <?php echo($nombre . " " . $apellidos);  ?>!!!!</p>


<?php

print_r($_POST);

?>
</body>
</html>