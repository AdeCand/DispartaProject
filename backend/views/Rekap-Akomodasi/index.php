<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RekapAkomodasiCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Akomodasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-akomodasi-index">
<div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekap Akomodasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_akomodasi',
            'nama_akomodasi',
            'kecamatan',
            'bulan',
            'minggu',
            //'jenis_wisatawan',
            //'jumlah',
            //'total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
