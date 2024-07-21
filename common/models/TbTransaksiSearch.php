<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TbTransaksi;

/**
 * TbTransaksiSearch represents the model behind the search form of `common\models\TbTransaksi`.
 */
class TbTransaksiSearch extends TbTransaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'id_reservasi', 'tgl_transaksi', 'status_transaksi'], 'safe'],
            [['total_harga'], 'integer'],
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
        $query = TbTransaksi::find();

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
            'tgl_transaksi' => $this->tgl_transaksi,
            'total_harga' => $this->total_harga,
        ]);

        $query->andFilterWhere(['like', 'id_transaksi', $this->id_transaksi])
            ->andFilterWhere(['like', 'id_reservasi', $this->id_reservasi])
            ->andFilterWhere(['like', 'status_transaksi', $this->status_transaksi]);

        return $dataProvider;
    }
}
