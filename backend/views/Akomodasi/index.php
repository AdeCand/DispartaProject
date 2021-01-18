<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use backend\models\Kecamatan;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AkomodasiCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akomodasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="akomodasi-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-sm-7"></div>
    <h2>Akomodasi</h2>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_akomodasi',
            'nama_akomodasi',
            [
                'attribute' => 'kecamatan',
                'enableSorting' => true,
                'value' => function ($model) {
                    return Kecamatan::findOne($model->kecamatan)->Kecamatan;
                },
                // 'filter'=>ArrayHelper::map(Kecamatan::find()->all(),'kecamatan', 'Kecamatan'),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
