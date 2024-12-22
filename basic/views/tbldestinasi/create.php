<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tbldestinasi */

$this->title = 'Create Tbldestinasi';
$this->params['breadcrumbs'][] = ['label' => 'Tbldestinasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbldestinasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
