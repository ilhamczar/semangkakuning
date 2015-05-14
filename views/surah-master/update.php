<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SurahMaster */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Surah Master',
]) . ' ' . $model->Surah_Number;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Surah Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Surah_Number, 'url' => ['view', 'id' => $model->Surah_Number]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="surah-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
