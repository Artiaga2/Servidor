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
<?php foreach ($datos as $planet => $infoPlanet): ?>
    <div class="planet col-md-4">
        <h2> <?=$planet;?></h2>
        <img src="" alt="">
        <?php foreach ($infoPlanet as $dato => $valor): ?>
        <p><?= $valor; ?> <?= $dato ?></p>
        <?php endforeach; ?>

    </div>
<?php endforeach; ?>

</div>

</body>
</html>