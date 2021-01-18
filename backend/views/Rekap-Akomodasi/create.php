<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAkomodasi */

$this->title = 'Create Rekap Akomodasi';
$this->params['breadcrumbs'][] = ['label' => 'Rekap Akomodasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-akomodasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
