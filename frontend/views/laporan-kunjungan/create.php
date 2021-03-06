<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\frontend\models\LaporanKunjungan;

/* @var $this yii\web\View */
/* @var $model frontend\models\LaporanKunjungan */

$this->title = 'Create Laporan Kunjungan';
$this->params['breadcrumbs'][] = ['label' => 'Laporan Kunjungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-kunjungan-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Laporan Kunjungan</h4>
                  <p class="card-category">Lengkapi Form di bawah ini</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Dtw/Akomodasi</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="box box-primary">
                                                  
                          <?php $form = ActiveForm::begin(); ?>
                            <?= $form->field($model, 'jenis_wisatawan')->dropDownList(['Wisatawan Asing' => 'Wisatawan Asing', 
                            'Wisatawan  Lokal' => 'Wisatawan Lokal'], ['prompt' => 'Pilih Jenis Wisatawan']) ?>
                          <?php ActiveForm::end(); ?>
                        
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Negara</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Provinsi</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>                      
                    </div>                    
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pria</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Wanita</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>                    
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            </div>
        </div>
    </div>

    <!-- <?= $this->render('_form', [
        'model' => $model,
    ]) ?> -->

</div>
