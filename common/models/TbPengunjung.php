<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_pengunjung".
 *
 * @property string $nik
 * @property string $nama
 * @property string $alamat
 * @property string $no_telpon
 *
 * @property TbReservasi[] $tbReservasis
 */
class TbPengunjung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pengunjung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nik', 'nama', 'alamat', 'no_telpon'], 'required'],
            [['nik'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 40],
            [['alamat'], 'string', 'max' => 50],
            [['no_telpon'], 'string', 'max' => 13],
            [['nik'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nik' => 'Nik',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_telpon' => 'No Telpon',
        ];
    }

    /**
     * Gets query for [[TbReservasis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbReservasis()
    {
        return $this->hasMany(TbReservasi::class, ['nik' => 'nik']);
    }
}
