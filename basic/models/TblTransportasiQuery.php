<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblTransportasi]].
 *
 * @see TblTransportasi
 */
class TblTransportasiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblTransportasi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblTransportasi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
