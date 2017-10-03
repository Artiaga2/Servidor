<?php

if (! isset($_REQUEST['fecha'])){
    include 'planetsForm.php';
}else {
    $fecha = htmlspecialchars($_POST['fecha']);

    $from = new DateTime($fecha);
    $to = new DateTime('NOW');

    $earthDays = $from->diff($to)->format('%a')


$datosPlanetas = [
    'Mercurio' =>
        [
            'days' =>
            'years' =>
            'nextbd' =>
        ],

    'Venus' =>
        [
            'days' =>
            'years' =>
            'nextbd' =>
        ],

    'Tierra' =>
        [
            'days' =>
            'years' =>
            'nextbd' =>
        ]
];

 	include 'planetsTest.php';

}
 ?>