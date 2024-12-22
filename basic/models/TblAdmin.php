<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_admin".
 *
 * @property string $id_admin
 * @property string|null $nama
 * @property string|null $no_hp
 * @property string|null $email
 *
 * @property TblDestinasi[] $tblDestinasis
 */
class TblAdmin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_admin'], 'required'],
            [['id_admin', 'nama', 'no_hp'], 'string', 'max' => 45],
            [['email'], 'string', 'max' => 100],
            [['id_admin'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_admin' => 'Id Admin',
            'nama' => 'Nama',
            'no_hp' => 'No Hp',
            'email' => 'Email',
        ];
    }

    /**
     * Gets query for [[TblDestinasis]].
     *
     * @return \yii\db\ActiveQuery|TblDestinasiQuery
     */
    public function getTblDestinasis()
    {
        return $this->hasMany(TblDestinasi::className(), ['tbl_admin_id_admin' => 'id_admin']);
    }

    /**
     * {@inheritdoc}
     * @return TblAdminQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblAdminQuery(get_called_class());
    }
}
