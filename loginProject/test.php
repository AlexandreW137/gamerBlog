<style>
@property --rotate {
  syntax: "<angle>";
  initial-value: 132deg;
  inherits: false;
}

:root {
  --card-height: 65vh;
  --card-width: calc(var(--card-height) / 1.5);
}


body {
  min-height: 100vh;
  background: #212534;
  display: flex;
  align-items: center;
  flex-direction: column;
  padding-top: 2rem;
  padding-bottom: 2rem;
  box-sizing: border-box;
}


.card {
  background: #191c29;
  width: var(--card-width);
  height: var(--card-height);
  padding: 3px;
  position: relative;
  border-radius: 6px;
  justify-content: center;
  align-items: center;
  text-align: center;
  display: flex;
  font-size: 1.5em;
  color: rgb(88 199 250 / 0%);
  cursor: pointer;
  font-family: cursive;
}

.card:hover {
  color: rgb(88 199 250 / 100%);
  transition: color 1s;
}
.card:hover:before, .card:hover:after {
  animation: none;
  opacity: 0;
}


.card::before {
  content: "";
  width: 104%;
  height: 102%;
  border-radius: 8px;
  background-image: linear-gradient(
    var(--rotate)
    , #5ddcff, #3c67e3 43%, #4e00c2);
    position: absolute;
    z-index: -1;
    top: -1%;
    left: -2%;
    animation: spin 2.5s linear infinite;
}

.card::after {
  position: absolute;
  content: "";
  top: calc(var(--card-height) / 6);
  left: 0;
  right: 0;
  z-index: -1;
  height: 100%;
  width: 100%;
  margin: 0 auto;
  transform: scale(0.8);
  filter: blur(calc(var(--card-height) / 6));
  background-image: linear-gradient(
    var(--rotate)
    , #5ddcff, #3c67e3 43%, #4e00c2);
    opacity: 1;
  transition: opacity .5s;
  animation: spin 2.5s linear infinite;
}

@keyframes spin {
  0% {
    --rotate: 0deg;
  }
  100% {
    --rotate: 360deg;
  }
}

a {
  color: #212534;
  text-decoration: none;
  font-family: sans-serif;
  font-weight: bold;
  margin-top: 2rem;
}
    

body {
    background-color: #151515 !important;
   
}

header {
    display: flex;
    justify-content: space-between;
    height: 100px;
    align-items: center;
    color: #A5A5A6 !important;
    margin: 0 30px 0 30px;

}

header .logo h1 {
  color: #A5A5A6;
}

header a {
  text-decoration: none;
}
.header-border {
  border-bottom: 0.0625rem solid #ffe200;
}
header img {
    width: 80px;
    margin: 10px;
    
}

.logo {
    display: flex;
    align-items: center;
}


header nav ul {
    display: flex;
    
}

nav ul li {
    margin: 30px;
    margin-top: 50px;
    list-style: none;
    text-transform: uppercase;
}



ul li a {
    text-decoration: none;
    color: #A5A5A6;
}

main {
    height: 500px;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    box-shadow: 0 2px 15px #ffe200;
    border: solid #ffe200 1px;
    border-radius: 30px;
    background-size: cover;
    background-position: left ;
    color: white;
    transition: 500ms;
    margin-top: 50px;

}

main:hover {
    box-shadow: 0 0 30px #ffe200;

}


.input-group {
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 20px;
    
  }
  
  button {
    background-color: #ce8600;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 3px;
    cursor: pointer;
    width: 100%;
  }

  .login-container {
    padding: 20px; 
    margin-top: -100px;
    border-radius: 5px;
    max-width: 600px;
    width: 100%;
  }

  .post {
    margin-bottom: 30px;
  }
  
  .post h2 {
    margin-top: 0;
  }
  
  .post-date {
    color: #888;
    margin-bottom: 10px;
  }
  
  .read-more {
display: inline-block;    

padding: 5px 10px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 3px;
  }
  .conteudo {
display: flex;
flex-wrap: wrap;
z-index: 9999;
}

  .conteudo article {
    color: white;
    margin-top: 50px;
    width: fit-content;
    margin: 50px;
    z-index: 9998;

  }

  .warning-error {
    color: white;
  }

  .conteudo-about h1{
    color:white;
  }
.center {
  display: flex;
  justify-content: center;
}

svg {
  margin-right: 10px;
}

li {
  display: flex;
  align-items: center;
}

.conteudo h1 {
  color: purple;
}

.background-text {
  position: absolute;
  top: 20%;
}

.background-text h1 {
  color: white;
  font-size: 130px;
  border-bottom: #ffe200 5px solid;
  padding-bottom: 11px;
}
.relative-background {
  position: relative;
}

.conteudo .post {
  width: 40%;
}






</style>

<div class="card">
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
