<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kecamatan */

$this->title = 'Update : ' . $model->Kecamatan;
$this->params['breadcrumbs'][] = ['label' => 'Kecamatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Kecamatan, 'url' => ['view', 'id' => $model->id_kec]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kecamatan-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
