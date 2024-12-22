<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tbltransportasi;

/**
 * TbltransportasiSeacrh represents the model behind the search form of `app\models\Tbltransportasi`.
 */
class TbltransportasiSeacrh extends Tbltransportasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transportasi', 'nama_kendaraan', 'no_kendaraan', 'id_kendaraan', 'harga'], 'safe'],
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
        $query = Tbltransportasi::find();

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
        $query->andFilterWhere(['like', 'id_transportasi', $this->id_transportasi])
            ->andFilterWhere(['like', 'nama_kendaraan', $this->nama_kendaraan])
            ->andFilterWhere(['like', 'no_kendaraan', $this->no_kendaraan])
            ->andFilterWhere(['like', 'id_kendaraan', $this->id_kendaraan])
            ->andFilterWhere(['like', 'harga', $this->harga]);

        return $dataProvider;
    }
}
