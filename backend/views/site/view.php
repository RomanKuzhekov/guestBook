<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $model \frontend\models\Guestbook */

$this->title = 'Просмотр отзыва от '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Список отзывов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Назад', ['site/index'], ['class' => 'btn']) ?>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'date_created',
            'name',
            'text',
            [
                'attribute'=>'active',
                'value' => function ($model) {
                    if ($model["active"] == 1) {
                        $active = 'Активно';
                    } else {
                        $active = 'На модерации';
                    }
                    return $active;
                }
            ],
        ],
    ]) ?>
</div>
