<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbReservasi $model */

$this->title = 'Update Tb Reservasi: ' . $model->id_reservasi;
$this->params['breadcrumbs'][] = ['label' => 'Tb Reservasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_reservasi, 'url' => ['view', 'id_reservasi' => $model->id_reservasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-reservasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'pengunjung' => $pengunjung,
        'kamar' => $kamar,
    ]) ?>

</div>
