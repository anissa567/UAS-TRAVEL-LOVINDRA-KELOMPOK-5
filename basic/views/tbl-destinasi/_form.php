<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblDestinasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-destinasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_destinasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_admin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_destinasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode_lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'tbl_admin_id_admin')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
