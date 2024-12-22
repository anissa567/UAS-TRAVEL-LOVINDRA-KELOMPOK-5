<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblAdmin]].
 *
 * @see TblAdmin
 */
class TblAdminQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblAdmin[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblAdmin|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
