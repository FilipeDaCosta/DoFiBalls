<?php

include_once 'products/Box.php';
include_once 'products/Article.php';

$allBoxes = file_get_contents('http://rest.sa/getAllBoxes.php');
$allBoxes = json_decode($allBoxes);

$allArticles = file_get_contents('http://rest.sa/getAllArticles.php');
$allArticles = json_decode($allArticles);

foreach ($allBoxes as $box){
    new Box($box->box_id, $box->box_pos_x, $box->box_pos_y, $box->box_pos_z, $box->article_id, $box->order_id);
}

foreach ($allArticles as $article){
    new Article($article->article_id, $article->description, $article->color_id, $article->src);
}
