<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TbKamar;

/**
 * TbKamarSearch represents the model behind the search form of `common\models\TbKamar`.
 */
class TbKamarSearch extends TbKamar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kamar', 'tipe_kamar', 'status', 'keterangan', 'gambar'], 'safe'],
            [['harga_per_malam'], 'integer'],
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
        $query = TbKamar::find();

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
            'harga_per_malam' => $this->harga_per_malam,
        ]);

        $query->andFilterWhere(['like', 'no_kamar', $this->no_kamar])
            ->andFilterWhere(['like', 'tipe_kamar', $this->tipe_kamar])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'gambar', $this->gambar]);

        return $dataProvider;
    }
}
