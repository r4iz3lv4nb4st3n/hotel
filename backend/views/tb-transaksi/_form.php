<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var common\models\TbTransaksi $model */
/** @var yii\widgets\ActiveForm $form */
/** @var $reservasi array */
?>

<div class="tb-transaksi-form  card card-info">
    <div class="card-header">
        <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
    </div>
    <div class="card-body">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'id_transaksi')->textInput(['maxlength' => true
                , 'value' => $model->id_transaksi,
                 'readonly' => true

            ]) ?>

        <?= $form->field($model, 'id_reservasi')->dropDownList(
            $reservasi, 
            ['prompt' => 'Choose Reservasi', 'id' => 'reservasi']) ?>

        <?=  $form->field($model, 'tgl_transaksi')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Enter Date Transaction', 'id' => 'date'],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd',
                'value' => date('yyyy-mm-dd'),
            ]
        ]);?> 

        <?= $form->field($model, 'total_harga')->textInput(['id' => 'total_harga']) ?>

        <?= $form->field($model, 'status_transaksi')->dropDownList([ 'Lunas' => 'Lunas', 'Belum Bayar' => 'Belum Bayar', ], ['prompt' => 'Choose Status']) ?>

    </div>

    
    <div class="card-footer">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success px-4 py-2']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<?php

$dataReservasi = (new \yii\db\Query())->select('*')
                                    ->from('tb_reservasi')
                                    ->all();

$dataKamar = (new \yii\db\Query())->select('*')
                                    ->from('tb_kamar')
                                    ->all();
?>
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

    document.getElementById('reservasi').onchange = (function(){
        let kodeReservasi = document.getElementById('reservasi').value;
        let dataReservasi = <?= json_encode($dataReservasi); ?>;
        let dataKamar = <?= json_encode($dataKamar); ?>;

        dataReservasi.forEach(konversi);

        function konversi(item){
            if(item.id_reservasi == kodeReservasi){
                let tanggalCO = new Date(item.tgl_check_out);
                let tanggalCI = new Date(item.tgl_check_in);

                let jumlahWaktu = tanggalCO.getDate() - tanggalCI.getDate();

                dataKamar.forEach(kamar);
                function kamar(itemKamar){
                    if(itemKamar.no_kamar == item.no_kamar){
                    let totalHarga = itemKamar.harga_per_malam * jumlahWaktu;
                    document.getElementById('total_harga').value = totalHarga;
                    console.log(totalHarga);
                }
                }

            }
        }
    })
</script>   
