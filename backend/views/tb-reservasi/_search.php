<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TbReservasiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-reservasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_reservasi') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'no_kamar') ?>

    <?= $form->field($model, 'tgl_check_in') ?>

    <?= $form->field($model, 'tgl_check_out') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
