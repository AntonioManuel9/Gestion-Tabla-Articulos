<?php
  require_once ("lib/funcionesTabla.php");

  $tabla= generarTabla();

  $key = $_GET['indice'];

  $registro = $tabla[$key];

  $Titulo= $registro['Titulo'];
  $Autor= $registro['Autor'];
  $Editorial= $registro['Editorial'];
  $Genero= $registro['Genero'];
  $Precio= $registro['Precio'];
?>

<!doctype html>
<html lang="es">

  <?php require_once("template/partials/head.php"); ?>

  <body>
    <div class="container">

      <?php require_once("template/partials/cabecera.php"); ?>

          <section>
            <article>
              <?php require_once("template/partials/formEditar.php"); ?>
            </article>
          </section>
      
      <?php require_once("template/partials/footer.php"); ?>
    </div>
  
    <?php require_once("template/partials/javascript.php"); ?>
  </body>
</html>