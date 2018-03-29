<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "incentivos_agricolas".
 *
 * @property int $id_incentivo
 * @property string $nombre
 * @property int $activo
 * @property string $info
 *
 * @property IncentivosSolicitud[] $incentivosSolicituds
 */
class IncentivosAgricolas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'incentivos_agricolas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'activo', 'info'], 'required'],
            [['nombre'], 'string', 'max' => 45],
            [['activo'], 'string', 'max' => 1],
            [['info'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_incentivo' => 'Id Incentivo',
            'nombre' => 'Nombre',
            'activo' => 'Activo',
            'info' => 'Info',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIncentivosSolicituds()
    {
        return $this->hasMany(IncentivosSolicitud::className(), ['idIncentivo' => 'id_incentivo']);
    }
}
