<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "incentivos_solicitud".
 *
 * @property int $idSolicitud
 * @property int $idIncentivo
 *
 * @property AdeaMa001Pa003 $solicitud
 * @property IncentivosAgricolas $incentivo
 */
class IncentivosSolicitud extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'incentivos_solicitud';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idSolicitud', 'idIncentivo'], 'required'],
            [['idSolicitud', 'idIncentivo'], 'integer'],
            [['idSolicitud'], 'exist', 'skipOnError' => true, 'targetClass' => AdeaMa001Pa003::className(), 'targetAttribute' => ['idSolicitud' => 'id_solicitud']],
            [['idIncentivo'], 'exist', 'skipOnError' => true, 'targetClass' => IncentivosAgricolas::className(), 'targetAttribute' => ['idIncentivo' => 'id_incentivo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idSolicitud' => 'Id Solicitud',
            'idIncentivo' => 'Id Incentivo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitud()
    {
        return $this->hasOne(AdeaMa001Pa003::className(), ['id_solicitud' => 'idSolicitud']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIncentivo()
    {
        return $this->hasOne(IncentivosAgricolas::className(), ['id_incentivo' => 'idIncentivo']);
    }
}
