<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblpembayaran */

$this->title = 'Update Tblpembayaran: ' . $model->id_pembayaran;
$this->params['breadcrumbs'][] = ['label' => 'Tblpembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pembayaran, 'url' => ['view', 'id' => $model->id_pembayaran]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tblpembayaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
