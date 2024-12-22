<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblTransportasi */

$this->title = 'Create Tbl Transportasi';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Transportasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-transportasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
