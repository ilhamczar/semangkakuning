<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhraseMaster */

$this->title = Yii::t('app', 'Create Phrase Master');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Phrase Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phrase-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
