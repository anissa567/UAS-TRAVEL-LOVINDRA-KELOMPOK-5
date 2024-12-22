<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tblpemesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblpemesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pemesanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_destinasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pemesanan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metode_pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbl_pelanggan_id_pelanggan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbl_destinasi_id_destinasi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
