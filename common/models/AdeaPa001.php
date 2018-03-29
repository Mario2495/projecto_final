<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "adea_pa_001".
 *
 * @property int $id_adea_pa_001
 * @property int $num_solicitud
 * @property int $num_aprobacion
 * @property int $id_agricultor
 * @property int $id_finca
 * @property int $id_programa
 * @property string $recogido
 * @property bool $aprovacion
 * @property string $comentarios
 * @property string $recomendaciones
 * @property string $fecha
 *
 * @property Programa $programa
 * @property Agricultor $agricultor
 */
class AdeaPa001 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adea_pa_001';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_solicitud', 'num_aprobacion', 'id_agricultor', 'id_finca', 'id_programa'], 'integer'],
            [['aprovacion'], 'boolean'],
            [['comentarios', 'recomendaciones'], 'string'],
            [['fecha'], 'safe'],
            [['recogido'], 'string', 'max' => 45],
            [['id_programa'], 'exist', 'skipOnError' => true, 'targetClass' => Programa::className(), 'targetAttribute' => ['id_programa' => 'id_programa']],
            [['id_agricultor'], 'exist', 'skipOnError' => true, 'targetClass' => Agricultor::className(), 'targetAttribute' => ['id_agricultor' => 'id_agricultor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_adea_pa_001' => 'Id Adea Pa 001',
            'num_solicitud' => 'Num Solicitud',
            'num_aprobacion' => 'Num Aprobacion',
            'id_agricultor' => 'Id Agricultor',
            'id_finca' => 'Id Finca',
            'id_programa' => 'Id Programa',
            'recogido' => 'Recogido',
            'aprovacion' => 'Aprovacion',
            'comentarios' => 'Comentarios',
            'recomendaciones' => 'Recomendaciones',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrograma()
    {
        return $this->hasOne(Programa::className(), ['id_programa' => 'id_programa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgricultor()
    {
        return $this->hasOne(Agricultor::className(), ['id_agricultor' => 'id_agricultor']);
    }
}
