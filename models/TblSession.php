<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_session".
 *
 * @property integer $id_session
 * @property integer $id_coordinate
 * @property integer $id_user
 *
 * @property TblCoordinate $idCoordinate
 * @property TblUser $idUser
 */
class TblSession extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_session';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_session', 'id_coordinate', 'id_user'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_session' => 'Id Session',
            'id_coordinate' => 'Id Coordinate',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCoordinate()
    {
        return $this->hasOne(TblCoordinate::className(), ['id' => 'id_coordinate']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(TblUser::className(), ['id' => 'id_user']);
    }

    /**
     * @inheritdoc
     * @return TblSessionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblSessionQuery(get_called_class());
    }
}
