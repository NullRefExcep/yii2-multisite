<?php

namespace nullref\multisite\models;

use nullref\useful\DropDownTrait;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "site".
 *
 * @property integer $id
 * @property string $name
 * @property string $host
 * @property boolean is_default
 */
class Site extends ActiveRecord
{
    use DropDownTrait;

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
            [['host', 'name'], 'string', 'max' => 255],
            [['host', 'name'], 'required'],
            ['is_default', 'boolean'],
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
            'name' => 'Name',
            'is_default' => 'Is Default',
        ];
    }
}
