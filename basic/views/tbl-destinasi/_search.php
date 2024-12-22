<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblDestinasiSeacrh */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-destinasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_destinasi') ?>

    <?= $form->field($model, 'id_admin') ?>

    <?= $form->field($model, 'nama_destinasi') ?>

    <?= $form->field($model, 'kode_lokasi') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?php // echo $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'tbl_admin_id_admin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
