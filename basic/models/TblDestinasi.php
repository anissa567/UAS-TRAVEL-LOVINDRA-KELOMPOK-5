<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_destinasi".
 *
 * @property string $id_destinasi
 * @property string|null $id_admin
 * @property string|null $nama_destinasi
 * @property string|null $kode_lokasi
 * @property string|null $deskripsi
 * @property string|null $harga
 * @property string $tbl_admin_id_admin
 *
 * @property TblAdmin $tblAdminIdAdmin
 * @property TblPemesanan[] $tblPemesanans
 */
class TblDestinasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_destinasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_destinasi', 'tbl_admin_id_admin'], 'required'],
            [['id_destinasi', 'id_admin', 'nama_destinasi', 'kode_lokasi', 'harga', 'tbl_admin_id_admin'], 'string', 'max' => 45],
            [['deskripsi'], 'string', 'max' => 100],
            [['id_destinasi'], 'unique'],
            [['tbl_admin_id_admin'], 'exist', 'skipOnError' => true, 'targetClass' => TblAdmin::className(), 'targetAttribute' => ['tbl_admin_id_admin' => 'id_admin']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_destinasi' => 'Id Destinasi',
            'id_admin' => 'Id Admin',
            'nama_destinasi' => 'Nama Destinasi',
            'kode_lokasi' => 'Kode Lokasi',
            'deskripsi' => 'Deskripsi',
            'harga' => 'Harga',
            'tbl_admin_id_admin' => 'Tbl Admin Id Admin',
        ];
    }

    /**
     * Gets query for [[TblAdminIdAdmin]].
     *
     * @return \yii\db\ActiveQuery|TblAdminQuery
     */
    public function getTblAdminIdAdmin()
    {
        return $this->hasOne(TblAdmin::className(), ['id_admin' => 'tbl_admin_id_admin']);
    }

    /**
     * Gets query for [[TblPemesanans]].
     *
     * @return \yii\db\ActiveQuery|TblPemesananQuery
     */
    public function getTblPemesanans()
    {
        return $this->hasMany(TblPemesanan::className(), ['tbl_destinasi_id_destinasi' => 'id_destinasi']);
    }

    /**
     * {@inheritdoc}
     * @return TblDestinasiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblDestinasiQuery(get_called_class());
    }
}
