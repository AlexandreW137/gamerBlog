<?php
require_once("shared/header.php");
require_once("controller/autenticationController.php");

?>
<style>
   
    .container h1 {
        text-align: center;
        color: white;
    }
    form {
        color: white;
    }
    .enviarBlog {
    background-color: #ce8600;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 3px;
    cursor: pointer;
    width: 100%;
  }

</style>



  <div class="container mt-5">
        <h1>Criar Conteúdo para o Blog</h1>
        <form>
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem de Destaque</label>
                <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria</label>
                <select class="form-select" id="categoria" name="categoria" required>
                    <option value="tecnologia">Tecnologia</option>
                    <option value="viagem">Viagem</option>
                    <option value="saude">Saúde</option>
                    <option value="outros">Outros</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteúdo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" rows="6" required></textarea>
            </div>
            <button class="enviarBlog"type="submit" class="btn">Publicar</button>
    </div>
    </form>

    <?php
require_once("shared/footer.php");
?>