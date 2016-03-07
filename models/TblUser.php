<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_user".
 *
 * @property integer $id
 * @property string $username
 *
 * @property TblSession[] $tblSessions
 */
class TblUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblSessions()
    {
        return $this->hasMany(TblSession::className(), ['id_user' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TblUserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblUserQuery(get_called_class());
    }
}
