<?php require_once ("lib/funcionesTabla.php");
   
    $expresion = $_GET["buscador"];

    $tabla = generarTabla();

    $cabecera = array_keys($tabla[0]);

    $tabla = filtrar($tabla, $expresion);

    require_once("template/libros.php");

?>