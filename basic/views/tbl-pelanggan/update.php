<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblPelanggan */

$this->title = 'Update Tbl Pelanggan: ' . $model->id_pelanggan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pelanggans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pelanggan, 'url' => ['view', 'id' => $model->id_pelanggan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-pelanggan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
