<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SurahMaster */

$this->title = Yii::t('app', 'Create Surah Master');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Surah Masters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surah-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
