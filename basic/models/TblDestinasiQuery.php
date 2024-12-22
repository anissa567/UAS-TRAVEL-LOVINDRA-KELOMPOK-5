<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblDestinasi]].
 *
 * @see TblDestinasi
 */
class TblDestinasiQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return TblDestinasi[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TblDestinasi|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
