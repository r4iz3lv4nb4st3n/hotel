<?php

/** @var \yii\web\View $this */
/** @var string $content */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $this->beginBody() ?>

<header>
  <?php
  NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
      'class' => 'main-header navbar navbar-expand navbar-white navbar-light',
    ]
    ]);
    $menuItems = [
      ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if(Yii::$app->user->isGuest){
      $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    }
    echo Nav::widget([
      'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
      'items' => $menuItems,
    ]);
    echo 'Hello ' .Yii::$app->user->identity->username; 
    if(Yii::$app->user->isGuest){
      echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    }else{
      echo Html::beginForm(['site/logout'], 'post', ['class' => 'd-flex'])
        . Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-danger logout text-decoration-none ms-4']);
      echo Html::endForm(); 
    }

   
    NavBar::end();
  ?>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Hotel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="adminLTE/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin 123</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Data Master</li>
          <li class="nav-item">
            <?php if(Url::current() == '/hotel/backend/web/index.php?r=site%2Findex'){echo(Html::a('<i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p>', ['site/index'], ['class' => 'nav-link active']));}else{echo(Html::a('<i class="nav-icon fas fa-tachometer-alt"></i><p>Dashboard</p>', ['site/index'], ['class' => 'nav-link']));} ?>
          </li>
          <li class="nav-item">
            <?php if(str_contains(Url::current(), 'tb-kamar')){echo(Html::a('<i class="nav-icon fas fa-door-open"></i><p>Data Room</p>', ['tb-kamar/index'], ['class' => 'nav-link active']));}else{echo(Html::a('<i class="nav-icon fas fa-door-open"></i><p>Data Room</p>', ['tb-kamar/index'], ['class' => 'nav-link']));} ?>
          </li>
          <li class="nav-item">
          <?php if(str_contains(Url::current(), 'tb_pengunjung' )){echo(Html::a('<i class="nav-icon fas fa-user"></i><p>Data Visitors</p>', ['tb-pengunjung/index'], ['class' => 'nav-link active']));}else{echo(Html::a('<i class="nav-icon fas fa-user"></i><p>Data Visitors</p>', ['tb-pengunjung/index'], ['class' => 'nav-link']));} ?>
          </li>
          <li class="nav-item">
          <?php if(str_contains(Url::current(), 'tb-reservasi')){echo(Html::a('<i class="nav-icon fas fa-calendar"></i><p>Data Reservation</p>', ['tb-reservasi/index'], ['class' => 'nav-link active']));}else{echo(Html::a('<i class="nav-icon fas fa-calendar"></i><p>Data Reservation</p>', ['tb-reservasi/index'], ['class' => 'nav-link']));} ?>
          </li>
          <li class="nav-item">
          <?php if(str_contains(Url::current(), 'tb-transaksi')){echo(Html::a('<i class="nav-icon fas fa-money-bill"></i><p>Data Transaction</p>', ['tb-transaksi/index'], ['class' => 'nav-link active']));}else{echo(Html::a('<i class="nav-icon fas fa-money-bill"></i><p>Data Transaction</p>', ['tb-transaksi/index'], ['class' => 'nav-link']));} ?>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</header>

<main role="main" class="flex-shrink-0">
    <div class="content-wrapper">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
