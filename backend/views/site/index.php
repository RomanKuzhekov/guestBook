<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use nkovacs\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $searchModel \backend\models\GuestbookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список отзывов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin(); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute'=>'date_created',
                    'filter' => DateTimePicker::widget([
                        'model' => $searchModel,
                        'value' => $searchModel->date_created,
                        'attribute' => 'date_created',
                        'type' => 'date',
                        'format' => 'php:Y-m-d',
                    ]),
                ],
                'name',
                'text',
                [
                    'attribute' => 'active',
                    'filter'    => ['0' => 'На модерации', '1' => 'Активно'],
                    'value' => function ($model) {
                        if ($model["active"] == 0) {
                            $active = 'На модерации';
                        } else {
                            $active = 'Активно';
                        }
                        return $active;
                    }
                ],
                ['class' => 'yii\grid\ActionColumn', 'visible' => Yii::$app->user->identity->role !== 'user'],
            ],
        ]); ?>
    <?php Pjax::end(); ?>
</div>
