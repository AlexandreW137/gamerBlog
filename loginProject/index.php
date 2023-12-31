<?php 
require_once("shared/header.php");
?>

<div class="container">
    <main>
    <div class="login-container">
    <h2>Realize o login</h2>
    <p>E tenha acesso ao conteúdo</p>
    <form action="controller/loginController.php" method="GET">
      <div class="input-group">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
      </div>
      <div class="input-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
      </div>
      <button type="submit" class="loginButton">Entrar</button>

      <?php
            //Verifica se existe alguma query string
            if ($_REQUEST) {
                //Verifica se existe a query string cod
                if (isset($_REQUEST['cod'])) {
                    //Captura o valor da query string cod e armazena na variável php $cod
                    $cod = $_REQUEST['cod'];
                    //Verifica se o valor de $cod é 171
                    if ($cod == '171') {
                        //Se for exibe a mensagem de usuário ou senha invalidos.
                        echo("<div class='error'>");
                        echo("<p class='warning-error'</p>");
                        echo("</div>");
                    }
                }
            }
            ?>
    </form>
</div>
    </main>
</div>

<?php
require_once("shared/footer.php");
?>