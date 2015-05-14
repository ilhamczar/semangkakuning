<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SurahMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surah-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Surah_Number')->textInput() ?>

    <?= $form->field($model, 'Surah_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
