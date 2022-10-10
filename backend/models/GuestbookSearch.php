<?php

namespace backend\models;

use frontend\models\Guestbook;
use yii\data\ActiveDataProvider;

class GuestbookSearch extends Guestbook
{
    public function rules()
    {
        return [
            [['name', 'text'], 'string'],
            ['active', 'integer'],
            ['date_created', 'safe'],
        ];
    }

    public function search($params)
    {
        $query = Guestbook::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=>[
                'defaultOrder'=>[
                    'date_created' => SORT_DESC
                ]
            ],
            'pagination' => [
                'forcePageParam' => false,
                'pageSizeParam' => false,
                'pageSize' => 10
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'date_created', $this->date_created])
            ->andFilterWhere(['=', 'active', $this->active])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}