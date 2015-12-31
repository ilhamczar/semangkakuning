<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhraseMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phrase-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Language_ID')->textInput() ?>

    <?= $form->field($model, 'Surah_Number')->textInput() ?>

    <?= $form->field($model, 'Phrase_Number')->textInput() ?>

    <?= $form->field($model, 'Phrase_Content')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
