<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblCoordinate */

$this->title = 'Update Tbl Coordinate: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Coordinates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-coordinate-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
