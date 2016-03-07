<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblCoordinateCrud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-coordinate-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lastupdate') ?>

    <?= $form->field($model, 'latitude') ?>

    <?= $form->field($model, 'longitude') ?>

    <?= $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'session') ?>

    <?php // echo $form->field($model, 'speed') ?>

    <?php // echo $form->field($model, 'distance') ?>

    <?php // echo $form->field($model, 'accuracy') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
