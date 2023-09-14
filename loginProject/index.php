<?php 
require_once("header.php");
?>

<div class="container">
    <main>
    <div class="login-container">
    <h2>Realize o login</h2>
    <p>E tenha acesso ao conteúdo</p>
    <form action="controller/loginController.php" method="GET">
      <div class="input-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
      </div>
      <button type="submit">Entrar</button>

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
require_once("footer.php");
?>