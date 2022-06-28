<?php

//print_r($_POST);
$fecha = $_POST['fecha'];
$arroz = $_POST['arroz'];
$principio = $_POST['principio'];
$proteina = $_POST['proteina'];
$bebida = $_POST['bebida'];
$precioInstructor = $_POST['precioInstructor'];
$precioAprendiz	= $_POST['precioAprendiz'];

$json = json_encode($_POST);
$bytes = file_put_contents("myfile.json", $json); 

header('location: ./menu.php?fecha='.$fecha .'&principio='. $principio);
