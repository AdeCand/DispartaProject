<?php
    $menu = $img = "";
    $config = new rce\material\Config();
    if (class_exists('common\models\Menu')) {
        // advence template
        $menu = common\models\Menu::getMenu();
        // echo $menu;die;
    }
    if (class_exists('app\models\Menu')) {
        // basic template
        $menu = app\models\Menu::getMenu();
    }
    if(empty($config::sidebarBackgroundImage())) {
        $img = $directoryAsset.'/img/sidebar-3.jpg';
    }else {
        $img = $config::sidebarBackgroundImage();
    }
?>
<div class="sidebar" data-color="<?= $config::sidebarColor() ?>" data-background-color="<?= $config::sidebarBackgroundColor()  ?>">
    <div class="logo">
        <a href="<?=  Yii::$app->request->baseUrl?>" class="simple-text logo-mini">
            <?php
            if(empty($config::logoMini())) { ?>
                <img src="<?=$directoryAsset;?>/img/logo_1.png" style="max-width: 45px;">
            <?php } else {
                echo $config::logoMini();
            }
            ?>
        </a>
        <a href="<?=  Yii::$app->request->baseUrl?>" class="simple-text logo-normal">
            <!-- <?= $config::siteTitle()  ?> -->
            Aplikasi Disparta
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?=  Yii::$app->request->baseUrl?>">
              <i class="material-icons">home</i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= Yii::$app->request->baseUrl. '/index.php?r=laporan-kunjungan' ?>">
              <i class="material-icons">assignment</i>
              <p>Laporan Kunjungan</p>
            </a>
          </li>
        </ul>
        <?= $menu ?>
    </div>
    <div class="sidebar-background" style="background-image: url(<?= $img ?>) "></div>
</div>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?=  Yii::$app->request->baseUrl?>" class="simple-text logo-mini">
            <?php
            if(empty($config::logoMini())) { ?>
                <img src="<?=$directoryAsset;?>/img/logo_1.png" style="max-width: 45px;">
            <?php } else {
                echo $config::logoMini();
            }
            ?>
        </a>
        <a href="<?=  Yii::$app->request->baseUrl?>" class="simple-text logo-normal">
            <!-- <?= $config::siteTitle()  ?> -->
            Aplikasi Disparta
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?=  Yii::$app->request->baseUrl?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.html">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= Yii::$app->request->baseUrl. '/index.php?r=laporan-kunjungan' ?>">
              <i class="material-icons">content_paste</i>
              <p>Laporan Kunjungan</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
