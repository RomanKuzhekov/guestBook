<?php

namespace frontend\models;

use yii\db\ActiveRecord;

class Guestbook extends ActiveRecord
{
    public function rules()
    {
        return [
            [['name', 'text'], 'required', 'message' => 'Заполните поле'],
            [['name'], 'string', 'max' => 100],
            [['name', 'text'], 'trim'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'text' => 'Текст',
        ];
    }
}