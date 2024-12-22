<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tblpemesanan;

/**
 * TblpemesananSeacrh represents the model behind the search form of `app\models\Tblpemesanan`.
 */
class TblpemesananSeacrh extends Tblpemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pemesanan', 'id_destinasi', 'id_pembayaran', 'tanggal_pemesanan', 'status', 'total', 'metode_pembayaran', 'tbl_pelanggan_id_pelanggan', 'tbl_destinasi_id_destinasi'], 'safe'],
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
        $query = Tblpemesanan::find();

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
        $query->andFilterWhere(['like', 'id_pemesanan', $this->id_pemesanan])
            ->andFilterWhere(['like', 'id_destinasi', $this->id_destinasi])
            ->andFilterWhere(['like', 'id_pembayaran', $this->id_pembayaran])
            ->andFilterWhere(['like', 'tanggal_pemesanan', $this->tanggal_pemesanan])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'total', $this->total])
            ->andFilterWhere(['like', 'metode_pembayaran', $this->metode_pembayaran])
            ->andFilterWhere(['like', 'tbl_pelanggan_id_pelanggan', $this->tbl_pelanggan_id_pelanggan])
            ->andFilterWhere(['like', 'tbl_destinasi_id_destinasi', $this->tbl_destinasi_id_destinasi]);

        return $dataProvider;
    }
}
