<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbldestinasi */

$this->title = 'Update Tbldestinasi: ' . $model->id_destinasi;
$this->params['breadcrumbs'][] = ['label' => 'Tbldestinasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_destinasi, 'url' => ['view', 'id' => $model->id_destinasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbldestinasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
