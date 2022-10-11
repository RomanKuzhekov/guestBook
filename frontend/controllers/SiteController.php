<?php

namespace frontend\controllers;

use frontend\models\Guestbook;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    const PAGINATION = 2;

    /**
     * Гостевая книга
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new Guestbook();
        $query = Guestbook::find()->orderBy('id DESC')->where('active=1'); //Выводим только отмодерированные отзывы
        $pages = new \yii\data\Pagination(['totalCount'=>$query->count(), 'pageSize' => self::PAGINATION, 'pageSizeParam'=>false, 'forcePageParam'=>false]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();

        if (\Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->save()) { //Сохраняем в БД и выводим сообщение
                $message = 'Ваш отзыв был добавлен, после модерации он появится на сайте.';
            } else {
                $message ='Не корректно заполнили поля!';
            }

            return $message;
        }

        return $this->render('guestbook', [
            'model' => $model,
            'pages' => $pages,
            'posts' => $posts,
        ]);
    }
}
