<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agricultor".
 *
 * @property int $id_agricultor
 * @property string $nombre
 * @property string $inicial
 * @property string $apellido_1
 * @property string $apellido_2
 * @property int $ss
 * @property string $d_post
 * @property string $d_resi
 * @property string $telefono
 * @property string $telefono_celular
 * @property string $fax
 * @property string $email
 *
 * @property AdeaAf001[] $adeaAf001s
 * @property AdeaMa001Pa003[] $adeaMa001Pa003s
 * @property AdeaPa001[] $adeaPa001s
 * @property AsdaPa0025 $asdaPa0025
 * @property AsdaPa0026[] $asdaPa0026s
 * @property AsdaPss02[] $asdaPss02s
 * @property DAgricultor[] $dAgricultors
 */
class Agricultor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agricultor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ss'], 'integer'],
            [['nombre', 'inicial', 'apellido_1', 'apellido_2', 'd_post', 'd_resi', 'telefono', 'telefono_celular', 'fax', 'email'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_agricultor' => 'Id Agricultor',
            'nombre' => 'Nombre',
            'inicial' => 'Inicial',
            'apellido_1' => 'Apellido 1',
            'apellido_2' => 'Apellido 2',
            'ss' => 'Ss',
            'd_post' => 'D Post',
            'd_resi' => 'D Resi',
            'telefono' => 'Telefono',
            'telefono_celular' => 'Telefono Celular',
            'fax' => 'Fax',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdeaAf001s()
    {
        return $this->hasMany(AdeaAf001::className(), ['id_agricultor' => 'id_agricultor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdeaMa001Pa003s()
    {
        return $this->hasMany(AdeaMa001Pa003::className(), ['id_agricultor' => 'id_agricultor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdeaPa001s()
    {
        return $this->hasMany(AdeaPa001::className(), ['id_agricultor' => 'id_agricultor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsdaPa0025()
    {
        return $this->hasOne(AsdaPa0025::className(), ['id_asda_pa_0025' => 'id_agricultor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsdaPa0026s()
    {
        return $this->hasMany(AsdaPa0026::className(), ['id_agricultor' => 'id_agricultor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsdaPss02s()
    {
        return $this->hasMany(AsdaPss02::className(), ['id_agricultor' => 'id_agricultor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDAgricultors()
    {
        return $this->hasMany(DAgricultor::className(), ['id_agricultor' => 'id_agricultor']);
    }
}
