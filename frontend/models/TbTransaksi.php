<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_transaksi".
 *
 * @property string $id_transaksi
 * @property string $id_reservasi
 * @property string $tgl_transaksi
 * @property int $total_harga
 * @property string $status_transaksi
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
            [['tgl_transaksi'], 'safe'],
            [['total_harga'], 'integer'],
            [['status_transaksi'], 'string'],
            [['id_transaksi'], 'string', 'max' => 15],
            [['id_reservasi'], 'string', 'max' => 10],
            [['id_transaksi'], 'unique'],
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
}
