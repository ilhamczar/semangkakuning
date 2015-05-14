<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surah_master".
 *
 * @property integer $Surah_Number
 * @property string $Surah_Name
 * @property string $Description
 */
class SurahMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'surah_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Surah_Number'], 'required'],
            [['Surah_Number'], 'integer'],
            [['Surah_Name'], 'string', 'max' => 50],
            [['Description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Surah_Number' => Yii::t('app', 'Surah  Number'),
            'Surah_Name' => Yii::t('app', 'Surah  Name'),
            'Description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * @inheritdoc
     * @return SurahMasterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SurahMasterQuery(get_called_class());
    }
}
