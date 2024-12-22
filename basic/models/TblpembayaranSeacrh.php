<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tblpembayaran;

/**
 * TblpembayaranSeacrh represents the model behind the search form of `app\models\Tblpembayaran`.
 */
class TblpembayaranSeacrh extends Tblpembayaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pembayaran', 'id_pemesanan', 'tanggal_pembayaran', 'total', 'metode_pembayaran', 'tbl_pemesanan_id_pemesanan'], 'safe'],
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
        $query = Tblpembayaran::find();

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
        $query->andFilterWhere(['like', 'id_pembayaran', $this->id_pembayaran])
            ->andFilterWhere(['like', 'id_pemesanan', $this->id_pemesanan])
            ->andFilterWhere(['like', 'tanggal_pembayaran', $this->tanggal_pembayaran])
            ->andFilterWhere(['like', 'total', $this->total])
            ->andFilterWhere(['like', 'metode_pembayaran', $this->metode_pembayaran])
            ->andFilterWhere(['like', 'tbl_pemesanan_id_pemesanan', $this->tbl_pemesanan_id_pemesanan]);

        return $dataProvider;
    }
}
