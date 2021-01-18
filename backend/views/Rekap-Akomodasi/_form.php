<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAkomodasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-akomodasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_akomodasi')->textInput() ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bulan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minggu')->textInput() ?>

    <?= $form->field($model, 'jenis_wisatawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
