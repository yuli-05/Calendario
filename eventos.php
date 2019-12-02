<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=sistema;localhost","root","");

$accion= (isset($_GET['accion']))?$_GET['accion']:'leer';

switch ($accion) {
    case 'agregar':
        # Instruccion de agregado
        $sentenciaSQL = $pdo->prepare("INSERT INTO 
        eventos(title,descripcion,color,textColor,start,end) 
        VALUES(:title,:descripcion,:color,:textColor,:start,:end)");

        $respuesta=$sentenciaSQL->execute(array(
            "title" =>$_POST['title'],
            "descripcion" => $_POST['descripcion'],
            "color" => $_POST['color'],
            "textColor" => $_POST['textColor'],
            "start" => $_POST['start'],
            "end" => $_POST['end']

        ));
        echo json_encode($respuesta);
        break;
    case 'eliminar':
        # Instruccion de eliminar
        echo "Instruccion eliminar";
        break;
    case 'modificar':
        # Instruccion de modificar
        echo "Instruccion modificar";
        break;
    
    default:
        // Seleccionar los eventos del calendario 
            $sentenciaSQL= $pdo->prepare("SELECT * FROM eventos");
            $sentenciaSQL->execute();
            $resultado= $sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);
            echo json_encode($resultado);
        
        break;
}


?>


