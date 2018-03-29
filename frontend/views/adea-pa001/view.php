<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdeaPa001 */

$this->title = $model->id_adea_pa_001;
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Adea Pa001s'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="adea-pa001-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_adea_pa_001], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Home'), ['update', 'id' => $model->id_adea_pa_001], ['class' => 'btn btn-primary']) ?>
        <!-- <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_adea_pa_001], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?> -->
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_adea_pa_001',
            'num_solicitud',
            'num_aprobacion',
            'id_agricultor',
            'id_finca',
            'id_programa',
            'recogido',
            'aprovacion:boolean',
            'comentarios:ntext',
            'recomendaciones:ntext',
            'fecha',
        ],
    ]) ?>

</div>
