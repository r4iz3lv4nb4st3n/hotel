<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_kamar".
 *
 * @property string $no_kamar
 * @property string $tipe_kamar
 * @property int $harga_per_malam
 * @property string $status
 * @property string $keterangan
 * @property string $gambar
 */
class TbKamar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_kamar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kamar', 'tipe_kamar', 'harga_per_malam', 'status', 'keterangan', 'gambar'], 'required'],
            [['tipe_kamar', 'status', 'keterangan'], 'string'],
            [['harga_per_malam'], 'integer'],
            [['no_kamar'], 'string', 'max' => 3],
            [['gambar'], 'string', 'max' => 50],
            [['no_kamar'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_kamar' => 'No Kamar',
            'tipe_kamar' => 'Tipe Kamar',
            'harga_per_malam' => 'Harga Per Malam',
            'status' => 'Status',
            'keterangan' => 'Keterangan',
            'gambar' => 'Gambar',
        ];
    }
}
