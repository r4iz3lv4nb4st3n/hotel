<?php

use common\models\TbTransaksi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\TbTransaksiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Transaction';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-transaksi-index content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                    <?= Html::encode($this->title) ?>
                    </div>
                    <div class="card-tools">
                        <?= Html::a('Add Transaction', ['create'], ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                <div class="card-body">
                    <?php $searchModel->id_transaksi = null; ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id_transaksi',
                            'id_reservasi',
                            'tgl_transaksi',
                            'total_harga',
                            'status_transaksi',
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, TbTransaksi $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id_transaksi' => $model->id_transaksi]);
                                }
                            ],
                        ],
                    ]); ?>

                </div>
            </div>
        </div>
    </div>

    

</div>
