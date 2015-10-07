<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%takonomy}}".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $category_id
 * @property string $name
 * @property string $url_alias
 * @property string $thumb
 * @property string $description
 * @property integer $contents
 * @property integer $sort_num
 */
class Takonomy extends \app\core\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%takonomy}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'category_id', 'name', 'sort_num'], 'required'],
            [['parent_id', 'contents', 'sort_num'], 'integer'],
            [['category_id', 'name', 'url_alias'], 'string', 'max' => 64],
            [['thumb'], 'string', 'max' => 128],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'url_alias' => 'Url Alias',
            'thumb' => 'Thumb',
            'description' => 'Description',
            'contents' => 'Contents',
            'sort_num' => 'Sort Num',
        ];
    }
}
