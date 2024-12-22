<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TblDestinasi */

$this->title = $model->id_destinasi;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Destinasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tbl-destinasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_destinasi' => $model->id_destinasi, 'tbl_admin_id_admin' => $model->tbl_admin_id_admin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_destinasi' => $model->id_destinasi, 'tbl_admin_id_admin' => $model->tbl_admin_id_admin], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_destinasi',
            'id_admin',
            'nama_destinasi',
            'kode_lokasi',
            'deskripsi',
            'harga',
            'tbl_admin_id_admin',
        ],
    ]) ?>

</div>
