<?php
require_once("header.php");
require_once("controller/autenticationController.php");
require_once("shopArray.php");

?>

<div class="allProducts">

<?php
foreach ($products as $product) {
    echo "<div class='product'>";
    echo "<img src='" . $product['image'] . "' alt='" . $product['name'] . "' />";
    echo "<h3>" . $product['name'] . "</h3>";
    echo "<p>" . $product['description'] . "</p>";
    echo "<p>Price: $" . $product['price'] . "</p>";
    echo "<button>Add to Cart</button>";
    echo "</div>";
}

?>

</div>


<style>
    .product {
        width: 300px;
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px;
        color: white;
    }

    .allProducts {
        display: flex;
        flex-wrap: wrap;
        width: 90%;
        margin: 0 auto;
    }

    .product img {
        width: 100%;
        height: 200px;
    }

    .product h3 {
        margin: 0;
        padding: 0;
    }

    .product p {
        margin: 0;
        padding: 0;
    }

    .product button {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 3px;
        cursor: pointer;
        width: 100%;
    }

    .product button:hover {
        background-color: #000;
    }

    .product button:active {
        position: relative;
        top: 2px;
    }

  @media screen and (max-width: 1500px) {
    .allProducts {
        justify-content: center;
    }
  }
</style>