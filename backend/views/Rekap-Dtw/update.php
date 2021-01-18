<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapDtw */

$this->title = 'Update Rekap Dtw: ' . $model->id_dtw;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Dtws', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dtw, 'url' => ['view', 'id' => $model->id_dtw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekap-dtw-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
