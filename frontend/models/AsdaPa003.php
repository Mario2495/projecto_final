<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "asda_pa_003".
 *
 * @property int $id_asda_pa_003
 * @property int $id_agricultor
 * @property string $empresa
 * @property int $munincipio
 * @property string $localizacion_finca
 * @property string $fondo_del_seguro_estado
 * @property string $seguro_desempleo
 * @property string $motivo_reembolso
 * @property string $evidencia_presentada
 * @property string $fecha
 * @property string $fecha_actualizacion
 * @property string $url_evidencia
 *
 * @property Munincipio $munincipio0
 */
class AsdaPa003 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asda_pa_003';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_agricultor', 'munincipio'], 'integer'],
            [['fecha', 'fecha_actualizacion'], 'safe'],
            [['empresa', 'localizacion_finca', 'fondo_del_seguro_estado', 'seguro_desempleo', 'motivo_reembolso', 'evidencia_presentada', 'url_evidencia'], 'string', 'max' => 45],
            [['munincipio'], 'exist', 'skipOnError' => true, 'targetClass' => Munincipio::className(), 'targetAttribute' => ['munincipio' => 'id_munincipio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_asda_pa_003' => 'Id Asda Pa 003',
            'id_agricultor' => 'Id Agricultor',
            'empresa' => 'Empresa',
            'munincipio' => 'Munincipio',
            'localizacion_finca' => 'Localizacion Finca',
            'fondo_del_seguro_estado' => 'Fondo Del Seguro Estado',
            'seguro_desempleo' => 'Seguro Desempleo',
            'motivo_reembolso' => 'Motivo Reembolso',
            'evidencia_presentada' => 'Evidencia Presentada',
            'fecha' => 'Fecha',
            'fecha_actualizacion' => 'Fecha Actualizacion',
            'url_evidencia' => 'Url Evidencia',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMunincipio0()
    {
        return $this->hasOne(Munincipio::className(), ['id_munincipio' => 'munincipio']);
    }
}
