<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[SurahMaster]].
 *
 * @see SurahMaster
 */
class SurahMasterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return SurahMaster[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SurahMaster|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}