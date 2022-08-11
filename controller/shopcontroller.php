<?php

$articles = Article::getArticleList();

echo '<section class="product">';
echo '<button class="pre-btn"><img src="img/arrow.png" alt=""></button>';
echo '<button class="nxt-btn"><img src="img/arrow.png" alt=""></button>';
echo '<div class="product-container">';
foreach ($articles as $article) {
    $ammount = count($article->getBoxes());
    $src = $article->getSrc();
    $description = $article->getDescription();
    $id = $article->getArticleId();
    echo '<div class="product-card">';
    echo '<div class="product-image">';
    echo "<img src='$src' class='product-thumb' alt=''>";
    echo "<button class='card-btn' onclick='addToCart($id, $ammount)'>Add To Cart</button>";
    echo '</div>';
    echo '<div class="product-info">';
    echo "<h2 class='product-brand'>$description</h2>";
    echo "<p class='product-short-description' id='article$id'>Available Ammount: $ammount</p>";
    echo '</div>';
    echo '</div>';
}
echo '</div>';
echo '</section>';