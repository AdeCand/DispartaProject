<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LaporanKunjunganCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-kunjungan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Laporan Kunjungan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_user',
            'kategori_akw',
            'negara',
            'provinsi',
            'pria',
            'wanita',
            'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
