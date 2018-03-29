<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "asda_pa_0026".
 *
 * @property int $id_asda_pa_0026
 * @property int $id_agricultor
 * @property string $dirrecion_finca
 * @property double $costo_total_facildiades
 * @property string $nombre_parrafo
 * @property string $caracter_parrafo
 * @property string $nombre_facilidades_parrafo
 * @property string $pueblo_parrafo
 * @property bool $firma_parrafo
 * @property string $fecha_certificacion
 * @property double $costo_total_facilidades_certificacion
 * @property string $comentarios
 * @property bool $firma_certificante
 * @property string $fecha_aplicacion
 * @property bool $firma_director
 * @property string $fecha_firma_director
 * @property string $factura_1
 * @property string $factura_2
 * @property string $factura_3
 * @property string $factura_4
 *
 * @property Agricultor $agricultor
 */
class AsdaPa0026 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asda_pa_0026';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_agricultor'], 'integer'],
            [['costo_total_facildiades', 'costo_total_facilidades_certificacion'], 'number'],
            [['firma_parrafo', 'firma_certificante', 'firma_director'], 'boolean'],
            [['fecha_certificacion', 'fecha_aplicacion', 'fecha_firma_director'], 'safe'],
            [['comentarios'], 'string'],
            [['factura_1', 'factura_2', 'factura_3', 'factura_4'], 'required'],
            [['dirrecion_finca', 'nombre_parrafo', 'caracter_parrafo', 'nombre_facilidades_parrafo', 'pueblo_parrafo', 'factura_1', 'factura_2', 'factura_3', 'factura_4'], 'string', 'max' => 45],
            [['id_agricultor'], 'exist', 'skipOnError' => true, 'targetClass' => Agricultor::className(), 'targetAttribute' => ['id_agricultor' => 'id_agricultor']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_asda_pa_0026' => 'Id Asda Pa 0026',
            'id_agricultor' => 'Id Agricultor',
            'dirrecion_finca' => 'Dirrecion Finca',
            'costo_total_facildiades' => 'Costo Total Facildiades',
            'nombre_parrafo' => 'Nombre Parrafo',
            'caracter_parrafo' => 'Caracter Parrafo',
            'nombre_facilidades_parrafo' => 'Nombre Facilidades Parrafo',
            'pueblo_parrafo' => 'Pueblo Parrafo',
            'firma_parrafo' => 'Firma Parrafo',
            'fecha_certificacion' => 'Fecha Certificacion',
            'costo_total_facilidades_certificacion' => 'Costo Total Facilidades Certificacion',
            'comentarios' => 'Comentarios',
            'firma_certificante' => 'Firma Certificante',
            'fecha_aplicacion' => 'Fecha Aplicacion',
            'firma_director' => 'Firma Director',
            'fecha_firma_director' => 'Fecha Firma Director',
            'factura_1' => 'Factura 1',
            'factura_2' => 'Factura 2',
            'factura_3' => 'Factura 3',
            'factura_4' => 'Factura 4',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgricultor()
    {
        return $this->hasOne(Agricultor::className(), ['id_agricultor' => 'id_agricultor']);
    }
}
