<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdeaPa001 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="adea-pa001-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_solicitud')->textInput() ?>

    <?= $form->field($model, 'num_aprobacion')->textInput() ?>

    <?= $form->field($model, 'id_agricultor')->textInput() ?>

    <?= $form->field($model, 'id_finca')->textInput() ?>

    <?= $form->field($model, 'id_programa')->textInput() ?>

    <?= $form->field($model, 'recogido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aprovacion')->checkbox() ?>

    <?= $form->field($model, 'comentarios')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'recomendaciones')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
