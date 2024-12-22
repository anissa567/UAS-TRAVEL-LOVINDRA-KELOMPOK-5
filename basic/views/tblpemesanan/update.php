<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblpemesanan */

$this->title = Yii::t('app', 'Update Tblpemesanan: {name}', [
    'name' => $model->id_pemesanan,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tblpemesanans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pemesanan, 'url' => ['view', 'id' => $model->id_pemesanan]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tblpemesanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
