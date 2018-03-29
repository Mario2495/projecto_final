<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AdeaPa001;

/**
 * AdeaPa001Search represents the model behind the search form of `frontend\models\AdeaPa001`.
 */
class AdeaPa001Search extends AdeaPa001
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_adea_pa_001', 'num_solicitud', 'num_aprobacion', 'id_agricultor', 'id_finca', 'id_programa'], 'integer'],
            [['recogido', 'comentarios', 'recomendaciones', 'fecha'], 'safe'],
            [['aprovacion'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = AdeaPa001::find();

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
            'id_adea_pa_001' => $this->id_adea_pa_001,
            'num_solicitud' => $this->num_solicitud,
            'num_aprobacion' => $this->num_aprobacion,
            'id_agricultor' => $this->id_agricultor,
            'id_finca' => $this->id_finca,
            'id_programa' => $this->id_programa,
            'aprovacion' => $this->aprovacion,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'recogido', $this->recogido])
            ->andFilterWhere(['like', 'comentarios', $this->comentarios])
            ->andFilterWhere(['like', 'recomendaciones', $this->recomendaciones]);

        return $dataProvider;
    }
}
