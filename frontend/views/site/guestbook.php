<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\Guestbook $model */
/** @var \frontend\models\Guestbook $posts */
/** @var \yii\data\Pagination $pages */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
use yii\widgets\LinkPager;

$this->title = 'Гостевая книга';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guestbook-container">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <?php foreach ($posts as $post): ?>
                <div class="guest-comment col-md-12">
                    <p><b><?=$post['name']?></b></p>
                    <p><?=$post['text']?></p>
                    <p><small class="date"><?=$post['date_created']?></small></p>
                </div>
            <?php endforeach; ?>

            <?=LinkPager::widget(['pagination' => $pages])?>

            <? if (empty($posts)): ?>
                <p>На данный момент добавленных отзывов нет.</p>
            <? endif; ?>

            <hr>

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
</div>
