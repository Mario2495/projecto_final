<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "asda_pa_0025".
 *
 * @property int $id_asda_pa_0025
 * @property int $id_agricultor
 * @property int $d_agricultor
 * @property string $ano
 * @property double $cabida
 * @property double $cuerdas
 * @property double $propia
 * @property double $arrendada
 * @property double $usofructo
 * @property double $tamano_empresa
 * @property double $facilidad_costo_estimado
 * @property string $fecha_inicio_trabajo
 * @property string $fecha_limite_trabajo
 * @property string $fecha_solicitud
 * @property bool $firma_agricultor
 * @property string $recomendaciones
 * @property string $fecha_accion
 * @property bool $firma_director_representante
 * @property string $cotizacion_1
 * @property string $cotizacion_2
 *
 * @property DAgricultor $dAgricultor
 * @property Agricultor $asdaPa0025
 */
class AsdaPa0025 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asda_pa_0025';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_agricultor', 'd_agricultor'], 'integer'],
            [['ano', 'fecha_inicio_trabajo', 'fecha_limite_trabajo', 'fecha_solicitud', 'fecha_accion'], 'safe'],
            [['cabida', 'cuerdas', 'propia', 'arrendada', 'usofructo', 'tamano_empresa', 'facilidad_costo_estimado'], 'number'],
            [['firma_agricultor', 'firma_director_representante'], 'boolean'],
            [['cotizacion_1', 'cotizacion_2'], 'required'],
            [['recomendaciones'], 'string', 'max' => 255],
            [['cotizacion_1', 'cotizacion_2'], 'string', 'max' => 45],
            [['d_agricultor'], 'exist', 'skipOnError' => true, 'targetClass' => DAgricultor::className(), 'targetAttribute' => ['d_agricultor' => 'id_direccion']],
            [['id_asda_pa_0025'], 'exist', 'skipOnError' => true, 'targetClass' => Agricultor::className(), 'targetAttribute' => ['id_asda_pa_0025' => 'id_agricultor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_asda_pa_0025' => 'Id Asda Pa 0025',
            'id_agricultor' => 'Id Agricultor',
            'd_agricultor' => 'D Agricultor',
            'ano' => 'Ano',
            'cabida' => 'Cabida',
            'cuerdas' => 'Cuerdas',
            'propia' => 'Propia',
            'arrendada' => 'Arrendada',
            'usofructo' => 'Usofructo',
            'tamano_empresa' => 'Tamano Empresa',
            'facilidad_costo_estimado' => 'Facilidad Costo Estimado',
            'fecha_inicio_trabajo' => 'Fecha Inicio Trabajo',
            'fecha_limite_trabajo' => 'Fecha Limite Trabajo',
            'fecha_solicitud' => 'Fecha Solicitud',
            'firma_agricultor' => 'Firma Agricultor',
            'recomendaciones' => 'Recomendaciones',
            'fecha_accion' => 'Fecha Accion',
            'firma_director_representante' => 'Firma Director Representante',
            'cotizacion_1' => 'Cotizacion 1',
            'cotizacion_2' => 'Cotizacion 2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDAgricultor()
    {
        return $this->hasOne(DAgricultor::className(), ['id_direccion' => 'd_agricultor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsdaPa0025()
    {
        return $this->hasOne(Agricultor::className(), ['id_agricultor' => 'id_asda_pa_0025']);
    }
}
