<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\TbReservasi $model */

$this->title = $model->id_reservasi;
$this->params['breadcrumbs'][] = ['label' => 'Tb Reservasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-reservasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_reservasi' => $model->id_reservasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_reservasi' => $model->id_reservasi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_reservasi',
            'nik',
            'no_kamar',
            'tgl_check_in',
            'tgl_check_out',
            'status',
        ],
    ]) ?>

</div>
