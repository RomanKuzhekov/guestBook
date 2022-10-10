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
            <div class="alert-success alert alert-dismissible hidden" role="alert"></div>
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

<?php
$js = <<<JS
    // Форма по аяксу
    $('#guestbook-form').on('beforeSubmit', function() {
       var data = $(this).serialize();
        $.ajax({
            url: '/site/index',
            type: 'POST',
            data: data,
            success: function(res) {
                $('#guestbook-form').trigger("reset");
                $('.guestbook-container .alert-success').prepend(res).show().delay(5000).slideUp(300);
            },
            error: function(){
                alert('Произошла ошибка, обновите страницу и попробуйте еще раз!');
            }
        });
        return false;
    });
JS;
$this->registerJs($js);
?>