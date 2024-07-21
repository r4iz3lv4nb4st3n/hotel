<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_transaksi".
 *
 * @property string $id_transaksi
 * @property string $id_reservasi
 * @property string $tgl_transaksi
 * @property int $total_harga
 * @property string $status_transaksi
 *
 * @property TbReservasi $reservasi
 */
class TbTransaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'id_reservasi', 'total_harga', 'status_transaksi'], 'required'],
            [['tgl_transaksi', 'id_transaksi'], 'safe'],
            [['total_harga'], 'integer'],
            [['status_transaksi'], 'string'],
            [['id_transaksi'], 'string', 'max' => 25],
            [['id_reservasi'], 'string', 'max' => 20],
            [['id_transaksi'], 'unique'],
            [['id_reservasi'], 'exist', 'skipOnError' => true, 'targetClass' => TbReservasi::class, 'targetAttribute' => ['id_reservasi' => 'id_reservasi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'id_reservasi' => 'Id Reservasi',
            'tgl_transaksi' => 'Tgl Transaksi',
            'total_harga' => 'Total Harga',
            'status_transaksi' => 'Status Transaksi',
        ];
    }

    /**
     * Gets query for [[Reservasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservasi()
    {
        return $this->hasOne(TbReservasi::class, ['id_reservasi' => 'id_reservasi']);
    }

    public function init()
    {
        parent::init();
        if ($this->isNewRecord) {
            $this->generateIdTransaksi();
        }
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)){
            if($this->isNewRecord){
                $this->generateIdTransaksi();
            }
            return true;
        }
        return false;
    }

    protected function generateIdTransaksi()
    {
        $tglNow = date('Ymd');

        // $cacheKey = 'last_transaction_' . $tglNow;
        // $lastTransaction = Yii::$app->cache->get($cacheKey);
        // if ($lastTransaction == null) {
        //     $lastTransaction = static::find()
        //         ->select(['id_transaksi'])
        //         ->where(['like', 'id_transaksi', 'TR-' . $tglNow . '%'])
        //         ->orderBy(['id_transaksi' => SORT_DESC])
        //         ->one();

        //     Yii::$app->cache->set($cacheKey, $lastTransaction, 60 * 5); 
        // }
        // // dd($lastTransaction);
        // if ($lastTransaction) {
        //     $lastIdNumber = (int)substr($lastTransaction->id_transaksi, -4);
        //     $newIdNumber = str_pad($lastIdNumber + 1, 4, '0', STR_PAD_LEFT);
        // } else {
        //     // dd('jk');
        //     $newIdNumber = '0001';
        // }

 
        // $id = 'TR-' . $tglNow . '%';
        $nomorTransaksi = (new \yii\db\Query())->select(['RIGHT(id_transaksi, 4) AS id_transaksi'])
                                                ->from('tb_transaksi')
                                                ->where(['tgl_transaksi' => $tglNow])
                                                ->orderBy(['id_transaksi' => SORT_DESC])
                                                ->one();
        if($nomorTransaksi == false){
            $this->id_transaksi = 'TR-' . $tglNow . '0001';
            Yii::$app->session->set('generated_id_transaksi', $this->id_transaksi);
        }else{
            $newIdNumb = (int)$nomorTransaksi['id_transaksi'] + 1;
            $filled_int = sprintf("%04d", $newIdNumb);

            $this->id_transaksi = 'TR-' . $tglNow . $filled_int;
            Yii::$app->session->set('generated_id_transaksi', $this->id_transaksi);
        }
        
    }
}
