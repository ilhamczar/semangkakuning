<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhraseMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phrase-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Phrase_ID') ?>

    <?= $form->field($model, 'Language_ID') ?>

    <?= $form->field($model, 'Surah_Number') ?>

    <?= $form->field($model, 'Phrase_Number') ?>

    <?= $form->field($model, 'Phrase_Content') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
