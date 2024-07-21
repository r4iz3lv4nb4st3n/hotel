<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbTransaksi $model */

$this->title = 'Add Transaction';
$this->params['breadcrumbs'][] = ['label' => 'Tb Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-transaksi-create content">

    <?= $this->render('_form', [
        'model' => $model,
        'reservasi' => $reservasi,
    ]) ?>

</div>
