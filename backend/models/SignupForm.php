<?php

namespace backend\models;

use common\models\User;
use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $role;

    public function rules() {
        return [
            [['username', 'password'], 'required', 'message' => 'Заполните поле'],
            ['role', 'string'],
            ['username', 'unique', 'targetClass' => User::class,  'message' => 'Этот логин уже занят'],
        ];
    }

    public function attributeLabels() {
        return [
            'username' => 'Логин',
            'password' => 'Пароль',
            'role' => 'Роль',
        ];
    }
}