<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phrase_master".
 *
 * @property integer $Phrase_ID
 * @property integer $Language_ID
 * @property integer $Surah_Number
 * @property integer $Phrase_Number
 * @property string $Phrase_Content
 *
 * @property SurahMaster $surahNumber
 */
class PhraseMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Phrase_Master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Language_ID', 'Surah_Number', 'Phrase_Number', 'Phrase_Content'], 'required'],
            [['Language_ID', 'Surah_Number', 'Phrase_Number'], 'integer'],
            [['Phrase_Content'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Phrase_ID' => Yii::t('app', 'Phrase  ID'),
            'Language_ID' => Yii::t('app', 'Language  ID'),
            'Surah_Number' => Yii::t('app', 'Surah  Number'),
            'Phrase_Number' => Yii::t('app', 'Phrase  Number'),
            'Phrase_Content' => Yii::t('app', 'Phrase  Content'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurahNumber()
    {
        return $this->hasOne(SurahMaster::className(), ['Surah_Number' => 'Surah_Number']);
    }

    /**
     * @inheritdoc
     * @return PhraseMasterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PhraseMasterQuery(get_called_class());
    }
}
