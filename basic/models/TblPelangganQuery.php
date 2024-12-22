<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblPelanggan]].
 *
 * @see TblPelanggan
 */
class TblPelangganQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblPelanggan[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblPelanggan|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
