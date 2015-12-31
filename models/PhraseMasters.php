<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phrase_master".
 *
 * @property integer $Phrase_ID
 * @property integer $Database_ID
 * @property integer $Surah_Number
 * @property integer $Phrase_Number
 * @property string $Phrase_Content
 *
 * @property SurahMaster $surahNumber
 */
class PhraseMasters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'phrase_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Database_ID', 'Surah_Number', 'Phrase_Number', 'Phrase_Content'], 'required'],
            [['Database_ID', 'Surah_Number', 'Phrase_Number'], 'integer'],
            [['Phrase_Content'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Phrase_ID' => 'Phrase  ID',
            'Database_ID' => 'Database  ID',
            'Surah_Number' => 'Surah  Number',
            'Phrase_Number' => 'Phrase  Number',
            'Phrase_Content' => 'Phrase  Content',
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
