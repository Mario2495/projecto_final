<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdeaPa001 */

$this->title = Yii::t('app', 'Update Adea Pa001: {nameAttribute}', [
    'nameAttribute' => $model->id_adea_pa_001,
]);
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Adea Pa001s'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->id_adea_pa_001, 'url' => ['view', 'id' => $model->id_adea_pa_001]];
// $this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="adea-pa001-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
