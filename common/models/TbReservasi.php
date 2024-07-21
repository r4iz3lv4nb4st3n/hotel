<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_reservasi".
 *
 * @property string $id_reservasi
 * @property string $nik
 * @property string $nama
 * @property string $no_kamar
 * @property string $tgl_check_in
 * @property string $tgl_check_out
 * @property string $status
 *
 * @property TbPengunjung $nik0
 * @property TbKamar $noKamar
 * @property TbTransaksi[] $tbTransaksis
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
            [['id_reservasi', 'nik', 'no_kamar', 'tgl_check_in', 'tgl_check_out', 'status'], 'required'],
            [['tgl_check_in', 'tgl_check_out'], 'safe'],
            [['status'], 'string'],
            [['id_reservasi'], 'string', 'max' => 20],
            [['nik'], 'string', 'max' => 20],
            [['no_kamar'], 'string', 'max' => 3],
            [['id_reservasi'], 'unique'],
            [['nik'], 'exist', 'skipOnError' => true, 'targetClass' => TbPengunjung::class, 'targetAttribute' => ['nik' => 'nik']],
            [['no_kamar'], 'exist', 'skipOnError' => true, 'targetClass' => TbKamar::class, 'targetAttribute' => ['no_kamar' => 'no_kamar']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_reservasi' => 'Id Reservasi',
            'nik' => 'Nik',
            'no_kamar' => 'No Kamar',
            'tgl_check_in' => 'Tgl Check In',
            'tgl_check_out' => 'Tgl Check Out',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Nik0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNik0()
    {
        return $this->hasOne(TbPengunjung::class, ['nik' => 'nik']);
    }

    /**
     * Gets query for [[NoKamar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoKamar()
    {
        return $this->hasOne(TbKamar::class, ['no_kamar' => 'no_kamar']);
    }

    /**
     * Gets query for [[TbTransaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTbTransaksis()
    {
        return $this->hasMany(TbTransaksi::class, ['id_reservasi' => 'id_reservasi']);
    }
}
