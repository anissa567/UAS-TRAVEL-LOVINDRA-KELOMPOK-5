<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbladmin */

$this->title = 'Update Tbladmin: ' . $model->id_admin;
$this->params['breadcrumbs'][] = ['label' => 'Tbladmins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_admin, 'url' => ['view', 'id' => $model->id_admin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbladmin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
