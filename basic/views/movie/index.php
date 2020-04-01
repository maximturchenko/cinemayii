<?php

/* @var $this yii\web\View */

use yii\grid\GridView;
use yii\data\ActiveDataProvider;

$this->title = 'Кинотеатр';
?>
<div class="site-index">

     <?php //var_dump($movies); ?>  

    <div class="jumbotron">
        <h1>Самые свежие новинки кино!</h1>  
    </div>

    <div class="body-content">
        <div class="row">
            <?php foreach($movies as $movie): ?>
                <div class="col-lg-4">
                    <h2><?= $movie->name; ?></h2>            
                    <p><?=  $movie->description; ?></p> 
                    <p>Цена: <?=   $movie->price; ?> </p>
                </div>
            <?php endforeach; ?>  
        </div>
    </div>
</div>
