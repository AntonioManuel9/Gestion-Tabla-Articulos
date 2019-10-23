<form method="POST" action="nuevo.php">
    <legend>Formulario</legend>

    <div class="form-group">
      <label for="">Título</label>
      <input type="text" class="form-control" required="required" title="Titulo" name="Titulo">
    </div>  

    <div class="form-group">
      <label for="">Autor</label>
      <input type="text" class="form-control" required="required" title="Autor" name="Autor">
    </div>
    
    <div class="form-group">
      <label for="">Editorial</label>
      <input type="text" class="form-control" required="required" title="Editorial" name="Editorial">
    </div>

    <div class="form-group">
      <label for="">Género</label>
      <input type="text" class="form-control" required="required" title="Genero" name="Genero">
    </div>

    <div class="form-group">
      <label for="">Precio</label>
      <input type="number" class="form-control" required="required" title="Precio" name="Precio">
    </div>

    <a class="btn btn-danger" href="index.php" value="Cancelar">Cancelar</a>
    <a class="btn btn-danger" href="form_nuevo.php" value="Reset">Limpiar</a>
    <input type="submit" class="btn btn-primary" value="Enviar">
</form>