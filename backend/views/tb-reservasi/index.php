<?php

use common\models\TbReservasi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\TbReservasiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Reservasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-reservasi-index content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><?= Html::encode($this->title) ?></div>
                    <div class="card-tools">
                        <?= Html::a('Add Reservasi', ['create'], ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                <div class="card-body">
                    <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'id_reservasi',
                                'nik',
                                'no_kamar',
                                'tgl_check_in',
                                'tgl_check_out',
                                'status',
                                [
                                    'class' => ActionColumn::className(),
                                    'urlCreator' => function ($action, TbReservasi $model, $key, $index, $column) {
                                        return Url::toRoute([$action, 'id_reservasi' => $model->id_reservasi]);
                                    }
                                ],
                            ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

    


</div>
