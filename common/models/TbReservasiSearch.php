<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TbReservasi;

/**
 * TbReservasiSearch represents the model behind the search form of `common\models\TbReservasi`.
 */
class TbReservasiSearch extends TbReservasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_reservasi', 'nik', 'no_kamar', 'tgl_check_in', 'tgl_check_out', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TbReservasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'tgl_check_in' => $this->tgl_check_in,
            'tgl_check_out' => $this->tgl_check_out,
        ]);

        $query->andFilterWhere(['like', 'id_reservasi', $this->id_reservasi])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'no_kamar', $this->no_kamar])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
