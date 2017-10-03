<?php

//Si no existe ningun valor en el array $_REQUEST entonces
//Muestro el formulario
//
if (! isset($_REQUEST['nombre'])){
    include 'formulario.html.php';
}else{
    if (($_REQUEST['nombre']) !=""){
        $nombre = htmlspecialchars($_POST['nombre']);
    }else{
        $nombre = 'Sin nombre';
    }

    if (( $_REQUEST['apellidos']) !=""){
        $apellidos = htmlspecialchars($_POST['apellidos']);
    }else{
        $apellidos = 'Sin apellidos';
    }
}
?>