<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\AdeaPa001 */

// $this->title = Yii::t('app', 'Create Adea Pa001');
// $this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Adea Pa001s'), 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="adea-pa001-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
