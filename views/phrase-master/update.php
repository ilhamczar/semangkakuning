<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhraseMaster */

$this->title = 'Update Phrase Master: ' . ' ' . $model->Phrase_ID;
$this->params['breadcrumbs'][] = ['label' => 'Phrase Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Phrase_ID, 'url' => ['view', 'id' => $model->Phrase_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phrase-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
