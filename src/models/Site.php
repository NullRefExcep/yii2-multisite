<?php

namespace nullref\multisite\models;

use nullref\multisite\src\models\SiteQuery;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "site".
 *
 * @property integer $id
 * @property string $host
 */
class Site extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site';
    }

    /**
     * @inheritdoc
     * @return SiteQuery the newly created [[SiteQuery]] instance.
     */
    public static function find()
    {
        return Yii::createObject(SiteQuery::className(), [get_called_class()]);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['host'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'host' => 'Host',
        ];
    }
}
