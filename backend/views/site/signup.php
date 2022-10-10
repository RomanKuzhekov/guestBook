<?php

/* @var $model \backend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Вход в админку';

$form = ActiveForm::begin() ?>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <p><?= $form->field($model, 'role')->dropdownList(['user'=>'Пользователь', 'moderator'=>'Модератор', 'admin'=>'Админ']) ?></p>
    <div class="form-group">
        <div>
            <?= Html::submitButton('Регистрация', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>