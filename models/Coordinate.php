<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_coordinate}}".
 *
 * @property integer $id
 * @property string $lastupdate
 * @property string $latitude
 * @property string $longitude
 * @property string $phone
 * @property string $session
 * @property integer $speed
 * @property string $distance
 * @property integer $accuracy
 */
class Coordinate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_coordinate}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastupdate'], 'safe'],
            [['latitude', 'longitude', 'distance'], 'number'],
            [['speed', 'accuracy'], 'integer'],
            [['phone', 'session'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lastupdate' => 'Lastupdate',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'phone' => 'Phone',
            'session' => 'Session',
            'speed' => 'Speed',
            'distance' => 'Distance',
            'accuracy' => 'Accuracy',
        ];
    }

    /**
     * @inheritdoc
     * @return TblCoordinateQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblCoordinateQuery(get_called_class());
    }
}
