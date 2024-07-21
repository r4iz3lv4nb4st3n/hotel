<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var common\models\TbReservasi $model */

/** @var yii\widgets\ActiveForm $form */
/** @var $kamar array */

$date = date('Y-m-d');
$tanggal = date('Ymd');
$dataReservasi = (new \yii\db\Query())->select(['id_reservasi'])
                                ->from('tb_reservasi')
                                ->where(['tgl_check_in' => $date])
                                ->orderBy(['id_reservasi' => SORT_DESC])
                                ->one();
$nomorUrut = (new \yii\db\Query())->select(['id_reservasi'])
                                ->from('tb_reservasi')
                                ->where(['tgl_check_in' => $date])
                                ->orderBy(['id_reservasi' => SORT_DESC])
                                ->count();

$filled_int = sprintf("%03d", (int)$nomorUrut+1);

if($dataReservasi == false){
    $idReservasi = 'RS-'.$tanggal.'001';
}else{
    $idReservasi = 'RS-'.$tanggal.$filled_int;
}

?>

<div class="tb-reservasi-form card card-info">
    <div class="card-header">
        <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_reservasi')->textInput(['readonly' => true, 'value' => $idReservasi]) ?>

        <?= $form->field($model, 'nik')->dropDownList(
            $pengunjung, 
            ['prompt' => 'Choose NIK'])  ?>

        <?= $form->field($model, 'no_kamar')->dropDownList(
            $kamar, 
            ['prompt' => 'Choose Rooms']) 
        ?>

        <?= $form->field($model, 'tgl_check_in')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter Check In', 'id' => 'date'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
        ]);?>

        <?=$form->field($model, 'tgl_check_out')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter Check Out'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
        ]); ?>

        <?= $form->field($model, 'status')->dropDownList([ 'Dipesan' => 'Dipesan', 'Selesai' => 'Selesai', 'Dibatalkan' => 'Dibatalkan', ], ['prompt' => 'Choose Status']) ?>

    </div>

    
    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success px-4 py-2']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
        window.onload = (function loadDate(){
        let date = new Date(),
        day = date.getDate(),
        month = date.getMonth() + 1,
        year = date.getFullYear();


        if(month < 10)month = "0" + month;
        if(day < 10) day = "0" + day;

        const todayDate = `${year}-${month}-${day}`;
        document.getElementById('date').value = todayDate;
    })
</script>