<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tbldestinasi;

/**
 * TbldestinasiSeacrh represents the model behind the search form of `app\models\Tbldestinasi`.
 */
class TbldestinasiSeacrh extends Tbldestinasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_destinasi', 'id_admin', 'nama_destinasi', 'kode_lokasi', 'deskripsi', 'harga', 'tbl_admin_id_admin'], 'safe'],
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
        $query = Tbldestinasi::find();

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
        $query->andFilterWhere(['like', 'id_destinasi', $this->id_destinasi])
            ->andFilterWhere(['like', 'id_admin', $this->id_admin])
            ->andFilterWhere(['like', 'nama_destinasi', $this->nama_destinasi])
            ->andFilterWhere(['like', 'kode_lokasi', $this->kode_lokasi])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'harga', $this->harga])
            ->andFilterWhere(['like', 'tbl_admin_id_admin', $this->tbl_admin_id_admin]);

        return $dataProvider;
    }
}
