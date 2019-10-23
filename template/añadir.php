<?php
    //Includes
    include('libros.php');
    include('funcionesTabla.php');
    //Matriz General
    $tabla = nuevoArticulo(generarTabla());
    //Plantilla index 
	index($tabla);
?>