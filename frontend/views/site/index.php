<?php

use rce\material\widgets\Card;
use Yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Aplikasi Disparta';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Selamat Datang </h1>        

        <p><a class="btn btn-lg btn-success" href="<?= Yii::$app->request->baseUrl. '/index.php?r=laporan-kunjungan' ?>">Buat Laporan Kunjungan</a></p>
    </div>

    <div class="body-content">

    <p class="lead">Data Kunjungan Anda</p>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php Card::begin([
                    'header'=>'header-icon',
                    'type'=>'card-stats',
                    'icon'=>'<i class="material-icons">content_copy</i>',
                    'color'=>'warning',
                    'title'=>'49/50<small>GB</small>',
                    'subtitle'=>'Used Space',
                    'footer'=>'<div class="stats">
                            <i class="material-icons text-danger">warning</i>
                            <a href="#">Get More Space...</a>
                          </div>',
                ]); Card::end(); ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php Card::begin([
                    'header'=>'header-icon',
                    'type'=>'card-stats',
                    'icon'=>'<i class="material-icons">store</i>',
                    'color'=>'success',
                    'title'=>'$34,245',
                    'subtitle'=>'Revenue',
                    'footer'=>'<div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                          </div>',
                ]); Card::end(); ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php Card::begin([
                    'header'=>'header-icon',
                    'type'=>'card-stats',
                    'icon'=>'<i class="material-icons">info_outline</i>',
                    'color'=>'danger',
                    'title'=>'75',
                    'subtitle'=>'Fixed Issues',
                    'footer'=>'<div class="stats">
                            <i class="material-icons">local_offer</i> Tracked from Github
                          </div>',
                ]); Card::end(); ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?php Card::begin([
                    'type'=>'card-stats',
                    'header'=>'header-icon',
                    'icon'=>'<i class="fa fa-twitter"></i>',
                    'color'=>'info',
                    'title'=>'+245',
                    'subtitle'=>'Followers',
                    'footer'=>'<div class="stats">
                            <i class="material-icons">update</i> Just Updated
                          </div>',
                ]); Card::end(); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>

</div>
