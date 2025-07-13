<form action="salvar_link.php" method="POST" enctype="multipart/form-data">
  <label>Título:</label>
  <input type="text" name="titulo" required><br>

  <label>URL:</label>
  <input type="url" name="url" required><br>

  <label>Categoria:</label>
  <input type="text" name="categoria"><br>

  <label>Imagem:</label>
  <input type="file" name="imagem" accept="image/*"><br>

  <button type="submit">Salvar</button>
</form>
