<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_pemesanan".
 *
 * @property string $id_pemesanan
 * @property string|null $id_destinasi
 * @property string|null $id_pembayaran
 * @property string|null $tanggal_pemesanan
 * @property string|null $status
 * @property string|null $total
 * @property string|null $metode_pembayaran
 * @property string $tbl_pelanggan_id_pelanggan
 * @property string $tbl_destinasi_id_destinasi
 *
 * @property TblPembayaran[] $tblPembayarans
 * @property TblDestinasi $tblDestinasiIdDestinasi
 * @property TblPelanggan $tblPelangganIdPelanggan
 */
class TblPemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pemesanan', 'tbl_pelanggan_id_pelanggan', 'tbl_destinasi_id_destinasi'], 'required'],
            [['id_pemesanan', 'id_destinasi', 'id_pembayaran', 'tanggal_pemesanan', 'status', 'total', 'metode_pembayaran', 'tbl_pelanggan_id_pelanggan', 'tbl_destinasi_id_destinasi'], 'string', 'max' => 45],
            [['id_pemesanan'], 'unique'],
            [['tbl_destinasi_id_destinasi'], 'exist', 'skipOnError' => true, 'targetClass' => TblDestinasi::className(), 'targetAttribute' => ['tbl_destinasi_id_destinasi' => 'id_destinasi']],
            [['tbl_pelanggan_id_pelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => TblPelanggan::className(), 'targetAttribute' => ['tbl_pelanggan_id_pelanggan' => 'id_pelanggan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pemesanan' => Yii::t('app', 'Id Pemesanan'),
            'id_destinasi' => Yii::t('app', 'Id Destinasi'),
            'id_pembayaran' => Yii::t('app', 'Id Pembayaran'),
            'tanggal_pemesanan' => Yii::t('app', 'Tanggal Pemesanan'),
            'status' => Yii::t('app', 'Status'),
            'total' => Yii::t('app', 'Total'),
            'metode_pembayaran' => Yii::t('app', 'Metode Pembayaran'),
            'tbl_pelanggan_id_pelanggan' => Yii::t('app', 'Tbl Pelanggan Id Pelanggan'),
            'tbl_destinasi_id_destinasi' => Yii::t('app', 'Tbl Destinasi Id Destinasi'),
        ];
    }

    /**
     * Gets query for [[TblPembayarans]].
     *
     * @return \yii\db\ActiveQuery|TblPembayaranQuery
     */
    public function getTblPembayarans()
    {
        return $this->hasMany(TblPembayaran::className(), ['tbl_pemesanan_id_pemesanan' => 'id_pemesanan']);
    }

    /**
     * Gets query for [[TblDestinasiIdDestinasi]].
     *
     * @return \yii\db\ActiveQuery|TblDestinasiQuery
     */
    public function getTblDestinasiIdDestinasi()
    {
        return $this->hasOne(TblDestinasi::className(), ['id_destinasi' => 'tbl_destinasi_id_destinasi']);
    }

    /**
     * Gets query for [[TblPelangganIdPelanggan]].
     *
     * @return \yii\db\ActiveQuery|TblPelangganQuery
     */
    public function getTblPelangganIdPelanggan()
    {
        return $this->hasOne(TblPelanggan::className(), ['id_pelanggan' => 'tbl_pelanggan_id_pelanggan']);
    }

    /**
     * {@inheritdoc}
     * @return TblPemesananQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblPemesananQuery(get_called_class());
    }
}
