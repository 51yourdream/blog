<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%takonomy_category}}".
 *
 * @property string $id
 * @property string $name
 * @property string $description
 */
class TakonomyCategory extends \app\core\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%takonomy_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id', 'name'], 'string', 'max' => 64],
            [['description'], 'string', 'max' => 512],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
}
