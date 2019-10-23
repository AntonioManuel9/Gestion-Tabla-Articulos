<?php 
    require_once ("lib/funcionesTabla.php");

    $tabla = generarTabla();

    $campo = $_GET['criterio'];

    $cabecera = array_keys($tabla[0]);

    $tabla = ordenar($tabla, $campo);

    require_once("template/libros.php");
?>