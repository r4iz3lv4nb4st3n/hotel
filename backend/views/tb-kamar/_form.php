<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TbKamar $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-kamar-form card card-info">
    <div class="card-header">
        <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'no_kamar')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'tipe_kamar')->dropDownList([ 'Single Suite' => 'Single Suite', 'Double Suite' => 'Double Suite', 'Family Friendly' => 'Family Friendly', 'Super Luxury' => 'Super Luxury', ], ['prompt' => 'Choose Rooms']) ?>

        <?= $form->field($model, 'harga_per_malam')->textInput() ?>

        <?= $form->field($model, 'status')->dropDownList([ 'Tersedia' => 'Tersedia', 'Tidak Tersedia' => 'Tidak Tersedia', ], ['prompt' => 'Choose Status']) ?>

        <?= $form->field($model, 'keterangan')->textInput() ?>

        <?= $form->field($model, 'gambar')->textInput() ?>

    </div>

    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success px-4 py-2']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
