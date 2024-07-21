<?php

use common\models\TbKamar;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\TbKamarSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Rooms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-kamar-index content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><?= Html::encode($this->title) ?></div>
                    <div class="card-tools">
                        <?= Html::a('<i class="fas fa-plus"></i> Add Room', ['create'], ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'no_kamar',
                            'tipe_kamar',
                            'harga_per_malam',
                            'status',
                            'keterangan',
                            'gambar',
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, TbKamar $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'no_kamar' => $model->no_kamar]);
                                }
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
