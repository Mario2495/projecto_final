<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adea_af_001".
 *
 * @property int $id_adea_af_001
 * @property string $aprobacion
 * @property string $ss
 * @property int $d_agricultor
 * @property int $id_agricultor
 *
 * @property Agricultor $agricultor
 * @property DAgricultor $dAgricultor
 */
class AdeaAf001 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adea_af_001';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_adea_af_001'], 'required'],
            [['id_adea_af_001', 'd_agricultor', 'id_agricultor'], 'integer'],
            [['aprobacion', 'ss'], 'string', 'max' => 45],
            [['id_adea_af_001'], 'unique'],
            [['id_agricultor'], 'exist', 'skipOnError' => true, 'targetClass' => Agricultor::className(), 'targetAttribute' => ['id_agricultor' => 'id_agricultor']],
            [['d_agricultor'], 'exist', 'skipOnError' => true, 'targetClass' => DAgricultor::className(), 'targetAttribute' => ['d_agricultor' => 'id_direccion']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_adea_af_001' => 'Id Adea Af 001',
            'aprobacion' => 'Aprobacion',
            'ss' => 'Ss',
            'd_agricultor' => 'D Agricultor',
            'id_agricultor' => 'Id Agricultor',
        ];
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
    public function getDAgricultor()
    {
        return $this->hasOne(DAgricultor::className(), ['id_direccion' => 'd_agricultor']);
    }
}
