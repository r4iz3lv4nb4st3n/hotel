<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbPengunjung $model */

$this->title = 'Update Tb Pengunjung: ' . $model->nik;
$this->params['breadcrumbs'][] = ['label' => 'Tb Pengunjungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nik, 'url' => ['view', 'nik' => $model->nik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-pengunjung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
