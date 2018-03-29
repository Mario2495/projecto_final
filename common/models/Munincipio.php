<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "munincipio".
 *
 * @property int $id_munincipio
 * @property string $nombre_munincipio
 * @property int $id_region
 *
 * @property AsdaPa003[] $asdaPa003s
 * @property DAgricultor[] $dAgricultors
 * @property Region $region
 */
class Munincipio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'munincipio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_region'], 'integer'],
            [['nombre_munincipio'], 'string', 'max' => 45],
            [['id_region'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['id_region' => 'id_region']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_munincipio' => 'Id Munincipio',
            'nombre_munincipio' => 'Nombre Munincipio',
            'id_region' => 'Id Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsdaPa003s()
    {
        return $this->hasMany(AsdaPa003::className(), ['munincipio' => 'id_munincipio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDAgricultors()
    {
        return $this->hasMany(DAgricultor::className(), ['pueblo' => 'id_munincipio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id_region' => 'id_region']);
    }
}
