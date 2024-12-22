<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblDestinasi */

$this->title = 'Update Tbl Destinasi: ' . $model->id_destinasi;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Destinasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_destinasi, 'url' => ['view', 'id_destinasi' => $model->id_destinasi, 'tbl_admin_id_admin' => $model->tbl_admin_id_admin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-destinasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
