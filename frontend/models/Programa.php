<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "programa".
 *
 * @property int $id_programa
 * @property string $nombre_prog
 *
 * @property AdeaPa001[] $adeaPa001s
 */
class Programa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_prog'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_programa' => 'Id Programa',
            'nombre_prog' => 'Nombre Prog',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdeaPa001s()
    {
        return $this->hasMany(AdeaPa001::className(), ['id_programa' => 'id_programa']);
    }
}
