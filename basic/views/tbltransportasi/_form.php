<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tbltransportasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbltransportasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_transportasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kendaraan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
