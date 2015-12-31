<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[PhraseMaster]].
 *
 * @see PhraseMaster
 */
class PhraseMasterQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return PhraseMaster[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return PhraseMaster|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}