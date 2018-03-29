<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "d_agricultor".
 *
 * @property int $id_direccion
 * @property int $id_agricultor
 * @property string $tipo
 * @property int $pueblo
 * @property string $pais
 * @property string $dirrecion_1
 * @property string $dirrecion_2
 * @property string $zip
 *
 * @property AdeaAf001[] $adeaAf001s
 * @property AsdaPa0025[] $asdaPa0025s
 * @property AsdaPss02[] $asdaPss02s
 * @property Agricultor $agricultor
 * @property Munincipio $pueblo0
 */
class DAgricultor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'd_agricultor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_agricultor', 'pueblo'], 'integer'],
            [['tipo'], 'string', 'max' => 1],
            [['pais', 'dirrecion_1', 'dirrecion_2', 'zip'], 'string', 'max' => 45],
            [['id_agricultor'], 'exist', 'skipOnError' => true, 'targetClass' => Agricultor::className(), 'targetAttribute' => ['id_agricultor' => 'id_agricultor']],
            [['pueblo'], 'exist', 'skipOnError' => true, 'targetClass' => Munincipio::className(), 'targetAttribute' => ['pueblo' => 'id_munincipio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_direccion' => 'Id Direccion',
            'id_agricultor' => 'Id Agricultor',
            'tipo' => 'Tipo',
            'pueblo' => 'Pueblo',
            'pais' => 'Pais',
            'dirrecion_1' => 'Dirrecion 1',
            'dirrecion_2' => 'Dirrecion 2',
            'zip' => 'Zip',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdeaAf001s()
    {
        return $this->hasMany(AdeaAf001::className(), ['d_agricultor' => 'id_direccion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsdaPa0025s()
    {
        return $this->hasMany(AsdaPa0025::className(), ['d_agricultor' => 'id_direccion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsdaPss02s()
    {
        return $this->hasMany(AsdaPss02::className(), ['id_d_agricultor' => 'id_direccion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgricultor()
    {
        return $this->hasOne(Agricultor::className(), ['id_agricultor' => 'id_agricultor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPueblo0()
    {
        return $this->hasOne(Munincipio::className(), ['id_munincipio' => 'pueblo']);
    }
}
