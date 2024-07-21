<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_reservasi".
 *
 * @property string $id_reservasi
 * @property string $id_transaksi
 * @property string $nik
 * @property string $no_kamar
 * @property string $tgl_check_in
 * @property string $tgl_check_out
 * @property string $status
 */
class TbReservasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_reservasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_reservasi', 'id_transaksi', 'nik', 'no_kamar', 'tgl_check_in', 'tgl_check_out', 'status'], 'required'],
            [['tgl_check_in', 'tgl_check_out'], 'safe'],
            [['status'], 'string'],
            [['id_reservasi'], 'string', 'max' => 20],
            [['id_transaksi'], 'string', 'max' => 15],
            [['nik'], 'string', 'max' => 20],
            [['no_kamar'], 'string', 'max' => 3],
            [['id_reservasi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_reservasi' => 'Id Reservasi',
            'id_transaksi' => 'Id Transaksi',
            'nik' => 'Nik',
            'no_kamar' => 'No Kamar',
            'tgl_check_in' => 'Tgl Check In',
            'tgl_check_out' => 'Tgl Check Out',
            'status' => 'Status',
        ];
    }
}
