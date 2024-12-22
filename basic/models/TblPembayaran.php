<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_pembayaran".
 *
 * @property string $id_pembayaran
 * @property string|null $id_pemesanan
 * @property string|null $tanggal_pembayaran
 * @property string|null $total
 * @property string|null $metode_pembayaran
 * @property string $tbl_pemesanan_id_pemesanan
 *
 * @property TblPemesanan $tblPemesananIdPemesanan
 */
class TblPembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pembayaran', 'tbl_pemesanan_id_pemesanan'], 'required'],
            [['id_pembayaran', 'id_pemesanan', 'tanggal_pembayaran', 'total', 'metode_pembayaran', 'tbl_pemesanan_id_pemesanan'], 'string', 'max' => 45],
            [['id_pembayaran'], 'unique'],
            [['tbl_pemesanan_id_pemesanan'], 'exist', 'skipOnError' => true, 'targetClass' => TblPemesanan::className(), 'targetAttribute' => ['tbl_pemesanan_id_pemesanan' => 'id_pemesanan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembayaran' => 'Id Pembayaran',
            'id_pemesanan' => 'Id Pemesanan',
            'tanggal_pembayaran' => 'Tanggal Pembayaran',
            'total' => 'Total',
            'metode_pembayaran' => 'Metode Pembayaran',
            'tbl_pemesanan_id_pemesanan' => 'Tbl Pemesanan Id Pemesanan',
        ];
    }

    /**
     * Gets query for [[TblPemesananIdPemesanan]].
     *
     * @return \yii\db\ActiveQuery|TblPemesananQuery
     */
    public function getTblPemesananIdPemesanan()
    {
        return $this->hasOne(TblPemesanan::className(), ['id_pemesanan' => 'tbl_pemesanan_id_pemesanan']);
    }

    /**
     * {@inheritdoc}
     * @return TblPembayaranQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblPembayaranQuery(get_called_class());
    }
}
