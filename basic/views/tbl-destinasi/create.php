<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblDestinasi */

$this->title = 'Create Tbl Destinasi';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Destinasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-destinasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
