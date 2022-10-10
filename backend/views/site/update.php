<?php

use yii\helpers\Html;

/* @var $model \frontend\models\Guestbook */

$this->title = 'Редактируем страницу:';
$this->params['breadcrumbs'][] = ['label' => 'Список отзывов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="pages-update">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Назад', ['site/index'], ['class' => 'btn']) ?>
    </p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
