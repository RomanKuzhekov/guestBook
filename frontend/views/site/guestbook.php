<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\Guestbook $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Гостевая книга';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Здесь публикуются отзывы наших клиентов.</p>


    <hr>
    <div class="row">
        <div class="col-lg-5">
            <h4>Форма добавления отзывов:</h4>
            <?php $form = ActiveForm::begin(['id' => 'guestbook-form']); ?>

            <?= $form->field($model, 'name'); ?>

            <?= $form->field($model, 'text')->textarea(['rows' => 6]); ?>

            <div class="form-group">
                <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary', 'name' => 'guestbook-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
