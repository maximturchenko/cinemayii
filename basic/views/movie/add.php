<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Добавление фнового фильма';
?> 
<?php $form = ActiveForm::begin() ?>
    <?= $form->field($movieform, 'name') ?>
    <?= $form->field($movieform, 'price') ?>
    <?= $form->field($movieform, 'description') ?>
    <?= $form->field($movieform, 'img')->fileInput() ?>


    <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>
   
