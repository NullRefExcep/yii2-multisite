<?php

namespace nullref\multisite\models;

use Yii;

/**
 * This is the model class for table "site".
 *
 * @property integer $id
 * @property string $baseUrl
 */
class Site extends \yii\db\ActiveRecord
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
     */
    public function rules()
    {
        return [
            [['baseUrl'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'baseUrl' => 'Base Url',
        ];
    }
}
