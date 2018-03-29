<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "periodo_asda_pss_02".
 *
 * @property int $id_periodo
 * @property string $start_periodo
 * @property string $end_periodo
 * @property string $desc_periodo
 *
 * @property AsdaPss02 $asdaPss02
 */
class PeriodoAsdaPss02 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periodo_asda_pss_02';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_periodo', 'end_periodo'], 'safe'],
            [['desc_periodo'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_periodo' => 'Id Periodo',
            'start_periodo' => 'Start Periodo',
            'end_periodo' => 'End Periodo',
            'desc_periodo' => 'Desc Periodo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsdaPss02()
    {
        return $this->hasOne(AsdaPss02::className(), ['id_asda_pss_02' => 'id_periodo']);
    }
}
