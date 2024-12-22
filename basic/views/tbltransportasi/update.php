<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbltransportasi */

$this->title = 'Update Tbltransportasi: ' . $model->id_transportasi;
$this->params['breadcrumbs'][] = ['label' => 'Tbltransportasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transportasi, 'url' => ['view', 'id' => $model->id_transportasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbltransportasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
