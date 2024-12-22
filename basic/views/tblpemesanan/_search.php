<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblpemesananSeacrh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblpemesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_pemesanan') ?>

    <?= $form->field($model, 'id_destinasi') ?>

    <?= $form->field($model, 'id_pembayaran') ?>

    <?= $form->field($model, 'tanggal_pemesanan') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'metode_pembayaran') ?>

    <?php // echo $form->field($model, 'tbl_pelanggan_id_pelanggan') ?>

    <?php // echo $form->field($model, 'tbl_destinasi_id_destinasi') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
