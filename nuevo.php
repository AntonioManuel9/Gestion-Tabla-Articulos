<?php

require_once ("lib/funcionesPractica5.php");

$tabla = generarTabla();

  //Matriz Nueva
    //Primero Recojo los datos del POST.
    $idLibro= ultimoId($tabla) +1;
    $Titulo= $_POST['Titulo'];
    $Autor= $_POST['Autor'];
    $Editorial= $_POST['Editorial'];
    $Genero= $_POST['Genero'];
    $Precio= $_POST['Precio'];

        $registro = [

            "id" => $idLibro,
            "Titulo" => $Titulo,
            "Autor" => $Autor,
            "Editorial" => $Editorial, 
            "Genero" => $Genero,
            "Precio" => $Precio
            
        ];

    $tabla = nuevo($tabla, $registro);

    $cabecera = array_keys($tabla[0]);

    require_once("template/libros.php");
?>