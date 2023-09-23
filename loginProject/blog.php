<?php
require_once("header.php");
require_once("controller/autenticationController.php");
require_once("blogArray.php");?>

<style>
  .mainBlog {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    color: white;
}

.post {
    flex: 1; 
    margin: 20px;
    text-align: justify;
    max-width: 400px; 
    display: flex;
    flex-direction: column; 
}

.post img {
    width: 100%;
    max-height: 200px; 
    object-fit: cover; 
}

.post h2 {
    font-size: 20px;
}

.post p {
    font-size: 16px;
    flex-grow: 1; 
    margin: 10px;
    
}

.post a {
    color: white;
    text-decoration: none;
    text-align: center;
    background-color: #EFDE57;
    border: none;
    color: white;
    padding: 10px 60px;
    font-size: 16px;
    margin-top: 10px;
    cursor: pointer;
}

.post a span {
    color: black;
    font-weight: bold;
    text-transform: uppercase;
}



@media only screen and (max-width: 900px) {
    .post {
        flex: 1;
        margin: 10px;
        max-width: none; 
    }
    .post img {
        max-height: none; 
    }
}



</style>



<div class="mainBlog">
    <?php foreach ($posts as $post) { ?>
        <div class="post">
            <h2><?php echo $post['titulo']; ?></h2>
            <img src="<?php echo $post['imagem']; ?>" alt="Imagem de <?php echo $post['titulo']; ?>">
            <p><?php echo $post['descricao']; ?></p>
            <a href="<?php echo $post['link']; ?>"><span>Ler mais</span></a>
        </div>
    <?php } ?>


</div>



