<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_pelanggan".
 *
 * @property string $id_pelanggan
 * @property string|null $nama
 * @property string|null $alamat
 * @property string|null $no_hp
 * @property string|null $email
 *
 * @property TblPemesanan[] $tblPemesanans
 */
class TblPelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pelanggan'], 'required'],
            [['id_pelanggan', 'nama', 'alamat', 'no_hp'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 100],
            [['id_pelanggan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pelanggan' => 'Id Pelanggan',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'no_hp' => 'No Hp',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[TblPemesanans]].
     *
     * @return \yii\db\ActiveQuery|TblPemesananQuery
     */
    public function getTblPemesanans()
    {
        return $this->hasMany(TblPemesanan::className(), ['tbl_pelanggan_id_pelanggan' => 'id_pelanggan']);
    }

    /**
     * {@inheritdoc}
     * @return TblPelangganQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblPelangganQuery(get_called_class());
    }
}
