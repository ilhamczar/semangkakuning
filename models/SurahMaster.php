<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surah_master".
 *
 * @property integer $Surah_Number
 * @property string $Surah_Name
 * @property string $Description
 *
 * @property PhraseMaster[] $phraseMasters
 */
class SurahMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Surah_Master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Surah_Name'], 'required'],
            [['Description'], 'string'],
            [['Surah_Name'], 'string', 'max' => 50]
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
     * @return \yii\db\ActiveQuery
     */
    public function getPhraseMasters()
    {
        return $this->hasMany(PhraseMaster::className(), ['Surah_Number' => 'Surah_Number']);
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
