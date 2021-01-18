<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RekapDtwCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Dtws';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-dtw-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekap Dtw', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dtw',
            'nama_destinasi',
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
