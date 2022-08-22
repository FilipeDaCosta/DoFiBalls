<?php

include_once 'products/Box.php';
include_once 'products/Article.php';

$redBoxes = array();
$greenBoxes = array();
$blueBoxes = array();
$orangeBoxes = array();
$yellowBoxes = array();

$allBoxes = file_get_contents('http://az-srv01-mysql-api.switzerlandnorth.cloudapp.azure.com/getAllBoxes.php');
$allBoxes = json_decode($allBoxes);

$allArticles = file_get_contents('http://az-srv01-mysql-api.switzerlandnorth.cloudapp.azure.com/getAllArticles.php');
$allArticles = json_decode($allArticles);

foreach ($allArticles as $article){
    new Article($article->article_id, $article->description, $article->color_id, $article->src);
}

foreach ($allBoxes as $box){
    var_dump($box);
    if(is_null($box->order_id)){
        $box->order_id = 0;
        $newBox = new Box($box->box_id, $box->box_pos_x, $box->box_pos_y, $box->box_pos_z, $box->article_id, $box->order_id);
        switch ($newBox->getArticleId()){
            case 1:
                array_push($redBoxes, $newBox);
                break;
            case 2:
                array_push($greenBoxes, $newBox);
                break;
            case 3:
                array_push($blueBoxes, $newBox);
                break;
            case 4:
                array_push($orangeBoxes, $newBox);
                break;
            case 5:
                array_push($yellowBoxes, $newBox);
                break;
        }
    }
}

foreach (Article::getArticleList() as $article){
    switch ($article->getArticleId()){
        case 1:
            $article->setBoxes($redBoxes);
            break;
        case 2:
            $article->setBoxes($greenBoxes);
            break;
        case 3:
            $article->setBoxes($blueBoxes);
            break;
        case 4:
            $article->setBoxes($orangeBoxes);
            break;
        case 5:
            $article->setBoxes($yellowBoxes);
            break;
    }
}