<form method="POST" action="Editar.php?indice=<?=$key;?>">
    <legend>Formulario</legend>

    <div class="form-group">
      <label for="">Título</label>
      <input type="text" class="form-control" required="required" title="Titulo" name="Titulo" value = "<?= $Titulo; ?>" >
    </div>  

    <div class="form-group">
      <label for="">Autor</label>
      <input type="text" class="form-control" required="required" title="Autor" name="Autor" value ="<?= $Autor; ?>">
    </div>
    
    <div class="form-group">
      <label for="">Editorial</label>
      <input type="text" class="form-control" required="required" title="Editorial" name="Editorial" value = "<?= $Editorial; ?>" >
    </div>

    <div class="form-group">
      <label for="">Género</label>
      <input type="text" class="form-control" required="required" title="Genero" name="Genero" value = "<?= $Genero; ?>">
    </div>

    <div class="form-group">
      <label for="">Precio</label>
      <input type="number" class="form-control" required="required" title="Precio" name="Precio" step="any" value = "<?= $Precio; ?>">
    </div>

    <a class="btn btn-danger" href="index.php" value="Cancelar">Cancelar</a>
    <input type="submit" class="btn btn-primary" value="Actualizar">
</form>