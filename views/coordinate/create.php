<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblCoordinate */

$this->title = 'Create Tbl Coordinate';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Coordinates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-coordinate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
