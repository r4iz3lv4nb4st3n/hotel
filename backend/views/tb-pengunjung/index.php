<?php

use common\models\TbPengunjung;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\TbPengunjungSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Visitors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-pengunjung-index content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title"><?= Html::encode($this->title) ?></div>
                    <div class="card-tools">
                        <?= Html::a('Add Visitor', ['create'], ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'nik',
                            'nama',
                            'alamat',
                            'no_telpon',
                            [
                                'class' => ActionColumn::className(),
                                'urlCreator' => function ($action, TbPengunjung $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'nik' => $model->nik]);
                                }
                            ],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>

    


</div>
