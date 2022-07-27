<?php

$articles = Article::getArticleList();
$boxes = Box::getBoxList();

getAmmountOfEachArticle($boxes);

echo '<section class="product">';
echo '<button class="pre-btn"><img src="img/arrow.png" alt=""></button>';
echo '<button class="nxt-btn"><img src="img/arrow.png" alt=""></button>';
echo '<div class="product-container">';
foreach ($articles as $article) {
    $ammount = 0;
    switch ($article->getArticleId()){
        case 1:
            $ammount = Box::getRedBoxes();
            break;
        case 2:
            $ammount = Box::getGreenBoxes();
            break;
        case 3:
            $ammount = Box::getBlueBoxes();
            break;
        case 4:
            $ammount = Box::getOrangeBoxes();
            break;
        case 5:
            $ammount = Box::getYellowBoxes();
            break;
    }
    $src = $article->getSrc();
    $description = $article->getDescription();
    echo '<div class="product-card">';
    echo '<div class="product-image">';
    echo "<img src='$src'; class='product-thumb' alt=''>";
    echo '<button class="card-btn">Add To Cart</button>';
    echo '</div>';
    echo '<div class="product-info">';
    echo "<h2 class='product-brand'>$description</h2>";
    echo "<p class='product-short-description'>Ammount: $ammount</p>";
    echo '</div>';
    echo '</div>';
}
echo '</div>';
echo '</section>';

function getAmmountOfEachArticle($boxes){
    foreach ($boxes as $box){
        switch ($box->getArticleId()){
            case 1:
                Box::setRedBoxes();
                break;
            case 2:
                Box::setGreenBoxes();
                break;
            case 3:
                Box::setBlueBoxes();
                break;
            case 4:
                Box::setOrangeBoxes();
                break;
            case 5:
                Box::setYellowBoxes();
                break;
        }
    }
}