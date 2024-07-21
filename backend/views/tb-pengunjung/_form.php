<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\TbPengunjung $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tb-pengunjung-form card card-info">
    <div class="card-header">
        <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'no_telpon')->textInput(['maxlength' => true]) ?>
    </div>

    

    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success px-4 py-2']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
