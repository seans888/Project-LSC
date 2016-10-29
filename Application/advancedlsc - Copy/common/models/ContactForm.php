<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact_form".
 *
 * @property integer $id
 * @property string $sender_name
 * @property string $sender_email
 * @property string $subject
 * @property string $content
 */
class ContactForm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sender_name', 'sender_email', 'subject', 'content'], 'required'],
            [['content'], 'string'],
            [['sender_name'], 'string', 'max' => 50],
            [['sender_email', 'subject'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sender_name' => 'Sender Name',
            'sender_email' => 'Sender Email',
            'subject' => 'Subject',
            'content' => 'Content',
        ];
    }
}
