<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblPembayaran]].
 *
 * @see TblPembayaran
 */
class TblPembayaranQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblPembayaran[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblPembayaran|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
