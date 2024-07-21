<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\TbKamar $model */

$this->title = 'Update Tb Kamar: ' . $model->no_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Tb Kamars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_kamar, 'url' => ['view', 'no_kamar' => $model->no_kamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-kamar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
