<?php
require_once ("lib/funcionesTabla.php");

$tabla = generarTabla();

$cabecera = array_keys($tabla[0]);

$key = $_GET['indice'];

$id = $tabla[$key]['id'];

  $Titulo= $_POST['Titulo'];
  $Autor= $_POST['Autor'];
  $Editorial= $_POST['Editorial'];
  $Genero= $_POST['Genero'];
  $Precio= $_POST['Precio'];

        $registro = [

                "id" => $id,
                "Titulo" => $Titulo,
                "Autor" => $Autor,
                "Editorial" => $Editorial, 
                "Genero" => $Genero,
                "Precio" => $Precio
            
        ];

      $tabla = actualizar($tabla, $registro, $key);

    require_once("template/libros.php");
?>