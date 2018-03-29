<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property int $id_region
 * @property string $nombre_region
 *
 * @property Empleado[] $empleados
 * @property Munincipio[] $munincipios
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_region'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_region' => 'Id Region',
            'nombre_region' => 'Nombre Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleado::className(), ['region' => 'id_region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunincipios()
    {
        return $this->hasMany(Munincipio::className(), ['id_region' => 'id_region']);
    }
}
