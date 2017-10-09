<?php
include_once 'config.php';
include_once 'connectDb.php';

$queryResult = $pdo ->query("SELECT * from clientes");

$resultados = [];

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Listado de clientes</h1>
<table class="table">
<tr>
    <th>
        Email
    </th>
    <th>
        Password
    </th>
    <?php
    while ($row = $queryResult -> fetch(PDO::FETCH_ASSOC)): ?>
</tr>
    <tr>
        <td>
            <?=$row['email']?>
        </td>
        <td>
            <?php echo $row['password']; ?>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</div>
</body>
</html>