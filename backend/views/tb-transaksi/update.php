<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbTransaksi $model */

$this->title = 'Update Tb Transaksi: ' . $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Tb Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transaksi, 'url' => ['view', 'id_transaksi' => $model->id_transaksi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-transaksi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'reservasi' => $reservasi,
    ]) ?>

</div>
