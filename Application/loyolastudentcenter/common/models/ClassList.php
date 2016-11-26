<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "class_list".
 *
 * @property integer $review_class_id
 * @property integer $user_id
 *
 * @property ReviewClass $reviewClass
 * @property User $user
 */
class ClassList extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'class_list';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['review_class_id', 'user_id'], 'required'],
            [['review_class_id', 'user_id'], 'integer'],
            [['review_class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReviewClass::className(), 'targetAttribute' => ['review_class_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'review_class_id' => 'Review Class Name',
            'user_id' => 'User Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviewClass()
    {
        return $this->hasOne(ReviewClass::className(), ['id' => 'review_class_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
