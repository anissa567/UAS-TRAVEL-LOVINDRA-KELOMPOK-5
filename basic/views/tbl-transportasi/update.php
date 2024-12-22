<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblTransportasi */

$this->title = 'Update Tbl Transportasi: ' . $model->id_transportasi;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Transportasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transportasi, 'url' => ['view', 'id' => $model->id_transportasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-transportasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
