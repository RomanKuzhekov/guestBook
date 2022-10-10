<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $model \frontend\models\Guestbook */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pages-form">
    <?php $form = ActiveForm::begin(); ?>

    <p><?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?></p>
    <p><?= $form->field($model, 'text')->textarea() ?></p>
    <p><?= $form->field($model, 'active')->dropdownList(['0'=>'На модерации', '1'=>'Активно']) ?></p>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
