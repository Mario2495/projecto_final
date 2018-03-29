<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "servicio".
 *
 * @property int $id_servicio
 * @property string $nombre_servicio
 *
 * @property Sde[] $sdes
 */
class Servicio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servicio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_servicio'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_servicio' => 'Id Servicio',
            'nombre_servicio' => 'Nombre Servicio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSdes()
    {
        return $this->hasMany(Sde::className(), ['id_servicio' => 'id_servicio']);
    }
}
