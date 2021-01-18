<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dtw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dtw-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_dtw')->textInput() ?>

    <?= $form->field($model, 'kecamatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
