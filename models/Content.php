<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%content}}".
 *
 * @property integer $id
 * @property integer $takonomy_id
 * @property integer $user_id
 * @property string $user_name
 * @property integer $last_user_id
 * @property string $last_user_name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $focus_count
 * @property integer $favorite_count
 * @property integer $view_count
 * @property integer $comment_count
 * @property integer $agree_count
 * @property integer $against_count
 * @property integer $is_sticky
 * @property integer $is_recommend
 * @property integer $is_headline
 * @property integer $flag
 * @property integer $allow_comment
 * @property string $password
 * @property string $template
 * @property integer $sort_num
 * @property integer $visibility
 * @property integer $status
 * @property string $content_type
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string $seo_description
 * @property string $title
 * @property string $summary
 * @property string $thumb
 * @property string $url_alias
 */
class Content extends \app\core\base\BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%content}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['takonomy_id', 'user_id', 'last_user_id', 'created_at', 'updated_at', 'focus_count', 'favorite_count', 'view_count', 'comment_count', 'agree_count', 'against_count', 'is_sticky', 'is_recommend', 'is_headline', 'flag', 'allow_comment', 'sort_num', 'visibility', 'status'], 'integer'],
            [['user_id', 'created_at', 'updated_at', 'content_type', 'title'], 'required'],
            [['user_name', 'last_user_name', 'password', 'template', 'content_type'], 'string', 'max' => 64],
            [['seo_title', 'seo_keywords', 'seo_description', 'title', 'thumb', 'url_alias'], 'string', 'max' => 256],
            [['summary'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'takonomy_id' => 'Takonomy ID',
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'last_user_id' => 'Last User ID',
            'last_user_name' => 'Last User Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'focus_count' => 'Focus Count',
            'favorite_count' => 'Favorite Count',
            'view_count' => 'View Count',
            'comment_count' => 'Comment Count',
            'agree_count' => 'Agree Count',
            'against_count' => 'Against Count',
            'is_sticky' => 'Is Sticky',
            'is_recommend' => 'Is Recommend',
            'is_headline' => 'Is Headline',
            'flag' => 'Flag',
            'allow_comment' => 'Allow Comment',
            'password' => 'Password',
            'template' => 'Template',
            'sort_num' => 'Sort Num',
            'visibility' => 'Visibility',
            'status' => 'Status',
            'content_type' => 'Content Type',
            'seo_title' => 'Seo Title',
            'seo_keywords' => 'Seo Keywords',
            'seo_description' => 'Seo Description',
            'title' => 'Title',
            'summary' => 'Summary',
            'thumb' => 'Thumb',
            'url_alias' => 'Url Alias',
        ];
    }
}
