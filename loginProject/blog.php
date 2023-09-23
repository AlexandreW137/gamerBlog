<?php
require_once("header.php");
require_once("controller/autenticationController.php");

?>
<style>
  .container-main {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: grid;
    grid-template-columns: 1fr 2fr 1fr;
    gap: 20px;
    background-color: #1a1a1a;
    color: #ffffff;
  }

  .column {
    padding: 20px;
    border-radius: 10px;
    background-color: #2b2b2b;
    
  }

  .popular {
    grid-column: 1 / 2;
    border-right: 1px dotted #ffe10054;
    
  }
  .popular h2 {
    margin: 30px;
    text-align: left;
    border-top: 1px solid red;
    font-size: 22px;
    padding: 8px;
    
  }

  .article {
    grid-column: 2 / 3;
  }

  .article-content img {
    width:260px;
    height: 160px;
    text-align: center;
  }

  .news {
    grid-column: 3 / 4;
  }

  .article-content {
    margin-bottom: 20px;
  }

  .read-more-button {
    background-color: #e74c3c;
    color: #ffffff;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
  }
</style>
</head>
<body>
<div class="container">
<div class="container-main">
  <div class="column popular">
    <h2>POPULAR NOW</h2>
    <div class="article-content">
      <img src="blogImages/aiArticle.jpg" alt="Popular Image">
      <h3>Inteligência Artificial</h3>
      <p>Short description of the article.</p>
      <p>Date: August 24, 2023</p>
    </div>
    <div class="article-content">
      <img src="popular-image.jpg" alt="Popular Image">
      <h3>Another Title</h3>
      <p>Another short description.</p>
      <p>Date: August 25, 2023</p>
    </div>
  </div>
  <div class="column article">
    <h2>ARTICLE</h2>
    <div class="article-content">
      <img src="article-image.jpg" alt="Article Image">
      <h3>Featured Article Title</h3>
      <p>Introduction to the featured article...</p>
      <button class="read-more-button">Read More</button>
    </div>
  </div>
  <div class="column news">
    <h2>NEWS</h2>
    <div class="article-content">
      <img src="news-image.jpg" alt="News Image">
      <h3>News Title</h3>
      <p>Short news description...</p>
    </div>
    <div class="article-content">
      <img src="news-image.jpg" alt="News Image">
      <h3>Another News Title</h3>
      <p>Another short news description...</p>
    </div>
  </div>
  </div>
  </div>
</body>
</html>
