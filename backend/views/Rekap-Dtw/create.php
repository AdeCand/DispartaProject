<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapDtw */

$this->title = 'Create Rekap Dtw';
$this->params['breadcrumbs'][] = ['label' => 'Rekap Dtws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-dtw-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
