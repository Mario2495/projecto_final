<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdeaPa001Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adea-pa001-search">

    <!-- <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?> -->

    <?= $form->field($model, 'id_adea_pa_001') ?>

    <?= $form->field($model, 'num_solicitud') ?>

    <?= $form->field($model, 'num_aprobacion') ?>

    <?= $form->field($model, 'id_agricultor') ?>

    <?= $form->field($model, 'id_finca') ?>

    <?php // echo $form->field($model, 'id_programa') ?>

    <?php // echo $form->field($model, 'recogido') ?>

    <?php // echo $form->field($model, 'aprovacion')->checkbox() ?>

    <?php // echo $form->field($model, 'comentarios') ?>

    <?php // echo $form->field($model, 'recomendaciones') ?>

    <?php // echo $form->field($model, 'fecha') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
