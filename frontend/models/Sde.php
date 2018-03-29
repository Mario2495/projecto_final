<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sde".
 *
 * @property int $id_sde
 * @property string $id_agricultor
 * @property int $id_servicio
 * @property int $id_empleado
 * @property string $fecha
 *
 * @property Servicio $servicio
 */
class Sde extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sde';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_servicio', 'id_empleado'], 'integer'],
            [['fecha'], 'safe'],
            [['id_agricultor'], 'string', 'max' => 45],
            [['id_servicio'], 'exist', 'skipOnError' => true, 'targetClass' => Servicio::className(), 'targetAttribute' => ['id_servicio' => 'id_servicio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sde' => 'Id Sde',
            'id_agricultor' => 'Id Agricultor',
            'id_servicio' => 'Id Servicio',
            'id_empleado' => 'Id Empleado',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicio()
    {
        return $this->hasOne(Servicio::className(), ['id_servicio' => 'id_servicio']);
    }
}
