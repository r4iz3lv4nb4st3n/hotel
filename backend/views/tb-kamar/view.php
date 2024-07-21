<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\TbKamar $model */

$this->title = $model->no_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Tb Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-kamar-view content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
                    <div class="card-tools">
                        <?= Html::a('Update', ['update', 'no_kamar' => $model->no_kamar], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'no_kamar' => $model->no_kamar], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </div>
                </div>
                <div class="card-body">
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'no_kamar',
                                'tipe_kamar',
                                'harga_per_malam',
                                'status',
                                'keterangan',
                                'gambar',
                            ],
                        ]) ?>
                    </div>
            </div>
        </div>
    </div>


   

</div>
