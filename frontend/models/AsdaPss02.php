<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "asda_pss_02".
 *
 * @property int $id_asda_pss_02
 * @property int $id_agricultor
 * @property int $id_d_agricultor
 * @property int $id_periodo
 * @property string $nombre_finca
 * @property string $empresa_a
 * @property int $carr_num_finca
 * @property double $km_finca
 * @property string $munincipio_finca
 * @property string $barrio_finca
 * @property string $c_tipo
 * @property double $c_arrendadas
 * @property double $c_propias
 * @property double $c_otros
 * @property int $num_fondo
 * @property int $ss_p
 * @property int $ss_d
 * @property string $region
 * @property int $cert_agri
 * @property string $fecha_cert_agri
 * @property int $cert_agro
 * @property string $fecha_cert_agro
 *
 * @property Agricultor $agricultor
 * @property DAgricultor $dAgricultor
 * @property PeriodoAsdaPss02 $asdaPss02
 */
class AsdaPss02 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asda_pss_02';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_asda_pss_02', 'id_agricultor', 'id_d_agricultor'], 'required'],
            [['id_asda_pss_02', 'id_agricultor', 'id_d_agricultor', 'id_periodo', 'carr_num_finca', 'num_fondo', 'ss_p', 'ss_d'], 'integer'],
            [['km_finca', 'c_arrendadas', 'c_propias', 'c_otros'], 'number'],
            [['fecha_cert_agri', 'fecha_cert_agro'], 'safe'],
            [['nombre_finca', 'empresa_a', 'munincipio_finca', 'barrio_finca', 'region'], 'string', 'max' => 45],
            [['c_tipo'], 'string', 'max' => 2],
            [['cert_agri', 'cert_agro'], 'string', 'max' => 4],
            [['id_asda_pss_02'], 'unique'],
            [['id_agricultor'], 'exist', 'skipOnError' => true, 'targetClass' => Agricultor::className(), 'targetAttribute' => ['id_agricultor' => 'id_agricultor']],
            [['id_d_agricultor'], 'exist', 'skipOnError' => true, 'targetClass' => DAgricultor::className(), 'targetAttribute' => ['id_d_agricultor' => 'id_direccion']],
            [['id_asda_pss_02'], 'exist', 'skipOnError' => true, 'targetClass' => PeriodoAsdaPss02::className(), 'targetAttribute' => ['id_asda_pss_02' => 'id_periodo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_asda_pss_02' => 'Id Asda Pss 02',
            'id_agricultor' => 'Id Agricultor',
            'id_d_agricultor' => 'Id D Agricultor',
            'id_periodo' => 'Id Periodo',
            'nombre_finca' => 'Nombre Finca',
            'empresa_a' => 'Empresa A',
            'carr_num_finca' => 'Carr Num Finca',
            'km_finca' => 'Km Finca',
            'munincipio_finca' => 'Munincipio Finca',
            'barrio_finca' => 'Barrio Finca',
            'c_tipo' => 'C Tipo',
            'c_arrendadas' => 'C Arrendadas',
            'c_propias' => 'C Propias',
            'c_otros' => 'C Otros',
            'num_fondo' => 'Num Fondo',
            'ss_p' => 'Ss P',
            'ss_d' => 'Ss D',
            'region' => 'Region',
            'cert_agri' => 'Cert Agri',
            'fecha_cert_agri' => 'Fecha Cert Agri',
            'cert_agro' => 'Cert Agro',
            'fecha_cert_agro' => 'Fecha Cert Agro',
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
        return $this->hasOne(DAgricultor::className(), ['id_direccion' => 'id_d_agricultor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsdaPss02()
    {
        return $this->hasOne(PeriodoAsdaPss02::className(), ['id_periodo' => 'id_asda_pss_02']);
    }
}
