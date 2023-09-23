<?php 
require_once("shared/header.php");
require_once("controller/autenticationController.php")
?>
<link rel="stylesheet" href="home.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

<!-- HOME SECTION -->
<section class=" section-1">
  <div class="slogan">
    <h1 class="company-title" id="trocaPalavras">TECBLOG</h1>
    <h2 class="company-slogan">
      The biggest technological blog and shop in the world
    </h2>
  </div>
  <div class="home-computer-container">
    <img class="home-computer" src="https://github.com/r-e-d-ant/Computer-store-website/blob/main/assets/images/home_img.png?raw=true" alt="a computer in dark with shadow" class="home-img">
  </div>
</section>






<script>
  const palavras = ["Tecnologia", "Inovação", "Futuro", "Progresso"];
  const tempoDeTroca = 3000; 

  const trocaPalavras = document.getElementById("trocaPalavras");
  let indiceAtual = 0;

  function trocarPalavra() {
    trocaPalavras.textContent = palavras[indiceAtual];
    indiceAtual = (indiceAtual + 1) % palavras.length;
  }

  setInterval(trocarPalavra, tempoDeTroca);
</script>
