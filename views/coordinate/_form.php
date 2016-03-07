<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblCoordinate */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-coordinate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lastupdate')->textInput() ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'session')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speed')->textInput() ?>

    <?= $form->field($model, 'distance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accuracy')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>