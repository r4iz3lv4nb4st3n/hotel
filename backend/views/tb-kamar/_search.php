<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TbKamarSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-kamar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_kamar') ?>

    <?= $form->field($model, 'tipe_kamar') ?>

    <?= $form->field($model, 'harga_per_malam') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'gambar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
