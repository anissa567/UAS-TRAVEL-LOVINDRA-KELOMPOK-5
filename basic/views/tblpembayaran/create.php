<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblpembayaran */

$this->title = 'Create Tblpembayaran';
$this->params['breadcrumbs'][] = ['label' => 'Tblpembayarans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblpembayaran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
