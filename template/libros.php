<!doctype html>
<html lang="es">

    <?php require_once("template/partials/head.php"); ?>

  <body>
  
    <div class="container">
  
    <?php require_once("template/partials/cabecera.php"); ?>

    <?php require_once('template/menu.php');?>

      <br>
      <section>
        <article>
        <!-- Especificar Contenido -->
          <table class="table">
            <h3 class="display-7">Tabla de libros</h3>
            <thead>
              <tr>
              <!-- Imprimo los indices secundarios de la tabla -->
              <?php foreach ($cabecera as $atributo): ?>
                <th><?=$atributo?></th>
              <?php endforeach;?>
              <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <!-- Muestra contenido de la tabla -->
              <?php foreach ($tabla as $indice => $libro): ?>
                <tr>
                <?php foreach ($libro as $valor): ?>
                  <td> <?=$valor?></td>
                <?php endforeach; ?>
                <td>
                <a href="eliminar.php?indice=<?=$indice?>" title="Eliminar"> <i class="material-icons">delete</i> </a>
                <a href="form_editar.php?indice=<?=$indice?>" title="Editar"> <i class="material-icons">edit</i> </a>
                </td>
                </tr>
              <?php endforeach;?>
            </tbody>
          </table>     
        </article>
      </section>

      <?php require_once('template/partials/footer.php');?>
  </div>
      <?php require_once('template/partials/javascript.php');?>
  </body>
</html>