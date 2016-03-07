<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TblCoordinate]].
 *
 * @see TblCoordinate
 */
class TblCoordinateQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TblCoordinate[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TblCoordinate|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}