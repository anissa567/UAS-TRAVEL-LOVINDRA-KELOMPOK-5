<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblpembayaranSeacrh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblpembayaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_pembayaran') ?>

    <?= $form->field($model, 'id_pemesanan') ?>

    <?= $form->field($model, 'tanggal_pembayaran') ?>

    <?= $form->field($model, 'total') ?>

    <?= $form->field($model, 'metode_pembayaran') ?>

    <?php // echo $form->field($model, 'tbl_pemesanan_id_pemesanan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
