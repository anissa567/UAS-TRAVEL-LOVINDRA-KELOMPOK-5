<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_transportasi".
 *
 * @property string $id_transportasi
 * @property string|null $nama_kendaraan
 * @property string|null $no_kendaraan
 * @property string|null $id_kendaraan
 * @property string|null $harga
 */
class TblTransportasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_transportasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transportasi'], 'required'],
            [['id_transportasi', 'nama_kendaraan', 'no_kendaraan', 'id_kendaraan', 'harga'], 'string', 'max' => 45],
            [['id_transportasi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transportasi' => 'Id Transportasi',
            'nama_kendaraan' => 'Nama Kendaraan',
            'no_kendaraan' => 'No Kendaraan',
            'id_kendaraan' => 'Id Kendaraan',
            'harga' => 'Harga',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TblTransportasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblTransportasiQuery(get_called_class());
    }
}
