<?php

/*
  Fichero: funcPractica5.php
  Descripcion: coleccion de funciones para la gestion de una tabla
  Proyecto: Actividad 3.5
  Version: 0.0
  Autor: Antonio Pavon Rodriguez
  Fecha: 16/10/19

*/

# Genera una matriz de libros indice primario escalar
# Indice secundario asociativo
# Argumentos de entrada: null
# Salida: Tabla de libros


function generarTabla() {
  $tabla = 
  [
    [
      "id" => 1,
      "Titulo" => "Los señores del tiempo",
      "Autor" => "García Sénz de Urturi",
      "Editorial" => "Tranfe",
      "Genero" => "Novela",
      "Precio" => 19.50
    ],
    [
      "id" => 2,
      "Titulo" => "El Rey recibe",
      "Autor" => "Eduardo Mendoza",
      "Editorial" => "Alfaguara",
      "Genero" => "Novela",
      "Precio" => 20.50
    ],
    [
      "id" => 3,
      "Titulo" => "Diario de una mujer",
      "Autor" => "Eduardo Mendoza",
      "Editorial" => "Novelda",
      "Genero" => "Novela",
      "Precio" => 12.95
    ],
    [
      "id" => 4,
      "Titulo" => "El quijote de la Mancha",
      "Autor" => "Miguel de Cervantes",
      "Editorial" => "Santillana",
      "Genero" => "Juvenil",
      "Precio" => 15.95
    ],
  ];

  return $tabla;
}

/*
  Eliminar()
  Permite eliminar un elemento de la tabla
  Entrada:
    -tabla() - La tabla con los datos
    -Key - Indice del elemento de la tabla que se desea eliminar
  Devuelve:
    -tabla con el elemento eliminado
*/

function eliminar($tabla, $key){

    unset($tabla[$key]);
    $tabla = array_values($tabla);
    return $tabla;

}

/*
  actualizar()
  Permite actualizar un elemento de la tabla
    Entrada:
    -tabla() - La tabla con los datos
    -Key - Indice del elemento de la tabla que se desea actualizar
    Devuelve:
    -tabla con el elemento actualizado
*/
function actualizar($tabla, $registro, $key){
    
    $tabla[$key] = $registro;
    return $tabla;
}

/*
  nuevo()
  Permite añadir un elemento de la tabla
    Entrada:
    -tabla[] - La tabla a la que vamos a añadir un nuevo elemento
    -nuevo - Elemento que vamos a añadir a la tabla
    Devuelve:
    -tabla con el elemento nuevo insertado
*/
function nuevo($tabla, $nuevo){

  $tabla[] = $nuevo;
  return $tabla;

}

/*
  ordenar()
  Permite ordenar un elemento de la tabla
    Utilizamos un foreach en el que decimos que recorra
    la tabla en busca del registro y con el multisort nos lo 
    ordene con SORT_ASC en ascendente y con SORT_DESC descendente
    y nos devuelve la tabla con los registros ordenados.
*/
function ordenar($tabla, $campo){

  foreach ($tabla as $key => $registro) {
    $aux[$key] = $registro[$campo];
  }
  array_multisort($aux, SORT_ASC, $tabla);
  return ($tabla);
  
}
/*
  filtrar()
  Permite filtrar un elemento de la tabla
    creamos la variable auxiliar en la que metemos un array vacio 
    que luego llenaremos con el registro.
    Recorremos la tabla buscando la palabra que hemos introducido en $expresion
    una vez encontrada, la pasamos al registro y de registro al array vacio.
*/
function filtrar($tabla, $expresion ){

  $aux = array();

  foreach ($tabla as $key => $registro) {
    if (in_array($expresion, $registro)) {

      $aux[] = $registro;

    }
  }
  
  return ($aux);
}

function ultimoId($tabla){
  $ultimo = end($tabla);
  return $ultimo["id"];
}

?>
