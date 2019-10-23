<?php

require_once ("lib/funcionesTabla.php");

  $indice = $_GET['indice'];

  $tabla = generarTabla();

  $cabecera = array_keys($tabla[0]);

  $tabla = eliminar($tabla, $indice);

  require_once("template/libros.php");

?>