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

    <?= $form->field($model, 'Database_ID') ?>

    <?= $form->field($model, 'Surah_Number') ?>

    <?= $form->field($model, 'Phrase_Number') ?>

    <?= $form->field($model, 'Phrase_Content') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
