<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbReservasi $model */

$this->title = 'Add Reservasi';
$this->params['breadcrumbs'][] = ['label' => 'Tb Reservasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-reservasi-create content">

    <?= $this->render('_form', [
        'model' => $model,
        'kamar' => $kamar,
        'pengunjung' => $pengunjung
    ]) ?>

</div>
