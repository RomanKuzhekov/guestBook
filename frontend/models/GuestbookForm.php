<?php

namespace frontend\models;

use yii\base\Model;

class GuestbookForm extends Model
{
    public $name;
    public $text;
    public $date;

    public function rules()
    {
        return [
            [['name', 'text', 'date'], 'required'],
            ['text', 'trim'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'text' => 'Текст',
            'date' => 'Дата',
        ];
    }
}