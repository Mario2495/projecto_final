<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "adea_ma_001_pa_003".
 *
 * @property int $id_agricultor
 * @property int $id_solicitud
 * @property int $agricultor_acepta_terminos
 * @property int $id_agronomo
 * @property string $fecha_solicitud
 * @property int $region
 * @property int $fiscal_year
 * @property string $empresas_agricolas
 * @property string $evaluacion
 * @property string $fecha_visita
 * @property int $aprobado_por_agronomo
 * @property double $cantidad_reembolso
 * @property string $numero_factura
 * @property string $fecha_factura
 * @property string $contratista_equipo
 * @property double $cantidad_pagada_agricultor
 * @property string $comentarios
 * @property int $certifico_inspeccion
 * @property string $firma_agronomo_licencia
 * @property string $fecha_firma_director
 * @property int $firma_director
 *
 * @property Agricultor $agricultor
 * @property IncentivosSolicitud[] $incentivosSolicituds
 */
class AdeaMa001Pa003 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adea_ma_001_pa_003';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_agricultor', 'agricultor_acepta_terminos', 'id_agronomo', 'fecha_solicitud', 'region', 'fiscal_year', 'empresas_agricolas', 'evaluacion', 'fecha_visita', 'aprobado_por_agronomo', 'cantidad_reembolso', 'numero_factura', 'fecha_factura', 'contratista_equipo', 'cantidad_pagada_agricultor', 'comentarios', 'certifico_inspeccion', 'firma_agronomo_licencia', 'fecha_firma_director', 'firma_director'], 'required'],
            [['id_agricultor', 'id_agronomo', 'region', 'fiscal_year'], 'integer'],
            [['fecha_solicitud', 'fecha_visita', 'fecha_factura', 'fecha_firma_director'], 'safe'],
            [['cantidad_reembolso', 'cantidad_pagada_agricultor'], 'number'],
            [['numero_factura'], 'string'],
            [['agricultor_acepta_terminos', 'aprobado_por_agronomo', 'certifico_inspeccion', 'firma_director'], 'string', 'max' => 1],
            [['empresas_agricolas', 'evaluacion', 'comentarios'], 'string', 'max' => 255],
            [['contratista_equipo', 'firma_agronomo_licencia'], 'string', 'max' => 45],
            [['id_agricultor'], 'exist', 'skipOnError' => true, 'targetClass' => Agricultor::className(), 'targetAttribute' => ['id_agricultor' => 'id_agricultor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_agricultor' => 'Id Agricultor',
            'id_solicitud' => 'Id Solicitud',
            'agricultor_acepta_terminos' => 'Agricultor Acepta Terminos',
            'id_agronomo' => 'Id Agronomo',
            'fecha_solicitud' => 'Fecha Solicitud',
            'region' => 'Region',
            'fiscal_year' => 'Fiscal Year',
            'empresas_agricolas' => 'Empresas Agricolas',
            'evaluacion' => 'Evaluacion',
            'fecha_visita' => 'Fecha Visita',
            'aprobado_por_agronomo' => 'Aprobado Por Agronomo',
            'cantidad_reembolso' => 'Cantidad Reembolso',
            'numero_factura' => 'Numero Factura',
            'fecha_factura' => 'Fecha Factura',
            'contratista_equipo' => 'Contratista Equipo',
            'cantidad_pagada_agricultor' => 'Cantidad Pagada Agricultor',
            'comentarios' => 'Comentarios',
            'certifico_inspeccion' => 'Certifico Inspeccion',
            'firma_agronomo_licencia' => 'Firma Agronomo Licencia',
            'fecha_firma_director' => 'Fecha Firma Director',
            'firma_director' => 'Firma Director',
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
    public function getIncentivosSolicituds()
    {
        return $this->hasMany(IncentivosSolicitud::className(), ['idSolicitud' => 'id_solicitud']);
    }
}
