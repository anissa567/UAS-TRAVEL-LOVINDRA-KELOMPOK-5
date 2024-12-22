<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tblpembayaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblpembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pemesanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metode_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbl_pemesanan_id_pemesanan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
