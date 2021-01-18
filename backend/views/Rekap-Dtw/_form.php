<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapDtw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-dtw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_destinasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput() ?>

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
