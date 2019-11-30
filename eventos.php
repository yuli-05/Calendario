<?php
header('Content-Type: application/json');
//le puse sistema por que es el nombre de mi base de datos :)
$pdo=new PDO("mysql:dbname=sistema;localhost","root","");

// Seleccionar los eventos del calendario 
$sentenciaSQL= $pdo->prepare("SELECT * FROM eventos");

$sentenciaSQL->execute();

$resultado= $sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);
echo json_encode($resultado);
?>
