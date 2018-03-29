<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "empleado".
 *
 * @property int $id_empleado
 * @property string $nombre
 * @property string $inicial
 * @property string $apellido_1
 * @property string $apellido_2
 * @property string $password
 * @property string $division
 * @property int $region
 * @property string $posicion
 * @property string $cubiculo
 * @property bool $active
 *
 * @property Region $region0
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region'], 'integer'],
            [['active'], 'boolean'],
            [['nombre', 'inicial', 'apellido_1', 'apellido_2', 'password', 'division', 'posicion', 'cubiculo'], 'string', 'max' => 45],
            [['region'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region' => 'id_region']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_empleado' => 'Id Empleado',
            'nombre' => 'Nombre',
            'inicial' => 'Inicial',
            'apellido_1' => 'Apellido 1',
            'apellido_2' => 'Apellido 2',
            'password' => 'Password',
            'division' => 'Division',
            'region' => 'Region',
            'posicion' => 'Posicion',
            'cubiculo' => 'Cubiculo',
            'active' => 'Active',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion0()
    {
        return $this->hasOne(Region::className(), ['id_region' => 'region']);
    }
}
